<?php
/*
 * Plugin Name:       CarRentals Companion
 * Plugin URI:        https://colorlib.com/wp/themes/carrentals/
 * Description:       CarRentals Companion is a companion for CarRentals theme.
 * Version:           1.0
 * Author:            Colorlib
 * Author URI:        https://colorlib.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       carrentals-companion
 * Domain Path:       /languages
 */

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'CARRENTALS_COMPANION_VERSION' ) ) {
    define( 'CARRENTALS_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'CARRENTALS_COMPANION_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_DIR_PATH', plugin_dir_path( __FILE__ ) );
}

// Define inc dir path constant
if( ! defined( 'CARRENTALS_COMPANION_INC_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_INC_DIR_PATH', CARRENTALS_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'CARRENTALS_COMPANION_SW_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_SW_DIR_PATH', CARRENTALS_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'CARRENTALS_COMPANION_EW_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_EW_DIR_PATH', CARRENTALS_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'CARRENTALS_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'CARRENTALS_COMPANION_DEMO_DIR_PATH', CARRENTALS_COMPANION_INC_DIR_PATH . 'demo-data/' );
}


$current_theme = wp_get_theme();

$is_parent = $current_theme->parent();

if( ( 'CarRentals' ==  $current_theme->get( 'Name' ) ) || ( $is_parent && 'CarRentals' == $is_parent->get( 'Name' ) ) ) {
    require_once CARRENTALS_COMPANION_DIR_PATH . 'carrentals-init.php';
} else {

    add_action( 'admin_notices', 'carrentals_companion_admin_notice', 99 );
    function carrentals_companion_admin_notice() {
        $url = 'https://wordpress.org/themes/carrentals/';
    ?>
        <div class="notice-warning notice">
            <p><?php printf( __( 'In order to use the <strong>CarRentals Companion</strong> plugin you have to also install the %1$sCarRentals Theme%2$s', 'carrentals-companion' ), '<a href="' . esc_url( $url ) . '" target="_blank">', '</a>' ); ?></p>
        </div>
        <?php
    }
}
