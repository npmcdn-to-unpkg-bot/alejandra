<?php
/**
 * Template Name: Portfolio Classique
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
        <section class="container portfolio">
            <div class="row">
                <aside>
                </aside>
                <?php query_posts( 'post_type=events' ); ?>
                <?php $count = 0;?>
                <?php while ( have_posts() ) : the_post(); ?>
                <article class="col-lg-4 portfolioSingle">
                    <a href="<?php the_permalink();?>">
                        <div class="articleContainer">

                            <?php the_post_thumbnail('bones-thumb-square');?>
                            <div class="articleInfos">
                                <?php /*the_category();*/?>
                                <h3><?php the_title();?></h3>
                                <time><?php the_date();?></time>
                            </div>
                        </div>
                    </a>
                </article>
                    <?php endwhile; ?>
                    <?php wp_reset_query();?>
            </div>
        </section>
</main>

<?php get_footer();?>


