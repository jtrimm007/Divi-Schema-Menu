<?php

if (!defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * dsm_start_css
 * void
 * Description:
 *
 *
 */
function dsm_start_css()
{
    $pluginDirPath = plugin_dir_path(__FILE__);

    $removeIncludeFromPath = str_replace('includes/', '', $pluginDirPath);

    //var_dump($removeIncludeFromPath);

    if (is_admin()) {
        include $removeIncludeFromPath . 'css/sds-style.css';
    }
}

add_action('admin_head', 'dsm_start_css');