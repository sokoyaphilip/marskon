<?php

if(! defined('ENVIRONMENT') )
{
    $domain = strtolower($_SERVER['HTTP_HOST']);

    switch($domain) {
        case 'marskonnet.com' :
        case 'https://www.marskonnet.com':
        case 'www.marskonnet.com':
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
}

