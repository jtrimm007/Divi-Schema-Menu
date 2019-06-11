<?php

if (!defined('ABSPATH')) exit; // Exit if accessed directly


/**
 * dsm_insert_scripts
 * void
 * Description:
 *
 *
 */
function dsm_insert_scripts()
{

    $pluginJavaScriptPath = plugin_dir_url(__FILE__);

    $pluginJavaScriptPath = str_replace('/includes', '', $pluginJavaScriptPath);


    //Future scripts go below
    wp_enqueue_script('schemaNav',  $pluginJavaScriptPath . 'js/schemaNav.js', array('jquery', 'json2'), '3.3.1', true);

}

add_action( 'wp_enqueue_scripts', 'dsm_insert_scripts' );


/**
 * dsm_insert_admin_scripts
 * void
 * Description:
 *
 *
 */
function dsm_insert_admin_scripts() {

    $pluginDirPath = plugin_dir_url( __FILE__ );
    $removeIncludeFromPath = str_replace('/includes', '', $pluginDirPath);

    wp_enqueue_script( 'check_all_pages',  $removeIncludeFromPath . 'js/checkAllPages.js' );

    //wp_enqueue_script( 'check_all_payment_types', plugin_dir_url( __FILE__ ) . 'js/checkAllPaymentTypes.js' );
}
add_action( 'admin_enqueue_scripts', 'dsm_insert_admin_scripts' );