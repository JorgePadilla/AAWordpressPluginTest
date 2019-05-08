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
   return $sales;

}


add_shortcode("total", "get_total_in_cart");
add_shortcode("exchangeUSD", "exchangeHNtoUSDPOC");
?>