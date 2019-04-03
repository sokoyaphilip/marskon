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

    public function ringo_api(){
        $data = array("username" => "Justiceogey@yahoo.com", "password" => "justiceogey");
        $url = 'sales.ringo.ng/api/auth';
        $headers = array(
            "GET /HTTP/1.1",
            "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
            "Accept: */* ",
            "Accept-Language: en-us,en;q=0.5",
            "Keep-Alive: 300",
            "Content-Type: application/json",
            "Connection: keep-alive"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        $response = json_decode($response, TRUE);
        curl_close($ch);
        var_dump( $response );
    }

    public function curl(){
        $curl = curl_init ();
        $data = array(
            'username' => 'justiceogey@yahoo.com',
            'password' => 'justiceogey'
        );
        $encdata = json_encode($data);
        $url = "sales.ringo.ng/api/auth";

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $encdata,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }



    public function ringo(){
        $data = array("username" => "Justiceogey@yahoo.com", "password" => "justiceogey");
        $url = 'https://sales.ringo.com/api/auth';
        $headers = array(
            "GET /HTTP/1.1",
            "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1",
            "Accept: */* ",
            "Accept-Language: en-us,en;q=0.5",
            "Keep-Alive: 300",
            "Content-Type: application/json",
            "Connection: keep-alive"
        );
        $curl       = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
        ));
        $response = curl_exec($curl);
        $response = json_decode($response, TRUE);
        curl_close($curl);
        var_dump($response);
    }


}





