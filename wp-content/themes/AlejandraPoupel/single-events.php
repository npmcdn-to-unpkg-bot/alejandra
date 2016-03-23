<?php get_header(); ?>

<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
	<?php the_post_thumbnail('full');?>
	<h1 class="heroMessage">
		<?php the_title();?>
	</h1>
</div>

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<section class="eventDescription">
							<div class="container">
							<div class="col-lg-4">
							<h2><?php the_field('event_description_title');?></h2>
							</div>
							<div class="col-lg-8">
								<?php the_content();?>
							</div>
							</div>
						</section>

						<div class="container">
							<div class="grid">
							<div class="grid-sizer"></div>
							<div class="gutter-sizer"></div>
							<?php
							if( have_rows('event_images') ):
								while ( have_rows('event_images') ) : the_row();?>

									<img src="<?php the_sub_field('event_image');?>" class="grid-item <?php if ( get_sub_field('double_width')): ?>grid-item--2<?php else:?><?php endif;?>">

								<?php endwhile;
							else :?>
							<?php endif; ?>

						<?php endwhile; ?>
							</div>
							</div>
						<?php else : ?>
							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>
						<?php endif; ?>
						<?php previous_post_link('%link');?>
						<?php next_post_link('%link'); ?>


					</main>
				</div>
			</div>

<?php get_footer(); ?>
