<?php

if (!defined('ABSPATH')) exit; // Exit if accessed directly



/**
 * dsm_seo_menu
 * void
 * Description:
 *
 *
 */
function dsm_xenial_divi_menu()
{
    if (is_admin()) {
        //local variables for main menu
        $page_title = 'Xenial Divi Schema Menu';
        $menu_title = 'Xenial for Divi';
        $capability = 'administrator';
        $menu_slug = 'dsm-about.php';
        $function = 'dsm_xenial_divi_menu';
        $icon_url = 'dashicons-media-code';
        $position = 3;

        //local variables for settings page
        $parent_slug = 'dsm-about.php';


        //Menu variables for about page
        $about_page_title = 'About';
        $about_menu_title = 'About';
        $sub_about_slug = 'dsm-settings.php';


        //Main menu on left side
        add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);

        //Add dsm-about.php to menue
       // add_submenu_page($parent_slug, $about_page_title, $about_menu_title, $capability, $sub_about_slug, $function);





    }
}

//action hook for the xenial menu
add_action('admin_menu', 'dsm_xenial_divi_menu');


/**
 * dsm_start_pages
 * void
 * Description:
 *
 *
 */
function dsm_start_pages()
{

    $pluginDirPath = plugin_dir_path(__FILE__);

    $removeIncludeFromPath = str_replace('includes', '', $pluginDirPath);
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
        //var_dump($page);
        if (!strcmp($page, 'dsm-about.php')) {

            include_once $removeIncludeFromPath . 'dsm-about.php';

        }
        //elseif (!strcmp($page, 'dsm-settings.php'))
       // {
        //    include_once $removeIncludeFromPath . 'dsm-settings.php';

        //}
    }


}

add_action('all_admin_notices', 'dsm_start_pages');