<?php
/**
 * Template Name: Service
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Event
 * @since 1986
 */
?>

<?php get_header();?>

<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
    <?php the_post_thumbnail('full');?>
    <h1 class="heroMessage">
        <?php the_field('heading_message');?>
    </h1>
</div>

<main>

        <section class="container service">
        <div class="row">
            <h2><?php the_field('services_title');?></h2>

            <?php if( have_rows('services') ):
                while ( have_rows('services') ) : the_row();?>
                    <article class="row">

                        <div class="col-lg-8 descriptionContainer">

                            <h3><?php the_sub_field('service_title');?></h3>
                            <p><?php the_sub_field('service_description');?></p>

                        </div>

                        <div class="col-lg-4 sliderContainer">
                            <blockquote><?php the_sub_field('service_quote');?></blockquote>
                        </div>



                    </article>
                    <div class="separator" data-image="<?php the_sub_field('service_image');?>"></div>
                <?php endwhile;
            else :?>
            <?php endif; ?>

        </div>
    </section>



</main>

<?php get_footer();?>


