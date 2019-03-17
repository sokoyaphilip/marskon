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
        $page_data['services'] = $this->site->run_sql("SELECT id,title,network_name, discount FROM services WHERE product_id = '2'")->result();
        $this->load->view('landing/create', $page_data);
    }

}
