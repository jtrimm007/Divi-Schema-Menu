<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if (current_user_can( 'activate_plugins' ) && ! current_user_can( 'update_core' )) {
    echo '<h3>Admin access is required</h3>';
} else {
?><h1>About Sub-Domain SEO</h1>
    <p>Infromation coming soon!</p>
<?php
    //The last currly bracket below
}