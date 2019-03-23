<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if( !$this->session->userdata('logged_in')){
            redirect( base_url() );
        }
    }


    public function index(){

        $page_data['page'] = 'home';
        $page_data['title'] = 'Welcome to your dashboard';
        $id = $this->session->userdata('logged_id');
        $page_data['user'] = $this->get_profile($id);
        $page_data['products'] = $this->site->get_result('products');

        $query = "SELECT * FROM transactions WHERE user_id = {$id} ORDER BY id DESC ";
        $start = $end = $transaction ='';
        if( $this->input->post() ){
            // start empty
            $start = $this->input->post('start');
            if( empty( $start) || !isset($start) ){
                $start = $_POST['start'] = date('Y-m-d', strtotime('first day of this year'));
            }else{
                $start = date('Y-m-d', strtotime($start));
            }
            $end = $this->input->post('end');
            if( empty( $end) || !isset($end) ){
                $end = $_POST['end'] = date('Y-m-d', strtotime('tomorrow'));
            }else{
                $end = date('Y-m-d', strtotime($end));
            }

            $query = "SELECT * FROM transactions WHERE date_initiated BETWEEN '{$start}' AND '{$end}' AND user_id ='{$id}' ";

            if( $this->input->post('transaction_type') ){
                $transaction = $this->input->post('transaction_type');
                $query .= " AND product_id = '{$transaction}' ORDER BY id DESC";
            }
        }
        $page_data['transactions'] = $this->site->run_sql( $query )->result();
		$this->load->view('app/users/dashboard', $page_data);
	}

	// Data
    public function data(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'data';
        $page_data['title'] = 'Buy Mtn, Glo, 9mobile, Airtel Data Subscription, works for all smartphones...';
        $page_data['user'] = $this->get_profile($id);
        $membership_type = $page_data['user']->membership_type;
        $page_data['product_id'] = 1;
        $page_data['networks'] = $this->site->run_sql("SELECT p.slug, s.id, s.title, s.network_name, discount FROM products p 
        LEFT JOIN services s ON (p.id = s.product_id) WHERE p.title ='data' AND s.discount_type = '{$membership_type}'")->result();
        $page_data['transactions'] = $this->site->run_sql("SELECT trans_id, amount, description, date_initiated, status FROM transactions WHERE product_id = 1 AND user_id = {$id}")->result();
        $this->load->view('app/users/buy_data', $page_data);
    }

    // Airtime
    public function airtime(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'airtime';
        $page_data['title'] = 'Buy Mtn, Glo, 9mobile, Airtel Airtime';
        $page_data['user'] = $this->get_profile($id);
        $page_data['product_id'] = 2;
        $membership_type = $page_data['user']->membership_type;
        $page_data['networks'] = $this->site->run_sql("SELECT p.slug, s.id, s.title, network_name, discount FROM products p 
        LEFT JOIN services s ON (p.id = s.product_id) WHERE p.title ='airtime' AND s.discount_type = '{$membership_type}' ")->result();
        $page_data['transactions'] = $this->site->run_sql("SELECT trans_id, amount, description, date_initiated, status FROM transactions WHERE product_id = 2 AND user_id = {$id}")->result();
        $this->load->view('app/users/buy_airtime', $page_data);

    }

    // Tv subscription
    public function subscription(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'subscription';
        $page_data['title'] = 'Subscribe your GoTV, DSTV, Startimes ... decoder';
        $page_data['user'] = $this->get_profile($id);
        $membership_type = $page_data['user']->membership_type;
        $page_data['product_id'] = 3;
        $page_data['transactions'] = $this->site->run_sql("SELECT trans_id, amount, description, date_initiated, status FROM transactions WHERE product_id = 3 AND user_id = {$id}")->result();
        $page_data['networks'] = $this->site->run_sql("SELECT p.slug, s.id, s.title, network_name, discount FROM products p 
        LEFT JOIN services s ON (p.id = s.product_id) WHERE p.slug ='tv-subscription' AND s.discount_type = '{$membership_type}' ")->result();
        $this->load->view('app/users/tv_sub', $page_data);

    }

    // electricity
    public function electricity(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'electricity';
        $page_data['title'] = 'Pay your electricity bill';
        $page_data['user'] = $this->get_profile($id);
        $membership_type = $page_data['user']->membership_type;
        $page_data['product_id'] = 4;
        $page_data['plans'] = $this->site->run_sql("SELECT s.id service_id, network_name, discount, pl.id, pl.name , api.variation_name variation_name
        FROM products p 
        LEFT JOIN services s ON (p.id = s.product_id) 
        JOIN plans pl ON (pl.sid = s.id)
        LEFT JOIN api_variation api ON( api.plan_id = pl.id)
        WHERE p.slug ='electricity-bill'  AND s.discount_type = '{$membership_type}' ")->result();
        $page_data['transactions'] = $this->site->run_sql("SELECT trans_id, amount, description, date_initiated, status FROM transactions WHERE product_id = 4 AND user_id = {$id}")->result();
        $this->load->view('app/users/electric_bill', $page_data);
    }

    // Coin
    public function coin(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'coin';
        $page_data['title'] = 'Buy and Sell Bitcoin, Paxful coin';
        $page_data['user'] = $this->get_profile($id);
        $page_data['transactions'] = $this->site->run_sql("SELECT t.id, t.trans_id, t.amount, t.description, t.date_initiated, t.status, b.wallet, b.wallet_address, b.pop FROM transactions t
        LEFT JOIN bitcoin b ON (b.tid = t.id) WHERE t.product_id = 9 AND t.user_id = {$id}")->result();
        $this->load->view('app/users/coin', $page_data);
    }

    function coin_process(){
        if( $this->input->post() ){
            $this->form_validation->set_rules('wallet', 'Please select wallet address you are sending from.','trim|required|xss_clean');
            $this->form_validation->set_rules('wallet_address', 'Enter your wallet address','trim|required|xss_clean|min_length[6]|max_length[50]');
            $this->form_validation->set_rules('amount', 'Enter the amount you sent,','trim|required|xss_clean');
            if( $this->form_validation->run() == false ){
                // error
                $this->session->set_flashdata('error_msg',validation_errors());
                redirect( $_SERVER['HTTP_REFERER']);
            }
            $data = array(
                'wallet' => cleanit($this->input->post('wallet')),
                'wallet_address' => cleanit( $this->input->post('wallet_address')),
            );

            if( $_FILES['pop'] ){
                $config = array(
                    'upload_path' => "./pop/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'overwrite' => TRUE,
                    'max_size' => "2048000",
                    'max_height' => "768",
                    'max_width' => "1024",
                    'encrypt'   => true
                );
                $this->load->library('upload', $config);
                if( $this->upload->do_upload('pop') ){
                    $user_id = $this->session->userdata('logged_id');
                    $filename = $this->upload->data('file_name');
                    $data['pop'] = $filename;
                    $data['user_id'] = $user_id;
                    $amount = $this->input->post('amount');
                    $wallet_address = $this->input->post('wallet_address');
                    $description = "${$amount} bitcoin from {$wallet_address}";

                    $this->db->trans_start();
                    $transaction_id = $this->site->generate_code('transactions', 'trans_id');
                    $transaction_table = array(
                        'product_id' => 9,
                        'trans_id'      => $transaction_id,
                        'user_id'       => $user_id,
                        'amount'        => $amount,
                        'payment_method' => 4,
                        'description'   => $description,
                        'date_initiated'    => get_now(),
                        'status'            => 'pending'
                    );

                    $data['tid'] = $this->site->insert_data('transactions', $transaction_table);
                    $this->site->insert_data('bitcoin',  $data);
                    $this->db->trans_complete();
                    if ($this->db->trans_status() === FALSE){
                        $this->session->set_flashdata('error_msg', 'There was an error processing your request.');
                        $this->db->trans_rollback();
                    }else{
                        // Send a message to the admin??
                        $this->db->trans_commit();
                        $this->session->set_flashdata('success_msg', 'Your request has been received and its under processed.');
                    }
                    redirect( $_SERVER['HTTP_REFERER']);
                }else{
                    echo 'Not uploaded';
                }
            }else{
                echo 'POP not found'; exit;
            }

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function redeem_cards(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'cards';
        $page_data['title'] = 'Pay your electricity bill';
        $page_data['user'] = $this->get_profile($id);
        $page_data['plans'] = $this->site->run_sql("SELECT s.id service_id, network_name, discount, pl.id, pl.name FROM products p 
        LEFT JOIN services s ON (p.id = s.product_id) 
        JOIN plans pl ON (pl.sid = s.id)
        WHERE p.slug ='electricity-bill' ")->result();
        $this->load->view('app/users/redeem_card', $page_data);
    }

    // fund wallet
    public function wallet(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'wallet';
        $page_data['title'] = 'My Wallet';
        $page_data['user'] = $this->get_profile( $id );
        $page_data['fundings'] = $this->site->get_result('transactions', '*' , " user_id = {$id}");
        $page_data['transactions'] = $this->site->run_sql("SELECT trans_id, amount, description, date_initiated,payment_method, product_id, status FROM transactions WHERE (product_id = 6 or product_id = 7) AND user_id = {$id}")->result();
        $this->load->view('app/users/my_wallet', $page_data);

    }

    public function airtime_to_cash(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'airtime2cash';
        $page_data['title'] = "Airtime to Cash";
        $page_data['user'] = $this->get_profile( $id );
        $membership_type = $page_data['user']->membership_type;
        $page_data['networks'] = $this->site->run_sql("SELECT p.slug, s.id, s.title, network_name, discount FROM products p 
        LEFT JOIN services s ON (p.id = s.product_id) WHERE p.title ='airtime' AND s.discount_type = '{$membership_type}' ")->result();
        $page_data['fundings'] = $this->site->get_result('transactions', '*' , " user_id = {$id}");
        $this->load->view('app/users/airtime_to_cash', $page_data);
    }

    function airtime_process(){
        $post_type = $this->input->post('post_type', true);
        $network = $this->input->post('airtime_pin_network');
        $user_id = $this->session->userdata('logged_id');
        switch ($post_type) {
            case 'pin_transfer':

                $this->form_validation->set_rules('airtime_pin_network', 'Airtime Network','trim|required|xss_clean');
                $this->form_validation->set_rules('pin', 'Pin Network','trim|required|xss_clean');
                $this->form_validation->set_rules('amount', 'Amount','trim|required|xss_clean');
                $this->form_validation->set_rules('amount_earned', 'Amount EArned','trim|required|xss_clean');
                if( $this->form_validation->run() == false ){
                    $this->session->set_flashdata('error_msg', validation_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                }
                $product_id = $this->input->post('product_id');
                $amount = $this->input->post('amount');
                $outgoing = $this->input->post('amount_earned');
                $transaction_id = $this->site->generate_code('transactions', 'trans_id');
                $how_to_receive = $this->input->post('how_to_receive');
                $pin = trim($this->input->post('pin'));
                // Mtn - Airtel : 16, Glo - 9mobile : 15,
                $length = strlen( $pin );
                switch ( $network ) {
                    case 'glo':
                    case '9mobile':
                        if( $length != 15){
                            $this->session->set_flashdata('error_msg', "Error: The " . strtoupper( $network) . " network pin is invalid");
                            redirect( $_SERVER['HTTP_REFERER']);
                        }
                        break;
                    case 'mtn':
                    case 'airtime':
                        if( $length != 16){
                            $this->session->set_flashdata('error_msg', "Error: The " . strtoupper( $network) . " network pin is invalid");
                            redirect( $_SERVER['HTTP_REFERER']);
                        }
                        break;
                }

                $description = ucwords($network) . " N" . $amount . " pin transfer ( {$pin} ) to gecharl.com";
                $transaction_table = array(
                    'product_id' => $product_id,
                    'trans_id'      => $transaction_id,
                    'user_id'       => $user_id,
                    'amount'        => $amount,
                    'payment_method' => 4,
                    'description'   => $description,
                    'date_initiated'    => get_now(),
                    'status'            => 'pending'
                );
                try {
                    $receiving_channel = $this->input->post('how_to_receive');
                    $details = ucwords($network) . " N" . $amount . " pin transfer ( {$pin} ) to gecharl.com and to receive by {$receiving_channel}";
                    $receiver = $this->input->post('receiver', true);
                    if( $receiver ) $details .= " : {$receiver}";
                    $this->db->trans_start();
                    $tid = $this->site->insert_data('transactions',  $transaction_table);
                    $airtime_to_cash_table = array(
                        'tid' => $tid,
                        'uid' => $user_id,
                        'network' => $network,
                        'incoming' => $amount,
                        'outgoing' => $outgoing,
                        'type' => $receiving_channel,
                        'status' => 'pending',
                        'details' => $details,
                        'datetime'  => get_now()
                    );
                    $this->site->insert_data('airtime_to_cash', $airtime_to_cash_table);
                    $this->db->trans_complete();
                    if ($this->db->trans_status() === FALSE){
                        $this->session->set_flashdata('error_msg', 'There was an error processing your request.');
                        $this->db->trans_rollback();
                    }else{
                        // Send a message to the admin??
                        $this->db->trans_commit();
                        $this->session->set_flashdata('success_msg', 'Your request has been received and its under processed.');
                    }

                } catch (Exception $e) {

                }
                redirect( $_SERVER['HTTP_REFERER']);
                break;
        }
    }


    // Profile
    public function profile(){
        $id = $this->session->userdata('logged_id');
        $page_data['page'] = 'profile';
        $page_data['title'] = "Profile Setting";
        $page_data['user'] = $this->site->run_sql("SELECT name, membership_type,phone, email,user_code,wallet, account_name, account_type, bank_name FROM users WHERE id = {$id}")->row();
        $this->load->view('app/users/profile', $page_data);
    }

    function profile_setting(){
        $action_type = $this->input->post('post_type');
        $uid = $this->session->userdata('logged_id');
        switch ( $action_type ){
            case 'account':
                $this->form_validation->set_rules('name', 'Full name','trim|required|xss_clean|min_length[3]|max_length[50]');
                $this->form_validation->set_rules('account_name', 'Account name','trim|required|xss_clean|max_length[50]');
                $this->form_validation->set_rules('account_type', 'Account type','trim|required|xss_clean');
                $this->form_validation->set_rules('bank_name', 'Bank name','trim|required|xss_clean');
                if( $this->form_validation->run() == false ){
                    $this->session->set_flashdata('error_msg', validation_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                }else{
                    $password = cleanit($_POST['confirm_password']);
                    if(!$this->user->cur_pass_match($password, $uid, 'users')){
                        $this->session->set_flashdata('error_msg', "Oops! The password does not match your current password.");
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                    $data = array(
                        'name' => cleanit($_POST['name']),
                        'account_name' => cleanit($_POST['account_name']),
                        'account_type' => cleanit($_POST['account_type']),
                        'bank_name' => cleanit($_POST['bank_name']),
                    );

                    if( $this->site->update('users', $data, "(id = {$uid})")){
                        $this->session->set_flashdata('success_msg', "Profile updated successfully.");
                    }else{
                        $this->session->set_flashdata('error_msg', "There was an error updating your profile.");
                    }
                    redirect($_SERVER['HTTP_REFERER']);
                }
                break;
            case 'password_change':

                $this->form_validation->set_rules('current_password', 'Password','trim|required|xss_clean');
                $this->form_validation->set_rules('new_password', 'New Password','trim|required|xss_clean');
                $this->form_validation->set_rules('confirm_password', 'Confirm Password','trim|required|xss_clean|min_length[6]|max_length[15]|matches[new_password]');

                $password = cleanit($_POST['current_password']);
                if(!$this->user->cur_pass_match($password, $uid, 'users')){
                    $this->session->set_flashdata('error_msg', "Oops! The password does not match your current password. ");
                    redirect($_SERVER['HTTP_REFERER']);
                }
                $new_password = cleanit( $_POST['new_password'] );
                if( $this->user->change_password( $new_password, $uid, 'users')){
                    $this->session->set_flashdata('success_msg', "Password changed successfully.");
                }else{
                    $this->session->set_flashdata('error_msg', "There was an error updating your password.");
                }
                redirect($_SERVER['HTTP_REFERER']);
        }

    }

	function get_profile($id){
	    return $this->site->run_sql("SELECT phone, email, membership_type, name, user_code, wallet, account_type FROM users where id = {$id}")->row();
    }
}
