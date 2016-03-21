<?php
/**
 * Template Name: Testimonials
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Event
 * @since 1986
 */
?>
<?php header('X-Frame-Options: GOFORIT');?>
<?php get_header();?>

<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
    <?php the_post_thumbnail('full');?>
    <h1 class="heroMessage">
        <?php the_field('heading_message');?>
    </h1>
</div>

<main>

        <section class="container testimonials">
            <div class="row">
                <h2><?php the_field('testimonials_title');?></h2>

                <?php if( have_rows('testimonials') ):
                    while ( have_rows('testimonials') ) : the_row();?>
                       <img src="<?php the_sub_field('testimonial_image');?>">


                        <?php the_sub_field('testimonial_content');?>
                        <?php the_sub_field('testimonial_name');?>
                    <?php endwhile;
                else :?>
                <?php endif; ?>

            </div>
        </section>


    <section class="container videos">
        <div class="row">

            <h2><?php the_field('videos_title');?></h2>

            <?php if( have_rows('videos') ):
                while ( have_rows('videos') ) : the_row();?>
                    <iframe width="560" height="315" src="<?php the_sub_field('video_url'); ?>" frameborder="0" allowfullscreen></iframe>

                <?php endwhile;
            else :?>
            <?php endif; ?>

        </div>
    </section>

    <section class="container pressReleases">
        <div class="row">


            <h2><?php the_field('press_title');?></h2>

            <?php if( have_rows('press_single') ):
                while ( have_rows('press_single') ) : the_row();?>

                    <img src="<?php the_sub_field('press_img');?>">
                    <?php the_sub_field('press_name');?>
                    <?php the_sub_field('press_content');?>
                    <?php the_sub_field('press_date');?>
                <?php endwhile;
            else :?>
            <?php endif; ?>
        </div>
    </section>




</main>

<?php get_footer();?>


