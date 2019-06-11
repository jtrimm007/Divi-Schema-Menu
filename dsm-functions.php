<?php
/*
Plugin Name:  Xenial Divi Schema Menu
Plugin URI:   https://trimwebdesign.com
Description:  Create subdomains with content that is currently on your website
Header Comment
Version:      1.0.3
Author:       Joshua Trimm
Author:       Trim Web Design
Author URI:   https://trimwebdesign.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  trimwebdesign, joshuatrimm
Domain Path:  /languages

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


if (!defined('ABSPATH')) exit; // Exit if accessed directly

// Add includes and requires
if(!function_exists('wp_get_current_user')) {
    include(ABSPATH . "wp-includes/pluggable.php");
}



//Define plugin version
define("DIVI_SCHEMA_MENU", "1.0.3");

//Define plugin path slug
define("DIVI_SCHEMA_MENU_PLUGINPATH", "/" . plugin_basename(dirname(__FILE__)) . "/");

//Define the plugin full url
define("DIVI_SCHEMA_MENU_PLUGINFULLURL", trailingslashit(plugins_url('dsm-functions.php', __FILE__)));

//Define the plugin full dir
define("DIVI_SCHEMA_MENU_PLUGINFULLDIR", WP_PLUGIN_DIR . DIVI_SCHEMA_MENU_PLUGINPATH);

//Define the global var DIVISCHEMAMENUWP1, returing bool if WP 7.0 or higher is running
define('DIVISCHEMAMENUWP1', version_compare($GLOBALS['wp_version'], '6.9.999', '>'));

/**
 * include all the php files from the includes folder
 */
$forIncludesLoop = plugin_dir_path(__FILE__) . 'includes/';

$scanDirectory = scandir($forIncludesLoop);

// Loop through all the files that are php in the includes folder. Then include them in this file.
foreach($scanDirectory as $file)
{
    $phpFile = strpos($file, '.php');
    if($phpFile == True)
    {
        // $forIncludesLoop is the file page and $file is the name
        include $forIncludesLoop . $file;
        // echo $forIncludesLoop . $file;
    }
}

/**
 * xwp_activation
 * void
 * Description: Activation for dsm tables
 *
 *
 */

register_activation_hook(__FILE__, 'dsm_activation');

function dsm_activation()
{

}


register_activation_hook( __FILE__, 'dsm_error_file' );



