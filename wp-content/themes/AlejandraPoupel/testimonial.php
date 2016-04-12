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

        <section class="testimonials">
            <div class="container">
            <div class="row">
                <h2 class="rightAlign"><?php the_field('testimonials_title');?></h2>
            </div>
            <div class="row testimonialsSlider">
                <?php if( have_rows('testimonials') ):
                    while ( have_rows('testimonials') ) : the_row();?>
                        <article>
                            <div class="col-lg-6">
                                <?php $thumb = wp_get_attachment_image_src(get_sub_field('testimonial_image'), 'testimonials' ); ?>
                                <img src="<?php echo $thumb[0];?>">
                            </div>

                            <div class="col-lg-5 testimonialDescription">
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


    <!--<section class="container videos">
        <div class="row">

            <h2><?php /*the_field('videos_title');*/?></h2>

            <?php /*if( have_rows('videos') ):
                while ( have_rows('videos') ) : the_row();*/?>
                    <iframe width="560" height="315" src="<?php /*the_sub_field('video_url'); */?>" frameborder="0" allowfullscreen></iframe>

                <?php /*endwhile;
            else :*/?>
            <?php /*endif; */?>

        </div>
    </section>-->

    <section class="container pressReleases">
        <div class="row">

            <div class="row">
            <h2 class="leftAlign"><?php the_field('press_title');?></h2>
           </div>
            <div class="row">
            <?php if( have_rows('press_single') ):
                while ( have_rows('press_single') ) : the_row();?>
                    <article class="pressSingle col-lg-3" data-image="<?php the_sub_field('press_img');?>">
                    <img src="<?php the_sub_field('press_logo');?>" class="logo" />
                    <div class="pressSingleInfos">
                        <div class="pressSingleInfosWrapper">
                            <?php the_sub_field('press_name');?>
                            <?php the_sub_field('press_date');?>
                        </div>
                    </div>
                    </article>
                <?php endwhile;
                endif; ?>
            </div>
            <div class="lightbox">
                <img src="" />
                <div class="controls">
                    <span class="close">close</span>
                    <div class="navigators">
                        <span class="navPrev">prev</span>
                        <span class="navNext">next</span>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>

<?php get_footer();?>

