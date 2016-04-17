<?php get_header(); ?>


<div class="heroSlider" xmlns="http://www.w3.org/1999/html" >
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$url = $thumb['0']; ?>
	<div data-scroll-speed="-4" class="heroSliderImage" style="background-image:url('<?php echo $url;?>');">
	</div>
	<h1 class="heroMessage" data-scroll-speed="-8">
		<?php the_title();?>
	</h1>
</div>
<main role="main" class="articleMain" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<div class="container">
			<div class="row">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php
/*
								get_template_part( 'post-formats/format', get_post_format() );
							*/?>
						<article>

							<section><?php the_content();?></section>
							<footer>
								<span class="previousLink"><?php previous_post_link('%link');?></span>

								<span class="postInfos"><?php the_date();?> | <?php the_author();?></span>

								<span class="nextLink"><?php next_post_link('%link'); ?></span>
							</footer>
						</article>

						<?php endwhile; ?>

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

			</div>
		</div>
					</main>


<?php get_footer(); ?>
