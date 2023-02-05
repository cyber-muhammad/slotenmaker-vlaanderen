<?php

/**
 * Location
 *
 * @package loodgieter-sanitair
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>


<section id="hero-content">
    <div class="container no-gutters d-flex aligin-items-center justify-content-between aos-init aos-animate">
        <div class="row" data-aos="fade-in">
            <div class="col-lg-6 d-flex align-items-center flex-column mb-5 mb-lg-0">
                <div class="title">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </div>

                <div class="excerpt">
                    <?php echo the_excerpt() ?>
                </div>

            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <picture>
                    <?php sanitair_theme_post_thumbnail(); ?>

                </picture>
            </div>
        </div>
    </div>
</section>