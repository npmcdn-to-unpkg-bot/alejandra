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
        if( have_rows('portfolio_slides') ):
            while ( have_rows('portfolio_slides') ) : the_row();?>
                <?php
                $slideThumbs = wp_get_attachment_image_src(get_sub_field('portfolio_image'), 'portfolio-thumb' );
                ?>
                <li><img src="<?php the_sub_field('portfolio_single_slide');?>"></li>
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
            <aside class="portfolioFilters">
                    <?php
                    foreach (get_categories() as $category){
                        echo "<span class='col-xs-6 col-sm-3' ><a data-category='cat-$category->term_id' class='portfolioFilter'>";
                        echo $category->name;
                        echo "</a></span>";
                    } ?>
                    <a id="filter-all" data-category="cat-all" class="portfolioFilter">Voir tout</a>
            </aside>

            <div id="gallery-content">
                <div id="gallery-content-center">
                    <?php if( have_rows('portfolio_images') ):
                        while ( have_rows('portfolio_images') ) : the_row();?>

                            <?php
                                      $thumbs = wp_get_attachment_image_src(get_sub_field('portfolio_image'), 'portfolio-thumb' );
                                    $srcImage = wp_get_attachment_image_src(get_sub_field('portfolio_image'), 'large' );
                            ?>
                            <img src="<?php echo $thumbs[0];?>" class="grid-item cat-all cat-<?php the_sub_field('portfolio_category');?> lightboxSingle" data-image="<?php echo $srcImage[0];?>" />
                        <?php endwhile;;?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="lightbox">
                <img src="" class="lightboxedImage"/>
                <div class="controls">
                    <span class="close">close</span>
                        <span class="navPrev">prev</span>
                        <span class="navNext">next</span>
                </div>
            </div>

        </div>
    </section>
</main>

<?php get_footer();?>


