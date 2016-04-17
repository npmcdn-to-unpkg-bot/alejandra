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
    <h1 class="heroMessage" data-scroll-speed="-8">
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

                        <div class="col-sm-12 col-sm-8 col-md-8 col-lg-8 descriptionContainer">

                            <h3><?php the_sub_field('service_title');?></h3>
                            <p><?php the_sub_field('service_description');?></p>

                        </div>

                        <div class="col-sm-12 col-sm-4 col-md-4 col-lg-4 quoteContainer">
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


