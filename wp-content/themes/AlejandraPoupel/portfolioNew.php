<?php
/**
 * Template Name: Portfolio Separated
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
                <li data-img="<?php the_sub_field('slider_portfolio_image');?>">
                    <img src="<?php the_sub_field('slider_portfolio_image');?>" style="opacity:0">
                </li>

            <?php endwhile;
        else :?>
        <?php endif; ?>
    </ul>

</div>

<!--<div id="frame">
    <ul class="slidee">
        <?php
/*        if( have_rows('slider_portfolio') ):
            while ( have_rows('slider_portfolio')) : the_row();*/?>
                <li><img src="<?php /*the_sub_field('slider_portfolio_image');*/?>" data-src="<?php /*the_sub_field('slider_portfolio_image');*/?>"/></li>
            <?php /*endwhile;
        else :*/?>
        <?php /*endif; */?>
    </ul>
</div>-->

<main>
    <section class="container portfolioNew">
        <div class="row">

            <h2><?php the_field('heading_message');?></h2>

            <?php if( have_rows('sublinks_list') ):
                while ( have_rows('sublinks_list') ) : the_row();?>
                    <article class="col-xs-3 servicesLinks">
                        <a href="<?php the_sub_field('sublink_single');?>">

                            <?php $thumb = wp_get_attachment_image_src(get_sub_field('sublink_image'), 'bones-thumb-skyscraper' ); ?>
                            <img src="<?php echo $thumb[0];?>">
                            <h4 class="hiddenTitle"><?php the_sub_field('sublink_title');?></h4>
                        </a>
                        <h4 class="mobileHelper"><?php the_sub_field('sublink_title');?></h4>
                    </article>

                <?php endwhile;?>
            <?php endif;?>
            </div>
        </section>
</main>

<?php get_footer();?>


