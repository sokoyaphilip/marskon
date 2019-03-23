<?php

if(! defined('ENVIRONMENT') )
{
    $domain = strtolower($_SERVER['HTTP_HOST']);

    switch($domain) {
        case 'marskonnect.com' :
        case 'https://www.marskonnect.com':
        case 'www.marskonnect.com':
            define('ENVIRONMENT', 'production');
            break;

        case 'dev.marskonnet.com' :
            //our staging server
            define('ENVIRONMENT', 'staging');
            break;

        default :
            define('ENVIRONMENT', 'development');
            break;
    }
    die(ENVIRONMENT);
}

