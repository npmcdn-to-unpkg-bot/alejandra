<?php
/**
 * Template Name: Agency
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

        <section class="container ourDna">
            <div class="row">
                <h2><?php the_field('dna_title');?></h2>
                <blockquote  data-scroll-speed="9"><?php the_field('dna_quote');?></blockquote>
                <p class="col-lg-9 col-lg-offset-3"><?php the_field('dna_content');?></p>


            </div>
        </section>

    <section class="meetAlejandra">
            <div class="container">
            <h2><?php the_field('alejandra_title');?></h2>
            <?php if( have_rows('alejandra') ):
                while ( have_rows('alejandra') ) : the_row();?>

        <div class="row meetAlejandraSingle">

                    <div class="col-lg-6 imgContainer" data-scroll-speed="<?php the_sub_field('image_scroll_speed');?>">
                        <img src="<?php the_sub_field('alejandra_image');?>" alt="">
                        </div>
                    <div class="col-lg-6 meetAlejandraText" data-scroll-speed="<?php the_sub_field('text_scroll_speed');?>" >
                            <p><?php the_sub_field('alejandra_description');?></p>
                    </div>
        </div>
                <?php endwhile;
            else :?>
            <?php endif; ?>


            </div>
    </section>


</main>

<?php get_footer();?>


