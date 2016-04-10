<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Event
 * @since 1986
 */
?>

<?php get_header(); ?>


<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
    <?php the_post_thumbnail('full');?>

    <h1 class="heroMessage">
        <?php the_field('heading_message');?>
    </h1>
</div>


<main id="main" class="m-all t-2of3 d-5of7 cf blogList" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


    <?php query_posts( 'post_type=post&posts_per_page=10' ); ?>
    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">



            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <?php the_date();?>

            <?php /*the_category();*/?>

            <?php the_post_thumbnail('large');?>

        </article>

    <?php endwhile;?>
    <?php echo paginate_links(array('prev_text' =>__('Previous'),'next_text'=>__('Next')));?>
</main>









<?php get_footer(); ?>
