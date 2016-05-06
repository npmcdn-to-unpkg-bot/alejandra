<?php get_header(); ?>


<div class="heroSlider" xmlns="http://www.w3.org/1999/html" >
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$url = $thumb['0']; ?>
	<div data-scroll-speed="-4" class="heroSliderImage" style="background-image:url('<?php echo $url;?>');">
	</div>
	<h1 class="heroMessage" data-scroll-speed="-8">
		Alejandra Poupel Events : <?php the_title();?>
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

									<?php
									$thumbs = wp_get_attachment_image_src(get_sub_field('event_image'), 'portfolio-thumb' );
									$srcImage = wp_get_attachment_image_src(get_sub_field('event_image'), 'large' );
									?>

									<img src="<?php echo $thumbs[0];?>" class="grid-item lightboxSingle" data-image="<?php echo $srcImage[0];?>">

								<?php endwhile;
							else :?>
							<?php endif; ?>

						<?php endwhile; ?>

							<div class="lightbox">
								<img src="" class="lightboxedImage"/>
								<div class="controls">
									<span class="close">x</span>
									<div class="navigators">
										<span class="navPrev"></span>
										<span class="navNext"></span>
									</div>
								</div>
							</div>

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
						<?php /*previous_post_link('%link');*/?><!--
						--><?php /*next_post_link('%link'); */?>


					</main>
				</div>
			</div>

<?php get_footer(); ?>
