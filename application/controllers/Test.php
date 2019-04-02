<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct(){
        parent::__construct();
//        if (!$this->input->is_ajax_request()) {
//            redirect(base_url());
//        }
    }

    public function index(){
        $url = 'https://sales.ringo.com/api/auth';
        $headers = array(
            "GET /HTTP/1.1",
            "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
            "Accept: */* ",
            "Accept-Language: en-us,en;q=0.5",
            "Keep-Alive: 300",
            "Connection: keep-alive",
            "username: username",
            "password: password"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, $headers
        );
        curl_setopt($ch, CURLOPT_POST, true);
        $request = curl_exec($ch);
        curl_close($ch);

        print_r($request);
    }


}





