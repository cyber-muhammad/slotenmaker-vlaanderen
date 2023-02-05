<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying a contact page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
get_header();
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'global-templates/hero-content'); ?>
<div class="wrapper" id="page-wrapper">
    <div class="container">
        <div class="row">
            <main class="site-main mt-5 mb-5" id="main">
                <section id="contact">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info-container d-flex flex-column">
                                <div class="intro-text">
                                    <h2>Onze contact informatie</h2>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo excepturi
                                        suscipit ullam assumenda esse velit harum necessitatibus officia. Nostrum
                                        quaerat et, nihil molestias deserunt voluptatibus nesciunt fugiat numquam
                                        dolores ad!</p>
                                </div>

                                <div class="info-item shadow d-flex"> <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h4>Email:</h4>
                                        <p>info@loodgieter-sanitair.be</p>
                                    </div>
                                </div>
                                <div class="info-item shadow d-flex"> <i class="bi bi-phone flex-shrink-0"></i>
                                    <div>
                                        <h4>Call:</h4>
                                        <p>0485 111 111</p>
                                    </div>
                                </div>
                                <div class="info-item shadow d-flex"> <i class="bi bi-clock flex-shrink-0"></i>
                                    <div>
                                        <h4>Open Hours:</h4>
                                        <p>Mon-Sat: 11AM - 23PM</p>
                                    </div>
                                </div>
                                <div class="social-item d-flex justify-content-center"> <i class="bi bi-clock flex-shrink-0"></i>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="title-section text-center mb-5">
                            </div>
                            <?php echo do_shortcode ('[contact-form-7 id="61" title="Contact form 1"]') ?>
                        </div>
                    </div>
                </section>
            </main><!-- #main -->

        </div><!-- .row -->
    </div>

</div><!-- #content -->


<?php
get_footer();