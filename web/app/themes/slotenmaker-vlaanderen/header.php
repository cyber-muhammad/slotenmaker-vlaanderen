<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slotenmaker-vlaanderen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-aos-easing="ease-in-out" data-aos-animation="1000" data-aos-delay="0">
    <?php wp_body_open(); ?>
    <a href="tel:+32489000000" id="fixed-btn" class="fixed-call-btn d-flex align-items-center">
        <i class="fa-brands fa-whatsapp"></i></a>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'sanitair-theme' ); ?></a>

        <header id="masthead" class="site-header">
            <section id="navigation">
                <div class="container d-flex align-items-center justify-content-between">

                    <div class="site-branding">
						<h3>Slotenmaker Vlaanderen</h3>
                        <!-- <img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="Logo"
                            style="height: 60px;"> -->
                    </div><!-- .site-branding -->
                    <!-- <div class="mobile-menu d-flex justify-content-between">
                        <img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="Logo"
                            style="height: 60px;">
                        <a href="#" class="burger" onclick="lockScroll();"></a>
                    </div> -->
                    <?php get_template_part( 'global-templates/navbar'); ?>

                    <div class="buttons">
                        <a href="tel:+" class="my-btn">Vraag een offerte</a>
                    </div>
                </div>
            </section>
        </header><!-- #masthead -->