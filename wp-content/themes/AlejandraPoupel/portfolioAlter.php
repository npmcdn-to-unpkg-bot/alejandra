<?php
/**
 * Template Name: Portfolio Grille Inspi
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Event
 * @since 1986
 */
?>

<?php get_header();?>

<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
    <ul class="portfolioSlider">
        <?php
        if( have_rows('slide_images') ):
            while ( have_rows('slide_images') ) : the_row();?>
                <li><img src="<?php the_sub_field('slide_single');?>"></li>
            <?php endwhile;
        else :?>
        <?php endif; ?>
    </ul>
    <h1 class="heroMessage">
        <?php the_field('heading_message');?>
    </h1>
</div>

<main>
    <section class="container portfolioAlter" id="gallery">
        <div class="row">
            <aside>
                    <?php
                    foreach (get_categories() as $category){
                        echo "<a data-category='$category->term_id' class='portfolioFilter' id='filter-$category->name'>";
                        echo $category->name;
                        echo "</a>";
                    } ?>
                    <a id="filter-all">Voir tout</a>
            </aside>

            <div id="gallery-content">
                <div id="gallery-content-center">
                    <?php if( have_rows('portfolio_images') ):
                        while ( have_rows('portfolio_images') ) : the_row();?>
                            <?php $thumbs = wp_get_attachment_image_src(get_sub_field('portfolio_image'), 'testimonials' ); ?>
                            <img src="<?php echo $thumbs[0];?>" />


                            <img src="<?php the_sub_field('portfolio_image');?>" class="grid-item all <?php echo $category->name;?>" />
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>

           <!-- <div class="grid" id="gallery">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>

            <?php /*if( have_rows('portfolio_images') ):
            while ( have_rows('portfolio_images') ) : the_row();*/?>

            <img src="<?php /*the_sub_field('portfolio_image');*/?>" class="grid-item" data-category="<?php /*the_sub_field('portfolio_category');*/?>"/>

            <?php /*endwhile;
                  endif;
            */?>
        </div>-->
        </div>
    </section>
</main>

<?php get_footer();?>


