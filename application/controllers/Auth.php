<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if( $this->session->userdata('logged_in')){
            if( $this->session->userdata('is_admin') == 0 ){
                redirect('dashboard/');
            }else{
                redirect('admin/');
            }
        }
//        if( !$this->session->userdata('logged_in') || ($this->session->userdata('is_admin') != 0) ){
//            redirect( base_url() );
//        }
    }

    // Personal 2 or mor apps
    public function index(){
        $page_data['page'] = 'home';
        $page_data['user'] = '';
        if( $this->session->userdata('logged_in')){
            $page_data['user'] = $this->get_profile($this->session->userdata('logged_id'));
        }
        $page_data['services'] = $this->site->run_sql("SELECT id,title,network_name, discount FROM services WHERE product_id = '2'")->result();
		$this->load->view('landing/login', $page_data);
	}


	// SIgn up
    public function create(){
        $page_data['page'] = 'home';
        $page_data['user'] = '';
        if( $this->session->userdata('logged_in')){
            $page_data['user'] = $this->get_profile($this->session->userdata('logged_id'));
        }
        $ref = cleanit($this->input->get('ref', true));
        $page_data['referral'] = "Marskonnect";
        $page_data['referral_code'] = "67382";

        if( $ref ){
            $row = $this->site->run_sql("SELECT name,phone FROM users WHERE user_code = '{$ref}'")->row();
            if( $row ){
                $page_data['referral'] = ($row->name == NULL) ? $row->phone : $row->name;
                $page_data['referral_code'] = $ref;
            }

        }
        $this->load->view('landing/create', $page_data);
    }

    // Forget pasword
    public function forgot(){
        $this->load->library('recaptcha');
        if( $this->input->post() ){
            $recaptcha = $this->input->post('g-recaptcha-response');
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (!isset($response['success']) || $response['success'] !== true) {
                $this->session->set_flashdata('error_msg', 'There was an error validating the captcha, please try again.');
                redirect('auth/forgot/');
            }
            $this->form_validation->set_rules('email', 'Email address','trim|required|xss_clean|valid_email');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error_msg', validation_errors() );
                redirect('auth/forgot/');
            }else{
                // // send mail
                $email = $this->input->post('email');
                // check the email
                $row = $this->site->run_sql("SELECT id, name FROM users WHERE email = '{$email}'")->row();
                if( !$row ){
                    $this->session->set_flashdata('error_msg', "Oops sorry, we can't find your detail in our system");
                    redirect('auth/forgot/');
                }else{
                    $new_password = random_string('alnum', 10);
                    if( $this->site->change_password( $new_password , $row->id) ){
                        // send mail
                        $message = "Hi {$row->name}, \r\n\r\nYou requested to retrieve your password, please find below your new password.\r\n\r\n {$new_password}\r\nAfter login in to your account, you can change it to your preferred password.\r\n\r\nHave a great day.\r\n\r\nBest Regards,\r\n\r\nMarskonnect.com";

                        $this->email->clear(TRUE);
                        $this->email->set_newline("\r\n");
                        $this->email->from('support@marskonnect.com', 'Marskonnect.com');
                        $this->email->to($email);
                        $this->email->subject('Password Retrieve From Marskonnect.com');
                        $this->email->message($message);
                        if( $this->email->send()){
                            $this->session->set_flashdata('success_msg', "Congrats, a new password has been sent to your mail.");
                            redirect('auth/login/');
                        }else{
                            $this->session->set_flashdata('error_msg',"There was an error sending the mail...");
                            redirect('auth/forgot/');
                        }
                    }

                }
            }

        }else{
            $page_data['page'] = 'forgot';
            $this->load->view('landing/forgot', $page_data);
        }
    }

}
