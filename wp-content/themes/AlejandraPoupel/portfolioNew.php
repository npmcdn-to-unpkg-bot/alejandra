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

<main>
    <section class="container portfolioNew">
        <div class="row">

            <h2><?php the_field('heading_message');?></h2>


            </div>
        </section>
</main>

<?php get_footer();?>


