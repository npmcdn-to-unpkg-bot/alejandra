<?php get_header(); ?>


<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
	<?php the_post_thumbnail('full');?>

	<h1 class="heroMessage">
		<?php the_field('heading_message');?>
	<?php the_title();?>
	</h1>
</div>


<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
		<?php the_post_thumbnail();?>
		<?php the_title();?>
		<?php the_date();?>
		<?php the_category();?>
	</article>

	<?php endwhile;?>
	<?php endif;?>
	</main>









<?php get_footer(); ?>
