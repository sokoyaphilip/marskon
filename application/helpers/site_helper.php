<?php
if(!function_exists('salt')){
    function salt($length) {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789;:?.>,<!@#$%^&*()-_=+|';
        $randStringLen = $length;

        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }

        return $randString;
    }
}

if(!function_exists('generate_token')){
    function generate_token($length) {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randStringLen = $length;
        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }
        return $randString;
    }
}

if (!function_exists('shaPassword')) {
    function shaPassword($field = "", $salt = "")  {
        if($field) {
            return hash('sha256', $field.$salt);
        }
    }
}

if (!function_exists('plushrs')) {
    function plushrs($dt, $hrs){
        $pure = strtotime($dt);
        $plus = ($pure + 60*60*$hrs);
        $newPure = date('Y-m-d H:i:s', $plus);
        return $newPure;
    }
}

if (!function_exists('ngn')) {
    function ngn($amt = ''){
        if ($amt == '') $amt = '0';
        return '₦ '.number_format($amt);
    }
}

if (!function_exists('get_now')) {
    function get_now(){
        return gmdate("Y-m-d H:i:s", time());
    }
}


if (!function_exists('neatDate')) {
    function neatDate($dt){
        $bdate = $dt;
        $bdate = str_replace('/', '-', $bdate);
        $nice_date = date('d M., Y', strtotime($bdate));
        return $nice_date;
    }
}

if (!function_exists('neatTime')) {
    function neatTime($dt){
        $bdate = $dt;
        $bdate = str_replace('/', '-', $bdate);
        $nice_date = date('g:i a', strtotime('+1 hour', strtotime($bdate )));
        return $nice_date;
    }
}

function ago($time){
    $time = strtotime($time);
    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60","60","24","7","4.35","12","10");

    $now = time();

    $difference     = $now - $time;
    $tense         = "ago";

    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if($difference != 1) {
        $periods[$j].= "s";
    }

    return "$difference $periods[$j] ago ";
}


function cleanit($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Clean phone number
function phoneclean($num) {
    $num = preg_replace('/\D/', '', $num);
    $len = strlen($num);
    $accurate = $len - 10;
    $realNUM = substr($num,$accurate);
    return '0'.$realNUM;
}

function urlify($string, $id =''){
    $new_string = strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    if( $id != '' ){
        return 'product/'. $new_string .'-'.$id.'/';
    }else{
        return $new_string;
    }
}


//  Find Replace product int with respective Product Title

function product_id_replacer($in){
    $out = preg_replace_callback("([0-9]+)",
        function ($matches) {
            switch ((int)$matches) {
                case 1:
                    return '<b>Data Purchase</b>';
                    break;
                case 2:
                    return '<b>Airtime Purchase</b>';
                    break;
                case 3:
                    return '<b>TV Subscription Purchase</b>';
                    break;
                case 4:
                    return '<b>Electricity Bill</b>';
                    break;
                case 5:
                    return '<b>Recharge Card</b>';
                    break;
                case 6:
                    return '<b>Wallet Funding</b>';
                    break;
                case 7:
                    return '<b>Wallet Transfer</b>';
                    break;
                case 8:
                    return '<b>Airtime to Cash - Pin</b>';
                    break;
                default:
                    return '';
                    break;
            }

        }, $in);
    return $out;
}

function product_name($id)
{
    switch ((int)$id) {
        case 1:
            return '<b>Data Purchase</b>';
            break;
        case 2:
            return '<b>Airtime Purchase</b>';
            break;
        case 3:
            return '<b>TV Subscription Purchase</b>';
            break;
        case 4:
            return '<b>Electricity Bill</b>';
            break;
        case 5:
            return '<b>Recharge Card</b>';
            break;
        case 6:
            return '<b>Wallet Funding</b>';
            break;
        case 7:
            return '<b>Wallet Funding</b>';
            break;
        case 8:
            return '<b>Airtime to Cash</b>';
            break;
        default:
            return '';
            break;
    }
}


//  Find Replace payment int with respective Product Title
function payment_id_replacer($in){
    $out = preg_replace_callback("(\{[0-9]+\})",
        function ($matches) {

            switch ((int)$matches) {

                case 1:
                    return 'Bank Deposit / Transfer';
                    break;
                case 2:
                    return 'Payment From My Wallet';
                    break;
                case 3:
                    return 'Payment Via Paystack';
                    break;
                default:
                    return '';
                    break;
            }
        }, $in);
    return $out;
}


if (!function_exists('statusLabel')) {
    function statusLabel($status){
        switch ($status) {
            case 'pending':
            case 'process':
                return '<div class="alert alert-warning">' . ucfirst( $status ). '</div>';
                break;
            case 'approved':
            case 'success':
            case 'active':
                return '<div class="alert alert-success">' . ucfirst( $status ). '</div>';
                break;
            case 'returned':
            case 'cancelled':
            case 'blocked':
                return '<div class="alert alert-danger">' . ucfirst( $status ). '</div>';
                break;
            default:
                return '<div class="alert alert-danger">' . ucfirst( $status ). '</div>';
                break;
        }
    }
}

if(!function_exists('paymentMethod')){
    function paymentMethod( $id ){
        switch ( $id ) {
            case 1:
                return '<b>Payment Via Wallet</b>';
                break;
            case 2:
                return '<b>Bank Transfer / Deposit</b>';
                break;
            case 3:
                return '<b>Payment Via Paystack</b>';
                break;
            case 4:
                return '<b>Gecharl Payment</b>';
                break;
        }
    }
}

/*
 * Check the range of date for a discount price
 * */
if( !function_exists('date_in_range')){
    function date_in_range( $start_date, $end_date, $present_date){
        $start_ts = strtotime($start_date);
        $end_ts = strtotime($end_date);
        $user_ts = strtotime($present_date);
        return ( ($user_ts >= $start_ts) && ($user_ts <= $end_ts) );
    }
}


function get_bitly_short_url($url,$login,$appkey = BITLY_API,$format='txt') {
    $connectURL = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
    return curl_get_result($connectURL);
}


function curl_get_result($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

function simple_crypt( $string, $action = 'e' ) {
    $secret_key = '4n9*^%%$3n^&4v&%7@!90&$$3c3x$^*$m8a456#@tgf%$$c'; // 4n9*^%%$3n^&4v&%7@!90&$$3c3x$^*$m8a456#@tgf%$$c
    $secret_iv = 'cXpYEjhvzuVXOV7ltEQSAq8dvNQTWLar';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    return $output;
}

// Network COde for Clubkonnect
function network_code( $network ){
    $network = trim(strtolower( $network ) );
    switch ($network) {
        case 'mtn':
        case 'dstv':
            return '01';
            break;
        case 'glo':
        case 'gotv':
            return '02';
            break;
        case '9mobile':
        case 'etisalat':
        case 'startimes':
            return '03';
            break;
        default :
            // airtel
            return '04';
    }
}

function data_plan_code( $network , $plan, $number, $is_reseller = false){
    $plan = trim(strtoupper( $plan));
    switch ($network) {
        case "mtn":
            switch ($plan) {
                // 250MB - 150, 500MB - 250, 1GB -450,2GB -900, 5GB-2250
                case '5GB':
                    return "SMEE {$number} 5000 5550";
                    break;
                case '2GB':
                    return "SMED {$number} 2000 5550";
                    break;
                case '1GB':
                    return "SMEC {$number} 1000 5550";
                    break;
                case "500MB":
                    return "SMEB {$number} 500 5550";
                case "250MB":
                    return "SMEA {$number} 250 5550";
                default :
                    return false;
                    break;
            }

        case "9mobile":
        case "etisalat":
            switch ( $is_reseller){
                case true:
                    switch ( $plan ) {
                        case "1GB":
                            return "*229*2*7*{$number}#";
                            break;
                        case "1.5GB":
                            return "*229*2*25*{$number}#";
                            break;
                        case "2.5GB":
                            return "*229*2*8*{$number}#";
                            break;
                        case "4GB":
                            return "*229*2*35*{$number}#";
                            break;
                        case "5.5GB":
                            return "*229*2*36*{$number}#";
                            break;
                        case "11.5GB":
                            return "*229*2*5*{$number}#";
                            break;
                        case "15GB":
                            return "*229*4*1*{$number}#";
                            break;
                        case "27.5GB":
                            return "*229*4*3*{$number}#";
                            break;
                        default:
                            return false;
                            break;
                    }
                    break;
                case false:
                    switch ( $plan ) {
                        case "1GB":
                            return "*229*9*0000*1000*{$number}*3#";
                            break;
                        case "1.5GB":
                            return "*229*9*0000*1500*{$number}*3# ";
                            break;
                        case "2GB":
                            return "*229*9*0000*2000*{$number}*3#";
                            break;
                        case "3GB":
                            return "*229*9*0000*3000*{$number}*3#";
                            break;
                        case "4GB":
                            return "*229*9*0000*4000*{$number}*3#";
                            break;
                        case "5GB":
                            return "*229*9*0000*5000*{$number}*3#";
                            break;
                        case "10GB":
                            return "*229*9*0000*10000*{$number}*3#";
                            break;
                        case "15GB":
                            return "*229*9*0000*15000*{$number}*3#";
                            break;
                        case "20GB":
                            return "**229*9*0000*20000*{$number}*3#";
                            break;
                        default:
                            return false;
                            break;
                    }
                    break;
            }
            break;
        case "glo":
            switch ( $plan ){
                case '15MB':
                    return " * 127*57*{$number} #";
                    break;
                case '25MB':
                    return " * 127*570*{$number} #";
                    break;
;
                case "1.84GB":
                    return " * 127*53*{$number} #";
                    break;
                case "4.5GB":
                    return " * 127*55*{$number} #";
                    break;
                case "7.2GB":
                    return " * 127*58*{$number} #";
                    break;
                case "8.75GB":
                    return " * 127*54*{$number} #";
                    break;
                case "12.5GB":
                    return " * 127*59*{$number} #";
                    break;
                case "15.6GB":
                    return " * 127*2*{$number} # ";
                    break;
                case "25GB":
                    return " * 127*1*{$number} #";
                    break;
                case "32.5GB":
                    return " * 127*11*{$number} #";
                    break;
                case "52.5GB":
                    return " * 127*12*{$number} #";
                    break;
                case "62.5GB":
                    return " * 127*13*{$number} #";
                    break;
                case "78.75GB":
                    return " * 127*33*{$number} #";
                    break;
                default:
                    return false;
                    break;
            }
            break;
        case "airtel":
            switch ( $plan ){
                case '1.5GB':
                    return "*141*5*2*1*5*1*{$number}*4123#";
                    break;
                case '3.5GB':
                    return "*141*5*2*1*4*1*{$number}*4123#";
                    break;
                case '5.5GB':
                    return "*141*5*2*1*3*1*{$number}*4123#.";
                    break;
                default:
                    return false;
                    break;
            }
            break;
        default:
            return false;
            break;
    }
}

// DSTV Package code for vtpass
// We find our plan name and return an array with vtpass plan - amount
//function package_code_amount( $plan_name){
//    $plan_name = trim( strtolower( $plan_name ));
//    switch ($plan_name) {
//        case 'dstv access':
//        case 'gotv lite':
//        case 'startimes nova':
//            return array('variation_code' => 'dstv1', 'variation_amount' => 1800);
//            break;
//        case 'dstv family':
//        case 'gotv value':
//        case 'startimes basic':
//            return array('variation_code' => 'dstv2', 'variation_amount' => 3600);
//            break;
//        case 'dstv premium':
//        case 'gotv plus':
//        case 'startimes smart':
//            return array('variation_code' => 'dstv3', 'variation_amount' => 13980);
//            break;
//        case 'dstv german only':
//            return array('variation_code' => 'dstv4', 'variation_amount' => 3940);
//            break;
//        case 'dstv premium':
//            return 05;
//            break;
//            case
//        case 'dstv premium + hd/exra view':
//            return 06;
//            break;
//        default:
//            break;
//
//    }
//}