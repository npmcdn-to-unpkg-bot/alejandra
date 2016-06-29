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
                <?php $image = get_sub_field('slider_portfolio_image');?>
                <li data-img="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="opacity:0">
                </li>
            <?php endwhile;
        else :?>
        <?php endif; ?>
    </ul>

</div>

<main>
    <?php if(qtrans_getLanguage() == "fr") : ?>
        <a href="tel:+33140810337" class="btn fixed-btn">Travaillons ensemble</a>
    <?php endif ?>
    <?php if(qtrans_getLanguage() == "en") : ?>
        <a href="tel:+33140810337" class="btn fixed-btn">let's work together</a>
    <?php endif ?>


    <h1 class="heroMessage">
        <?php the_field('heading_message');?>
    </h1>


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

</main>

<?php get_footer();?>


