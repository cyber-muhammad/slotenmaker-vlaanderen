<?php
/**
 * Template Name: Home page
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod('understrap_container_type');
?>
    <?php get_template_part( 'global-templates/hero'); ?>

    <div class="main">
        <?php get_template_part( 'global-templates/services'); ?>
        <?php get_template_part( 'global-templates/about'); ?>
        <?php get_template_part( 'global-templates/location'); ?>
        <?php get_template_part( 'global-templates/cta'); ?>
        <?php get_template_part( 'global-templates/faq'); ?>
        <?php get_template_part( 'global-templates/footer'); ?>
    </div>

    <?php
get_footer();