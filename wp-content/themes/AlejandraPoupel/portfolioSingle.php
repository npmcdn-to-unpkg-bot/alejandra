<?php
/**
 * Template Name: Portfolio Single
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Event
 * @since 1986
 */
?>

<?php get_header();?>


<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
    <ul class="portfolioSlider" data-scroll-speed="-4">
        <?php
        if( have_rows('slider_portfolio') ):
            while ( have_rows('slider_portfolio')) : the_row();?>
                <li data-img="<?php the_sub_field('slider_portfolio_image');?>"></li>
            <?php endwhile;
        else :?>
        <?php endif; ?>
    </ul>
    <h1 class="heroMessage" data-scroll-speed="-8">
        <?php the_field('heading_message');?>
    </h1>
</div>

<main>
    <section class="container portfolioAlter" id="gallery">
        <div class="row">

            <div id="gallery-content">
                <div id="gallery-content-center">
                    <?php if( have_rows('portfolio_images') ):
                        while ( have_rows('portfolio_images') ) : the_row();?>

                            <?php
                                        $thumbs = wp_get_attachment_image_src(get_sub_field('portfolio_image'), 'portfolio-thumb' );
                                    $srcImage = wp_get_attachment_image_src(get_sub_field('portfolio_image'), 'large' );
                            ?>
                            <img src="<?php echo $thumbs[0];?>" class="grid-item <?php if ( get_sub_field('double_width')): ?>grid-item--2<?php endif;?> lightboxSingle" data-image="<?php echo $srcImage[0];?>" />
                        <?php endwhile;;?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="lightbox">
                <img src="" class="lightboxedImage"/>
                <div class="controls">
                    <span class="close">x</span>
                        <span class="navPrev"></span>
                        <span class="navNext"></span>
                </div>
            </div>

        </div>
    </section>
</main>

<?php get_footer();?>


