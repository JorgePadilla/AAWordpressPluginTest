<?php
/** 
 * @package avtestjorgepadillaplugin
*/
/*
Plugin name: Avtestjorgepadilla Plugin
Plugin URI: https://www.linkedin.com/in/jorge-padilla-vasquez-33474161/
Description: This is a POC for AV.
Version: 1.0.0
Author: Jorge Padilla
Author URI: https://www.linkedin.com/in/jorge-padilla-vasquez-33474161/
License: MIT
*/

function get_total_in_cart(){
    
 
   $sales = WC()->cart->cart_contents_total;
   return $sales;

}
function exchangeHNtoUSDPOC(){
    
 
   $sales = WC()->cart->cart_contents_total;
   return $sales/25;

}

function exchangeHNtoBTC(){
    
 
   $sales = WC()->cart->cart_contents_total;
   $request = wp_remote_get('https://api.coindesk.com/v1/bpi/currentprice/HNL.json');

$data = wp_remote_retrieve_body( $request );
 //$data = str_replace('//','',$data);
 //$data = json_decode($data);

$pos = strrpos($data, "USD");
$rest = substr($data, $pos+13, 12);
 
 $sol=($sales/24.44);
return $sol/$pos;
}


add_shortcode("total", "get_total_in_cart");
add_shortcode("exchangeUSD", "exchangeHNtoUSDPOC");
add_shortcode("exchangeBTC", "exchangeHNtoBTC");
?>