<?php
/*
Plugin Name: Forward slash string 
Plugin URI: https://github.com/sandipmavani/yourls-slash-string-forward
Description: Forward slash string 
Version: 1.0
Author: Sandip Mavani
Author URI: http://sandipmavani.github.io
*/
if( !defined( 'YOURLS_ABSPATH' ) ) die();
yourls_add_filter( 'get_shorturl_charset', 'slash_in_charset' );
yourls_add_filter('redirect_location', 'append_slash_redirect' );

function append_qs_redirect($url) {

    if(isset($_SERVER['REQUEST_URI']))
    {
    	$urlArr = explode('/', $_SERVER['REQUEST_URI']);
    	if(isset($urlArr[1]))
    	{
    		        return $url.$urlArr[1];
    	}
    }
}
function slash_in_charset( $in ) {
        return $in.'/';
}
//This plugin will not work with URL forwarding plugins active