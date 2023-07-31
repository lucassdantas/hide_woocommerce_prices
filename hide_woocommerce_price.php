<?php
/**
* Plugin Name: Hide Woocommerce Price
* Plugin URI: https://github.com/lucassdantas/calculadora-bruno-investimentos
* Description: Calculadora para o site do Buno Investimentos
* Version: 1.0
* Author: R&D Marketing Digital
* Author URI: https://rdmarketing.com.br/
**/

defined('ABSPATH') or die("You dont have permissions to execute that.");
if(!function_exists('add_action')){
    die;
}
add_filter( 'woocommerce_get_price_html', 'QuadLayers_remove_price');
function QuadLayers_remove_price($price){     
    return ;
}
