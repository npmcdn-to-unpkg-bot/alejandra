<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Event
 * @since 1986
 */
?>

<?php get_header();?>

<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
    <ul class="bxslider">
        <?php
            if( have_rows('slide_images') ):
                while ( have_rows('slide_images') ) : the_row();?>
                    <li><img src="<?php the_sub_field('slide_single');?>"  title="<?php the_sub_field('image_caption');?>"></li>
                <?php endwhile;
            else :?>
            <?php endif; ?>
    </ul>
    <h1 class="heroMessage">
        <?php the_field('heading_message');?>
    </h1>
</div>

<main>
    <div class="container">
        <section class="row eventKind">
            <?php
            if( have_rows('events_buttons') ):
                while ( have_rows('events_buttons') ) : the_row();?>
                    <div class="col-lg-4 col-md-4">
                        <div class="eventButton">
                           <a href="<?php the_sub_field('event_link');?>">
                               <img src="<?php the_sub_field('event_image');?>">
                                <div class="eventTitleContainer">
                                    <h2 class="event-<?php the_id();?>"><?php the_sub_field('event_title');?></h2>
                                </div>
                           </a>

                        </div>
                    </div>
                <?php endwhile;
            else :?>
            <?php endif; ?>

        </section>

        <?php if( have_rows('page_event_link') ):
            while ( have_rows('page_event_link') ) : the_row();?>
                <a class="btn" href="<?php the_sub_field('page_link');?>"><?php the_sub_field('page_link_name');?></a>
            <?php endwhile;
        else :?>
        <?php endif; ?>
    </div>

    <section class="lastEvents">
        <div class="container">
            <div class="row">
            <h2 class="col-lg-4">Nos derniers évènements</h2>

            <?php query_posts( 'post_type=events&posts_per_page=5' ); ?>
               <?php $count = 0;?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="col-lg-4 articleNumber<?php echo $count;?>">
                    <a href="<?php the_permalink();?>">
                        <div class="articleContainer">
                        <h3><?php the_title();?></h3>
                        <?php the_post_thumbnail('bones-thumb-square');?>
                        <?php the_category();?>
                    </div>
                    </a>
                </article>
                <?php if ($count===1):?>
                    </div><div class="row">
                <?php elseif($count===4):?>
                    </div>
                <?php endif;?>
                <?php $count++;?>
            <?php endwhile; ?>

            </div>
        </div>

    </section>
</main>

<?php get_footer();?>


