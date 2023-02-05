<?php
/**
 * Header Navbar 
 *
 * @package loodgieter-sanitair
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav class="navbar-main">
    <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'menu-1',
                'container' => 'div',
                'container_id'    => '',
                'menu_class'      => 'menu-nav',
                'fallback_cb'     => '',
                'menu_id'         => '',
                'depth'           => 2,
                'walker'          => new WP_Bootstrap_Navwalker(),
            )
        );
        ?>
</nav><!-- #site-navigation -->