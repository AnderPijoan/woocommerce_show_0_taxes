<?php
/*
Plugin Name: Show 0 taxes in Woocommerce
Plugin URI: https://github.com/AnderPijoan/woocommerce_show_0_taxes
Description: Shows taxes although their value is 0
Author: Ander Pijoan
Version: 1.0
Author URI: https://github.com/AnderPijoan
License: MIT
*/

add_filter( 'woocommerce_cart_hide_zero_taxes', '__return_false' ); 

add_filter( 'woocommerce_order_hide_zero_taxes', '__return_false' );
