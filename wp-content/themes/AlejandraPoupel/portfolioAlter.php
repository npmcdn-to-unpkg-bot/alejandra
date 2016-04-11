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
        <section class="container portfolioAlter">
            <div class="row">

                <aside>
                    <ul>
                        <?php
                        foreach (get_categories() as $category){
                            echo "<li data-category='$category->term_id' class='portfolioFilter'>";
                            echo $category->name;
                            echo "</li>";
                        } ?>
                    </ul>
                </aside>

                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="gutter-sizer"></div>

                <?php if( have_rows('portfolio_images') ):
                while ( have_rows('portfolio_images') ) : the_row();?>

                <img src="<?php the_sub_field('portfolio_image');?>" class="grid-item" data-category="<?php the_sub_field('portfolio_category');?>"/>

                <?php endwhile;
                      endif;
                ?>
            </div>
            </div>
        </section>
</main>

<?php get_footer();?>


