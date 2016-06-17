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

<div class="heroSlider" xmlns="http://www.w3.org/1999/html" >
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $url = $thumb['0']; ?>
    <div data-scroll-speed="-4" class="heroSliderImage" style="background-image:url('<?php echo $url;?>');">
    </div>

</div>

<main>

        <section class="service">



        <div class="row">

            <h1 class="heroMessage">
                <?php the_field('heading_message');?>
            </h1>


            <div class="container">

            <div class="xs-col-12 md-col-4 md-col-offset-4 text-center">

                <?php the_field('services_introduction');?>

            </div>
            </div>

            <?php if( have_rows('services') ):
                while ( have_rows('services') ) : the_row();?>
                    <article class="container">

                        <div class="col-xs-12 col-md-8 descriptionContainer">

                            <h3><?php the_sub_field('service_title');?></h3>
                            <p><?php the_sub_field('service_description');?></p>

                        </div>

                        <div class="col-xs-12 col-md-4 quoteContainer">
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


