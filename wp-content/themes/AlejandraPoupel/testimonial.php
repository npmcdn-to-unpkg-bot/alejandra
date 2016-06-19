<?php
/**
 * Template Name: Testimonials
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

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <h2 class="col-xs-12"><?php the_field('testimonials_title');?></h2>
            </div>
            <div class="row testimonialsSlider">

                <?php if( have_rows('testimonials') ):
                    while ( have_rows('testimonials') ) : the_row();?>

                        <article>
                            <div class="col-xs-2 col-sm-4 col-md-4 col-lg-6 testimonialImage" >
                                <?php $thumb = wp_get_attachment_image_src(get_sub_field('testimonial_image'), 'testimonials' ); ?>
                                <img src="<?php echo $thumb[0];?>">
                            </div>

                            <div class="col-xs-10 col-sm-8 col-md-7 col-lg-6 testimonialDescription">
                                <span class="testimonialKind">
                                    <?php $term = get_sub_field('event_category');
                                    echo $term->name;?>
                                </span>
                                <span class="testimonialContent">
                                    <?php the_sub_field('testimonial_content');?>
                                </span>
                                <span class="tesimonialPerson">
                                    <?php the_sub_field('testimonial_name');?>
                                </span>
                            </div>
                        </article>
                    <?php endwhile;?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section class="container videos">
        <div class="row">

            <h2><?php the_field('videos_title');?></h2>

            <?php if( have_rows('videos') ):
                while ( have_rows('videos') ) : the_row();?>
                    <div class="videoWrapper">
                        <iframe width="560" height="315" src="<?php the_sub_field('video_url'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                <?php endwhile;
            else :?>
            <?php endif;?>

        </div>
    </section>

    <section class="container pressReleases">
        <div class="row">

            <div class="row">
                <h2 class="col-xs-12"><?php the_field('press_title');?></h2>
            </div>
            <div class="row">
                <?php if( have_rows('press_single') ):
                    while ( have_rows('press_single') ) : the_row();?>

                        <article class="col-xs-6 col-sm-3  pressSingle lightboxSingle " data-image="<?php the_sub_field('press_img');?>">
                            <div class="pressSingleInfos">
                                <div class="pressSingleInfosWrapper">
                                    <?php the_sub_field('press_name');?><br />
                                    <?php the_sub_field('press_date');?>
                                </div>
                            </div>
                            <img src="<?php the_sub_field('press_img');?>" class="logo" />
                        </article>
                    <?php endwhile;
                endif; ?>
            </div>
            <div class="lightbox">
                <img src="" />
                <div class="controls">
                    <span class="close">x</span>
                    <div class="navigators">
                        <span class="navPrev"></span>
                        <span class="navNext"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>

<?php get_footer();?>


