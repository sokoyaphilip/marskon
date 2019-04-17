<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct(){
        parent::__construct();
//        if (!$this->input->is_ajax_request()) {
//            redirect(base_url());
//        }
    }

    /*
     * Login system
     * */
    public function login(){
        $response = array('status' => 'error');
        $this->form_validation->set_rules('login_username', 'Login Username','trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password','trim|required|xss_clean|min_length[6]|max_length[15]');

        if( $this->form_validation->run() == false ){
            // error
            $response['message'] = validation_errors();
            $this->return_response( $response );
        }else{
            // Lets log this shit in
            $data = array(
                'login_username' => $this->input->post('login_username', true),
                'password' => $this->input->post('password', true)
            );
            $user = $this->user->login($data);
            if( !$user ) {
                $response['message'] = 'Sorry! Incorrect login username or password';
                $this->return_response( $response );
            }elseif ($user->status == "block"){
                $response['message'] = 'Sorry! Your account has been deactivated. Contact support for assistance.';
                $this->return_response( $response );
            }else{
                $session_data = array('logged_in' => true, 'logged_id' => $user->id,
                    'login_username' => $this->input->post('login_username'),
                    'wallet' => $user->wallet,
                    'email' => $user->email,
                    'is_admin' => $user->is_admin);
                $this->session->set_userdata($session_data);
                $response['status'] = 'success';
                $this->return_response( $response );
            }
        }
    }

    public function signup(){
        $response = array('status' => 'error');
        $this->form_validation->set_rules('signup_email', 'Email Address', 'trim|required|xss_clean|valid_email|is_unique[users.email]', array('is_unique' => 'This %s has already been registered!'));
        $this->form_validation->set_rules('signup_phone', 'Phone number','trim|required|xss_clean|is_unique[users.phone]', array('is_unique' => 'This %s has already been registered!'));
        $this->form_validation->set_rules('password', 'Password','trim|required|xss_clean|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password','trim|required|xss_clean|min_length[6]|max_length[15]|matches[password]');

        if( $this->form_validation->run() == false ){
            // error
            $response['message'] = validation_errors();
            $this->return_response( $response );
        }else{

            $salt = salt(50);
            $code = $this->user->generate_user_code();
            $data = array(
                'email' => $this->input->post('signup_email', true),
                'name' => $this->input->post('signup_name', true),
                'phone' => $this->input->post('signup_phone', true),
                'salt' => $salt,
                'password' => shaPassword($this->input->post('password'), $salt),
                'ip' => $_SERVER['REMOTE_ADDR'],
                'date_registered' => get_now(),
                'last_login' => get_now(),
                'membership_type' => 'user',
                'user_code' => $code
            );

            $user = $this->user->create_account($data);
            if( !is_numeric($user) ) {
                $response['message'] = 'Sorry! There was an error creating the account. Try again later.';
                $this->return_response( $response );
            }else{
                $login_data = array(
                    'login_username' => $this->input->post('signup_email'),
                    'password'       => $this->input->post('password', true)
                );
                $user = $this->user->login($login_data);
                $session_data = array('logged_in' => true,
                    'logged_id' => $user->id,
                    'email' => $this->input->post('signup_email', true),
                    'login_username' => $this->input->post('login_username'),
                    'is_admin' => $user->is_admin
                );

                $this->session->set_userdata($session_data);
                $response['status'] = 'success';
                $this->return_response( $response );
            }
        }
    }

    /*
     *
     * Delete service for admin
     * */

    public function delete_service(){
        $response = array('status' => 'error');
        $id = $this->input->post('service_id');
        if(  $this->site->delete_service( $id ) ){
            $response['status'] = 'success';
            $this->return_response($response);
        }else{
            $response['message'] = 'There was an error deleting that service';
            $this->return_response( $response);
        }
    }

    /*
     *
     * Delete plan for admin
     * */

    public function delete_plan(){
        $response = array('status' => 'error');
        $id = $this->input->post('plan_id');

        if( $this->site->delete( array('id' => $id ), 'plans') ){
            $response['status'] = 'success';
            $this->return_response($response);
        }else{
            $response['message'] = 'There was an error deleting that plan';
            $this->return_response( $response);
        }
    }

    // update plan
    public function update_plan(){
        $response = array('status' => 'error');
        $id = $this->input->post('id');
        $name = $this->input->post('plan_name');
        $amount = $this->input->post('plan_amount');

        if( $this->site->update('plans', array('name' => $name, 'amount' => $amount) , "( id = {$id})") ){
            $response['status'] = 'success';
            $this->return_response( $response );
        }else{
            $this->return_response( $response );
        }

    }

    public function fetch_plans(){
        $response = array('status' => 'error');
        $id = $this->input->post_get('service_id', true);

        $plans_array = array();

        $plans = $this->site->get_result('plans', 'id,name, amount', "( sid = {$id})");

        $response['message'] = (array)$plans;
        if( $plans ){
            $response['status'] = 'success';
            foreach( $plans as $plan ){
                $res['id'] = $plan->id;
                $res['name'] = $plan->name;
//                $res['amount'] = $plan->amount;
//                Calculate the discount price
                $res['amount'] = $plan->amount ;
                array_push( $plans_array, $res );
            }
            $response['message'] = $plans_array;
        }

        $this->return_response( $response );

    }


    public function fund_wallet(){
//
//        print $copy_date;
        $response = array('status' => 'error');
        $payment_method = $this->input->post('payment_method', true);
        $amount = $this->input->post('amount', true);
        $product_id = $this->input->post('product_id', true);
        $transaction_id = $this->site->generate_code('transactions', 'trans_id');
        $payment_method = (int)$payment_method;
        $description = "Wallet funding via {{$payment_method}}";

        if( $this->input->post('bank') ) $description .= ' To ' . $this->input->post('bank');
        // paystack charge
        $charge = 0;
        if( $payment_method == 3 ){
            if( $amount < 2500 ){
                $charge = (1.55 / 100 ) * $amount;
            }elseif( $amount > 2500 ){
                $charge = (1.55 / 100 ) * $amount + 100;
            }
        }
        if( $payment_method == 1 && $amount < 5000 ){
            $response['message'] = 'You can only fund N5000 above with bank transfer.';
            $this->return_response( $response);
        }
        $insert_data = array(
            'amount'        => $amount,
            'charge'        => $charge,
            'product_id'    => $product_id,
            'description'   => $description,
            'trans_id'      => $transaction_id,
            'payment_method' => $payment_method,
            'date_initiated'    => get_now(),
            'user_id'        => $this->session->userdata('logged_id'),
            'status'        => 'pending'
        );

        if( $this->site->insert_data('transactions', $insert_data)){
            // return transaction ID
            $response['status'] = 'success';
            $response['message'] = $transaction_id;
            $this->return_response( $response);
        }else{
            $response['message'] = 'There was an error creating your transaction ID';
            $this->return_response( $response);
        }

    }


    // DAta purchase

    public function data_purchase(){

        $response = array('status' => 'error');

        $plan_id = $this->input->post('plan_id', true);
        $recipents = $this->input->post('recipents', true);
        $network_id = $this->input->post('network_id', true);
        $user_id = $this->session->userdata('user_id');
        $sponsor = $this->input->post('sponsor');

        // check for number validity
        $message = $description_number =  $invalid_numbers = '';
        $valid_numbers = array();
        $numbers = explode( ',', $recipents);
        $network_row = $this->get_network( $network_id );

        foreach( $numbers as $key => $msisdn ){
            $msisdn = preg_replace('/\D/', '', $msisdn);
            $strlen = strlen( $msisdn );
            switch ($strlen) {
                case 11:
                    $local_prefix = substr($msisdn, 0 , 4);
                    if( in_array($local_prefix, NIGERIA_TELCOS[$network_row->network_name])){
                        array_push($valid_numbers, $msisdn);
                        $message .= $msisdn. ',';
                    }else{
                        $invalid_numbers .= $msisdn;
                    }
                    break;
                case 13:
                    $local_prefix = substr($msisdn, 0 , 6);
                    if( in_array($local_prefix, NIGERIA_TELCOS[$network_row->network_name])){
                        array_push($valid_numbers, $msisdn);
                        $message .= $msisdn. ',';
                    }else{
                        $invalid_numbers .= $msisdn;
                    }
                    break;
                default:
                    $invalid_numbers .= $msisdn;
                    break;

            }
        }

        $count = count($valid_numbers);
        $plan_detail = $this->site->run_sql("SELECT name, amount FROM plans WHERE id = {$plan_id}")->row();
        if( $count ){
            $total_amount = $count * $plan_detail->amount;
            $user = $this->get_profile( $this->session->userdata('logged_id'));
            if( $user->wallet < 1 || $total_amount > $user->wallet){
                $response['message'] = "Please fund your wallet first.";
                $this->return_response( $response );
            }else{
                $user_id = $this->session->userdata('logged_id');
                $description = ucfirst( $network_row->network_name) . " {$plan_detail->name} data purchase for {$count} recipent ({$message})";
                if( $sponsor ) $description .= " with sponsor number : " . $sponsor;
                $transaction_id = $this->site->generate_code('transactions', 'trans_id');
                $insert_data = array(
                    'amount'        => $total_amount,
                    'product_id'    => $network_row->product_id,
                    'description'   => $description,
                    'trans_id'      => $transaction_id,
                    'payment_method' => 2,
                    'date_initiated'    => get_now(),
                    'user_id'        => $user_id
                );
                $user = $this->get_profile( $this->session->userdata('logged_id'));
                if( $user->wallet < 1 || $total_amount > $user->wallet){
                    $response['message'] = "Please fund your wallet first.";
                    $this->return_response( $response );
                }

                $insert_data['status'] = ( $user->membership_type == "reseller" ) ? 'pending' : 'success';
                $error = false; $ret = 'ORDER_COMPLETED';

                if( $network_id == 19 ){
                    $insert_data['status'] = 'pending';
                    $this->site->insert_data('transactions', $insert_data);
                    $smsmessage = "A new SME data plan ({$plan_detail->name}) has just been initiated from {$user->name}";
                    $url = "http://api.ebulksms.com:8080/sendsms.json";
                    $username = "marskonnect1@gmail.com"; $apikey = "f5c53d79bbb868d93d2b89b1ddb796d5138d4bdb";
                    $flash = 0; $sendername = "Marskonnect"; $messagetext = $smsmessage; $recipients = "08130316830";
                    $this->useJSON($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients);

                    $response['status'] = 'success';
                    $response['message'] = "Thanks for using " .lang('app_name').  ". Your {$plan_detail->name} data plan order for {$message} has been processed, and you would be credited in less than 15Min <br />";
                    $this->return_response( $response );
                }else{
                    foreach( $valid_numbers as $number ){
                        // fire the API
                        $ret = data_plan_code( $network_row->network_name, $plan_detail->name, $number);

                        if( $ret != false ){
                            if( $network_row->network_name  == 'mtn' ){
                                $sms_array = array('08130316830' => $ret);
                            }else{
                                $sms_array = array('07058665294' => $ret);
                            }
                            $this->load->library('AfricaSMS', $sms_array);
                            $this->africasms->sendsms();

//                            $url = "http://api.ebulksms.com:8080/sendsms.json"; 08130316830
//                            $username = "marskonnect1@gmail.com"; $apikey = "f5c53d79bbb868d93d2b89b1ddb796d5138d4bdb";
//                            $flash = 0; $sendername = ($network_row->network_name == 'mtn') ? 'MarsData' : "Marskonnect";
//                            $messagetext = $ret; $recipients = "08130316830";
//                            $sms_response = $this->useJSON($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients);
//                            if( $sms_response == false ){
//                                $error = true ;
//                            }
                        }else{
                            $error = true;
                        }
                    }
                    if( $error ){
                        $response['message'] = "There was an error processing your order, {$ret} please try again or contact us. Thanks";
                        $this->return_response( $response );
                    }
                    if( $this->site->set_field('users', 'wallet', "wallet-{$total_amount}", "id={$user_id}") ){
                        $insert_data['status'] = 'success';
                        $this->site->insert_data('transactions', $insert_data);
                        $response['status'] = 'success';
                        $response['message'] = "Thanks for using " .lang('app_name').  ". Your {$plan_detail->name} data plan order for {$message} has been processed. <br />";
                        if( $invalid_numbers != '' ){
                            $response['message'] .=  $invalid_numbers ." was not processed. because they are invalid or {$network_row->network_name} number";
                        }
                        $response['message'] .= "<br />Your transaction ID: <b>{$transaction_id}</b><br/> Process more!";
                        $this->return_response($response);
                    }else{
                        $response['message'] = "There was an error processing your order.";
                        $this->return_response($response);
                    }

                }
            }
        }else{
            $response['message'] = "We couldn't process your order because the number(s) {$invalid_numbers} is not ". ucfirst($network_row->network_name). " number(s) ";
            $this->return_response($response);
        }

    }

    // Airtime purchase
    public function buy_airtime(){
        $response = array('status' => 'error');
        $this->form_validation->set_rules('amount', 'Amount','trim|required|xss_clean');
        $this->form_validation->set_rules('network_id', 'You need to select a network.','trim|required|xss_clean');
        $this->form_validation->set_rules('recipents', 'Recipents NUmber','trim|required|xss_clean');
        if(  $this->form_validation->run() == FALSE ){
            $response['message'] = validation_errors();
            $this->return_response( $response );
        }

        // get the network stuff
        $network_id = $this->input->post('network_id', true);
        $network_row = $this->get_network( $network_id );
        $network_name = $network_row->network_name;
        $discount = $network_row->discount;

        $amount = $this->input->post('amount', true);
        $recipents = $this->input->post('recipents', true);
        $wallet = $this->input->post('wallet');

        // check number validity
        $message = $description_number =  $invalid_numbers = '';
        $valid_numbers = array();
        $numbers = explode(',', $recipents );
        foreach( $numbers as $key => $msisdn ){
            $msisdn = preg_replace('/\D/', '', $msisdn);
            $strlen = strlen( $msisdn );
            switch ($strlen) {
                case 11:
                    $local_prefix = substr($msisdn, 0 , 4);
                    if( in_array($local_prefix, NIGERIA_TELCOS[$network_name])){
                        array_push($valid_numbers, $msisdn);
                        $message .= $msisdn. ',';
                    }else{
                        $invalid_numbers .= $msisdn;
                    }
                    break;
                case 13:
                    $local_prefix = substr($msisdn, 0 , 6);
                    if( in_array($local_prefix, NIGERIA_TELCOS[$network_name])){
                        array_push($valid_numbers, $msisdn);
                        $message .= $msisdn. ',';
                    }else{
                        $invalid_numbers .= $msisdn;
                    }
                    break;
                default:
                    $invalid_numbers .= $msisdn;
                    break;

            }
        }
        $count = count($valid_numbers);
        if( $count ){
            $total_amount = $count * $amount;
            if( $discount > 1 ){
                $total_amount = $total_amount - ( $discount/100 * $total_amount );
            }
            if( $total_amount > $wallet ){
                $response['message'] = "You don't have enough money in your wallet for the transaction.";
                $this->return_response($response);
            }else{
                $user_id = $this->session->userdata('logged_id');
                $description = ucfirst( $network_name) . " airtime N{$amount} purchase for {$message}";
                $transaction_id = $this->site->generate_code('transactions', 'trans_id');
                $insert_data = array(
                    'amount'        => $total_amount,
                    'product_id'    => $network_row->product_id,
                    'description'   => $description,
                    'trans_id'      => $transaction_id,
                    'payment_method' => 2,
                    'date_initiated'    => get_now(),
                    'user_id'        => $user_id
                );
                // Call the API
                foreach( $valid_numbers as $number ){
                    $data = array(
                        'network'   => $network_name,
                        'amount'    => $amount,
                        'number'    => $number
                    );
                    $return = $b = $this->callAirtimeAPI( $data );
                    if( $return['status'] == "ORDER_RECEIVED" || $return['status'] == "ORDER_COMPLETED" ){
                        $insert_data['orderid'] = $return['orderid'];
                        $insert_data['status'] = 'success';
                        $insert_data['payment_status'] = $return['status'];
                    }else{
                        $insert_data['status'] = 'pending';
                        if( $return['orderid'] ) $insert_data['orderid'] = $return['orderid'];
                        $insert_data['payment_status'] = $return['status'];
                    }
                }

                if( $this->site->set_field('users', 'wallet', "wallet-{$total_amount}", "id={$user_id}") ){
                    $this->site->insert_data('transactions', $insert_data);
                    $response['status'] = 'success';
                    $response['message'] = "Thanks for using " . lang('app_name') .". Your order {$message} has been processed.<br />";
                    if( $invalid_numbers != '' ){
                        $response['message'] .=  $invalid_numbers ." was not processed. because they are invalid or not {$network_name} number";
                    }
                    $response['message'] .= "<br />Your transaction ID: <b>{$transaction_id}</b><br/> Process more!";
                    $this->return_response($response);
                }else{
                    $response['message'] = "There was an error processing your order.";
                    $this->return_response($response);
                }
            }
        }else{
            $response['message'] = "We couldn't process your order because the number(s) {$invalid_numbers} is not ". ucfirst($network_name). " numbers ";
            $this->return_response($response);
        }

    }


    // TV cable
    public function tv_cable(){
        $response = array('status' => 'error');
        $this->form_validation->set_rules('smart_card_number', 'Smart Card Number','trim|required|xss_clean');
        $this->form_validation->set_rules('registered_name', 'Registered Name','trim|required|xss_clean');
        $this->form_validation->set_rules('registered_number', 'Registered Number','trim|required|xss_clean');
        $this->form_validation->set_rules('network_id', 'TV Cable','trim|required|xss_clean');
        $this->form_validation->set_rules('plan_id', 'Plan','trim|required|xss_clean');

        if( $this->form_validation->run() == FALSE ){
            $response['message'] = validation_errors();
            $this->return_response( $response );
        }

        $plan_id = $this->input->post('plan_id', true);
        $smart_card_number = $this->input->post('smart_card_number', true);
        $registered_name = $this->input->post('registered_name', true);
        $registered_number = $this->input->post('registered_number', true);
        $wallet = $this->session->userdata('wallet');
        $user_id = $this->session->userdata('logged_id');

        $network_id = $this->input->post('network_id');

        $network_row = $this->get_network( $network_id );
        $product_id = $network_row->product_id;
        $network_name = $network_row->network_name; // gotv, dstv, startimes

        // verify...
        $plan_detail = $this->site->run_sql("SELECT name, amount FROM plans WHERE id = {$plan_id}")->row();

        $user = $this->get_profile( $this->session->userdata('logged_id'));


        $variation_detail = $this->site->run_sql("SELECT variation_name, variation_amount, api_source FROM api_variation WHERE plan_id = {$plan_id}")->row();
        $description = ucwords( $network_name) . " subscription plan for {$plan_detail->name} at N{$plan_detail->amount}.";
        $transaction_id = $this->site->generate_code('transactions', 'trans_id');

        $insert_data = array(
            'amount'        => $plan_detail->amount,
            'product_id'    => $product_id,
            'description'   => $description,
            'trans_id'      => $transaction_id,
            'payment_method' => 2,
            'date_initiated'    => get_now(),
            'user_id'        => $user_id,
            'status'        => 'pending'
        );

        if( $user->wallet < 1 || $plan_detail->amount > $user->wallet){
            $response['message'] = "Please fund your wallet first.";
            $this->return_response( $response );
        }

        if( $variation_detail ){
            switch ( $variation_detail->api_source) {
                case 'vtpass':
                    // we're dealing with vtpass
                    if( $this->site->insert_data('transactions', $insert_data)){
                        $data = array(
                            'serviceID' => $network_name,
//                        'billersCode' => $smart_card_number,
                            'billersCode' => "1111111111",
                            'variation_code' => $variation_detail->variation_name,
                            'amount'    => (int)$variation_detail->variation_amount,
//                        'phone'     => (int) $registered_number,
                            'phone'     => "08123456789",
                            'request_id'    => $transaction_id
                        );

                        try {
                            // call the API
                            $return = $this->vtpass_curl( $data );
                            $update_data = array();
                            if( $return['code'] == "000"){
                                $update_data['orderid'] = $return['content'][0]['requestId'];
                                $update_data['status'] = 'success';
                                $update_data['payment_status'] = $return['response_description'];
                                $this->site->set_field('users', 'wallet', "wallet-{$plan_detail->amount}", "id={$user_id}");
                                $response['status'] = 'success';
                                $response['message'] = "Thank you for subscribing your {$network_name} cable with us. Your transaction code is <b>{$transaction_id}</b>, more details on your dashboard.";

                            }else{
                                $update_data['status'] = 'fail';
                                $update_data['orderid'] = $return['content'][0]['requestId'];
                                $update_data['payment_status'] = $return['response_description'];
                                $response['status'] = 'error';
                                $response['message'] = "There was an error subscribing your  {$network_name}, please try again. Contact us if debited..";

                            }
                            $this->site->update('transactions',  $update_data, array('trans_id' => $transaction_id));
                            $this->return_response( $response );

                        } catch (Exception $e) {
                            // No exception
                            $update_data['status'] = 'fail';;
                            $update_data['payment_status'] = "Transaction failed.";
                            $this->site->update('transactions',  $update_data, array('trans_id' => $transaction_id));
                        }

                    }else{
                        $response['message'] = "There was an error processing that order.";
                        $this->return_response( $response );
                    }
                    break;

                default:
                    break;
            }
        }else{
            $response['message'] = "Oops! We can't process your order now, contact us via WhatsApp (" . lang['contact_no']. ")";
            $this->return_response( $response );
        }


    }

    // Electricity bills
    public function electricity_bill(){
        $response = array('status' => 'error');
        $this->form_validation->set_rules('amount', 'Amount','trim|required|xss_clean');
        $this->form_validation->set_rules('phone_number', 'Phone number','trim|required|xss_clean');
        $this->form_validation->set_rules('network', 'Network','trim|required|xss_clean');
        $this->form_validation->set_rules('plan_id', 'Plan','trim|required|xss_clean');


        if( $this->form_validation->run() == FALSE ){
            $response['message'] = validation_errors();
            $this->return_response( $response );
        }


        $product_id = $this->input->post('product_id', true);
        $network_id = $this->input->post('network', true);
        $plan_id = $this->input->post('plan_id', true);
        $amount = $this->input->post('amount');
        $meter_number = $this->input->post('meter_number');
        $phone_number = $this->input->post('phone_number');
        $discount = $this->input->post('discount');
        $network_name = $this->input->post('network_name', true ); // electricity
        $wallet = $this->session->userdata('wallet');
        $user_id = $this->session->userdata('logged_id');


        // verify...
        $plan_detail = $this->site->run_sql("SELECT name FROM plans WHERE id = {$plan_id}")->row();

        $user = $this->get_profile( $this->session->userdata('logged_id'));


        $variation_detail = $this->site->run_sql("SELECT variation_name, api_source FROM api_variation WHERE plan_id = {$plan_id} LIMIT 1")->row();


        // Do they have discount
        if( $discount > 1 ){
            $amount = $amount - ( $discount/100 * $amount );
        }

        $transaction_id = $this->site->generate_code('transactions', 'trans_id');
        $insert_data = array(
            'amount'        => $amount,
            'product_id'    => $product_id,
            'description'   => ' ',
            'trans_id'      => $transaction_id,
            'payment_method' => 2,
            'date_initiated'    => get_now(),
            'user_id'        => $user_id,
            'status'        => 'pending'
        );

        if( $user->wallet < 1 || $amount > $user->wallet){
            $response['message'] = "Please fund your wallet first.";
            $this->return_response( $response );
        }

        if( $variation_detail ){
            switch ( $variation_detail->api_source) {
                case 'vtpass':
                    // we're dealing with vtpass
//                    $response['message']=   $variation_detail->variation_name;
//                    $this->return_response( $response );
                    if( $this->site->insert_data('transactions', $insert_data)){
                        $data = array(
                            'serviceID' => trim($variation_detail->variation_name),
//                        'billersCode' => $meter_number,
//                            'variation_code' => $variation_detail->variation_name,
                            'billersCode' => "1111111111",
                            'amount'    => (int)$amount,
//                        'phone'     => (int) $registered_number,
                            'phone'     => "08123456789",
                            'request_id'    => $transaction_id
                        );

                        try {
                            // call the API
                            $return = $this->vtpass_curl( $data );
                            $update_data = array();
                            if( $return['code'] == "000"){
                                $update_data['orderid'] = $return['content'][0]['requestId'];
                                $update_data['status'] = 'success';
                                $update_data['payment_status'] = $return['response_description'];
                                $update_data['description'] = "N{$amount} payment  for {$plan_detail->name} " . ucwords( $network_name) . " bill. with Token ()";
                                $this->site->set_field('users', 'wallet', "wallet-{$amount}", "id={$user_id}");
                                $response['status'] = 'success';
                                $response['message'] = "Thank you for paying your {$plan_detail->name} bill with us. Your transaction code is <b>{$transaction_id}</b>, more details on your dashboard.";
                            }else{
                                $update_data['status'] = 'fail';
                                $update_data['orderid'] = $return['content'][0]['requestId'];
                                $update_data['payment_status'] = $return['response_description'];
                                $update_data['description'] = "N{$amount} payment  for {$plan_detail->name} " . ucwords( $network_name) . " bill.";
                                $response['status'] = 'error';
                                $response['message'] = "There was an error subscribing your {$plan_detail->name}, please try again. Contact us if debited..";
                                $this->return_response( $response );
                            }

                            $this->site->update('transactions',  $update_data, array('trans_id' => $transaction_id));
                            $this->return_response( $response );

                        } catch (Exception $e) {
                            // No exception
                        }

                    }else{
                        $response['message'] = "There was an error processing that order.";
                        $this->return_response( $response );
                    }
                    break;

                default:
                    break;
            }
        }else{
            $response['message'] = "Oops! We can't process your order now, contact us via WhatsApp (" . lang['contact_no']. ")";
            $this->return_response( $response );
        }


    }


    // Verify Smart Card Number
    function verify_iuc_number( $info = array() ){

        $iuc = ( !empty($info) ) ? $info['iuc'] : $this->input->post('iuc', true);
        $network = ( !empty($info) ) ? $info['network'] : $this->input->post('network', true);
        if( $iuc ){
            $response['status'] = 'success';
            $post_url = "https://www.nellobytesystems.com/APIVerifyCableTVV1.0.asp";
            $cable_code = network_code($network) ;
            $data = array(
                'UserID'    => CK_USER_ID,
                'APIKey'    => CK_KEY,
                'CableTV'   =>  $cable_code,
                'SmartCardNo' => $iuc,
            );

            $ponmo = http_build_query($data);
            $url = $post_url .'?'. $ponmo; // json
            $return = curl_get_result( $url );
            $return = json_decode( $return );
            $response['message'] = strtolower( $return->customer_name );
            $this->return_response( $response );
        }
    }




    private function _submitGet( $data ){
        $post_url = $data['url'];
        unset($data['url']);
        $ponmo = http_build_query($data);
        $url = $post_url .'?'. $ponmo; // json
        $headers = array(
            "GET /HTTP/1.1",
            "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
            "Accept: */* ",
            "Accept-Language: en-us,en;q=0.5",
            "Keep-Alive: 300",
            "Connection: keep-alive"
        );
        if( ini_get('allow_url_fopen') ) {
            $response = file_get_contents($url);
        } else {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_POST, false);
            $response = curl_exec($ch);
            $response = json_decode($response, TRUE);
            curl_close($ch);
        }
        return $response;
    }


    // For Airtime

    public function callAirtimeAPI( $data ){
        $network_code = network_code($data['network']);
        $getResponse = $this->_submitGet(
            array(
                'url'   => "https://www.nellobytesystems.com/APIBuyAirTime.asp",
                'UserID' => CK_USER_ID,
                'APIKey' => CK_KEY,
                'MobileNetwork' => $network_code,
                'Amount' => $data['amount'],
                'MobileNumber' => $data['number'],
            )
        );
        return json_decode($getResponse, true);
    }

    // For Data purchase
    public function callSMSAPI( $data ){
        $getResponse = $this->_submitGet(
            array(
                'url'   => "https://www.nellobytesystems.com/APIBuyBulkSMS.asp",
                'UserID' => CK_USER_ID,
                'APIKey' => CK_KEY,
                'Sender' => 'MarsData',
                'Recipient' => '08130316830',
                'Message' => $data['message']
//                08151148607
            )
        );
        return json_decode($getResponse, true);
    }

    // API for Cable


//https://www.nellobytesystems.com/APIBuyCableTV.asp?UserID=your_userid&APIKey=your_apikey&CableTV=cabletv_code&Package=pacakge_code&SmartCardNo=recipient_smartcardno&CallBackURL=callback_url

    // For club konnect... deprecated
    public function callCableAPI( $data ){
        $cable_code = network_code( $data['network']) ;
//        $network_code = ;
        $getResponse = $this->_submitGet(
            array(
                'url'   => $data['url'],
                'UserID' => CK_USER_ID,
                'APIKey' => CK_KEY,
                'CableTV' => $cable_code,
                'Package' => $data['package_code'],
                'SmartCardNo' => $data['iuc'],
            )
        );
        return $getResponse;
    }

    function vtpass_curl( $data ){
        $curl       = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => VTPASS_HOST,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_USERPWD => VTPASS_USERNAME.":" .VTPASS_PASSWORD,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
        ));
        $response = curl_exec($curl);
        $response = json_decode($response, TRUE);
        curl_close($curl);
        return $response;
    }


    function verifyMeter(){
        $post_url = "http://www.vtpass.com/ajax/merchant-verify";
        $data = array(
            'service' => $_POST['service'],
            'code'      => $_POST['code']
        );
        $ponmo = http_build_query($data);
        $url = $post_url .'?'. $ponmo; // json
        $headers = array(
            "GET /HTTP/1.1",
            "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
            "Accept: */* ",
            "Accept-Language: en-us,en;q=0.5",
            "Keep-Alive: 300",
            "Connection: keep-alive"
        );
        if( ini_get('allow_url_fopen') ) {
            $response = file_get_contents($url);
        } else {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_POST, false);
            $response = curl_exec($ch);
            $response = json_decode($response);
            curl_close($ch);
        }
        echo $response;
        exit;
    }


    function verifyPaystack(){
        $response = array('status' => 'error');
        $paystackreference = $this->input->post('reference', true);
        $ref = $this->input->post('ref', true);
        // Get row of the transaction
        $row = $this->site->run_sql("SELECT user_id, amount, product_id FROM transactions WHERE trans_id = '{$ref}'")->row();
        if( !$row ){
            $response['message'] = "We couldn't find the transaction.";
            $this->return_response($response);
        }else{
            $amount = (int) $row->amount;
            //The parameter after verify/ is the transaction reference to be verified
            $url = 'https://api.paystack.co/transaction/verify/' . $paystackreference;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt(
                $ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. S_KEY)
            );
            $request = curl_exec($ch);
            curl_close($ch);
            if ($request) {
                $result = json_decode($request, true);
                // print_r($result);
                if($result){
                    if($result['data']){
                        //something came in
                        if($result['data']['status'] == 'success'){
                            // the transaction was successful, you can deliver value
                            // Update the transaction
                            $this->db->trans_start();
                            $this->site->update('transactions', array('status' => 'success', 'payment_status' => $result['message']), "(trans_id = {$ref})" );
                            if( $row->product_id == 6){
                                // WAllet funding
                                $this->site->set_field('users', 'wallet', "wallet+{$amount}", "id={$row->user_id}");
                            }
                            $this->db->trans_complete();
                            if ($this->db->trans_status() === FALSE){
                                $this->db->trans_rollback();
                                $response['message'] = "There was an error updating your payment. PLease chat us up if debited.";
                                $this->return_response($response);
                            }else{
                                // Send a message to the admin??
                                $this->db->trans_commit();
                                $response['status'] = 'success';
                                $response['message'] = "Transaction successful.";
                                $this->return_response($response);
                            }
                        }else{
                            // the transaction was not successful, do not deliver value'
                            // print_r($result);  //uncomment this line to inspect the result, to check why it failed.
                            $response['message'] = "Transaction was unsuccessful, please contact us if debited.";
                            $this->return_response($response);

                        }
                    }else{
                        $response['message'] = $result['message'];
                        $this->return_response($response);
                    }

                }else{
                    //print_r($result);
                    $response['message'] = "Technical Error. Please contact us if persist.";
                    $this->return_response($response);
//                    die("Something went wrong while trying to convert the request variable to json. Uncomment the print_r command to see what is in the result variable.");
                }
            }else{
                //var_dump($request);
                $response['message'] = "Error";
                $this->return_response($response);
//                die("Something went wrong while executing curl. Uncomment the var_dump line above this line to see what the issue is. Please check your CURL command to make sure everything is ok");
            }
        }
    }

    function get_network( $network_id ){
        return $this->site->run_sql("SELECT title,network_name,discount, product_id FROM services WHERE id = {$network_id}")->row();
    }

    function upgrade_account(){
        $response['status'] = 'error';
        $uid = $this->session->userdata('logged_id');
        $transaction_id = $this->site->generate_code('transactions', 'trans_id');
        $insert_data = array(
            'amount'        => 1000,
            'product_id'    => 10,
            'description'   => "Membership upgrade to Reseller account",
            'trans_id'      => $transaction_id,
            'payment_method' => 2,
            'date_initiated'    => get_now(),
            'user_id'        => $uid,
            'status'        => 'pending'
        );
        if( $this->site->insert_data('transactions', $insert_data)
            && $this->site->update('users', array('membership_type' => 'pending'), "(id = {$uid})") ){
            // Update the membership type to progress
            $response['status'] = 'success';
            $this->return_response( $response );
        }else{
            $this->return_response( $response );
        }
    }
    function get_profile($id){
        return $this->site->run_sql("SELECT phone, email, membership_type, name, user_code, wallet, account_type FROM users where id = {$id}")->row();
    }


    function useJSON($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients) {
        $gsm = array();
        $country_code = '234';
        $arr_recipient = explode(',', $recipients);
        foreach ($arr_recipient as $recipient) {
            $mobilenumber = trim($recipient);
            if (substr($mobilenumber, 0, 1) == '0'){
                $mobilenumber = $country_code . substr($mobilenumber, 1);
            }
            elseif (substr($mobilenumber, 0, 1) == '+'){
                $mobilenumber = substr($mobilenumber, 1);
            }
            $generated_id = uniqid('int_', false);
            $generated_id = substr($generated_id, 0, 30);
            $gsm['gsm'][] = array('msidn' => $mobilenumber, 'msgid' => $generated_id);
        }
        $message = array(
            'sender' => $sendername,
            'messagetext' => $messagetext,
            'flash' => "{$flash}",
        );

        $request = array('SMS' => array(
            'auth' => array(
                'username' => $username,
                'apikey' => $apikey
            ),
            'message' => $message,
            'recipients' => $gsm
        ));
        $json_data = json_encode($request);
        if ($json_data) {
            $response = $this->doPostRequest($url, $json_data, array('Content-Type: application/json'));
            $result = json_decode($response);
            return $result->response->status;
        } else {
            return false;
        }
    }

    //Function to connect to SMS sending server using HTTP POST
    function doPostRequest($url, $arr_params, $headers = array('Content-Type: application/x-www-form-urlencoded')) {
        $response = array();
        $final_url_data = $arr_params;
        if (is_array($arr_params)) {
            $final_url_data = http_build_query($arr_params, '', '&');
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $final_url_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $response['body'] = curl_exec($ch);
        $response['code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response['body'];
    }

    /* General FUnction
     * Help us to return the response
     * */
    function return_response( $array = array()){
        header('Content-type: text/json');
        header('Content-type: application/json');
        echo json_encode( $array );
        exit;
    }

}





