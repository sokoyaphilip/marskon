<?php
use AfricasTalking\SDK\AfricasTalking;
defined('BASEPATH') OR exit('No direct script access allowed');
class AfricaSMS {

    protected $recipents;
    public function __construct( $recipents = array()){
        $this->recipents = $recipents;
    }

    public function sendsms(){
        // Set your app credentials
//        $username   = "artisan";
        $username   = "marskonnect";
//        $apikey     = "4c614bc247ca9df530a1e60e9762306ba22ff2bdf3c6861c13d1a16fef9805e9";
        $apikey     = "8bf6c201ca6bd50d117e6c0cb72dedfdb6253a15fb6063c7361f0226e99cd6fa";
        $AT         = new AfricasTalking($username, $apikey);
        $sms        = $AT->sms();
        if( is_array($this->recipents) && !empty($this->recipents)){
            foreach( $this->recipents as $key => $message  ){
                // remove the preceeding
                if( !empty( $key ) || !is_null($key) ){
                    $recipent = $this->remove( $key );
                    try {
                        $sms->send(array(
                            'to' => $recipent,
                            'message' => $message,
                            'enqueue' => true
                        ));
                    } catch (Exception $e) {
                    }
                }
            }
        }
    }

    // Sanitize the phone number
    function remove( $recipent ){
        $recipent = preg_replace('/^0/','+234',$recipent);
        return $recipent;
    }
}
