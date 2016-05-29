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
    <ul class="homepageSlider" data-scroll-speed="-4">
        <?php
            if( have_rows('slide_images') ):
                while ( have_rows('slide_images') ) : the_row();?>
                    <li data-img="<?php the_sub_field('slide_single');?>"></li>
                <?php endwhile;
            else :?>
            <?php endif; ?>
    </ul>
    <h1 class="heroMessage" data-scroll-speed="-8">
        <?php the_field('heading_message');?>
    </h1>
</div>

<main>
        <section class="eventKind">
            <div class="container">
            <div class="row">


                <?php if( have_rows('sublinks_list') ):
                    while ( have_rows('sublinks_list') ) : the_row();?>
                        <article class="col-xs-3 servicesLinks">
                            <a href="<?php the_sub_field('sublink_single');?>">

                                <?php $thumb = wp_get_attachment_image_src(get_sub_field('sublink_image'), 'bones-thumb-skyscraper' ); ?>
                                <img src="<?php echo $thumb[0];?>">
                                <h4 class="hiddenTitle"><?php the_sub_field('sublink_title');?></h4>
                            </a>
                            <h4 class="mobileHelper"><?php the_sub_field('sublink_title');?></h4>
                        </article>

                    <?php endwhile;?>
                <?php endif;?>


          <!--  <?php
/*            if( have_rows('events_buttons') ):
                while ( have_rows('events_buttons') ) : the_row();*/?>
                    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0 eventSingle">
                        <div class="eventButton" >
                           <a href="<?php /*the_sub_field('event_link');*/?>" data-category="<?php /*the_sub_field('event_title');*/?>">
                               <img src="<?php /*the_sub_field('event_image');*/?>">
                           </a>
                        </div>
                        <div class="eventTitleContainer">
                            <h2 class="event-<?php /*the_id();*/?>" data-kind="<?php /*the_sub_field('event_title');*/?>"><?php /*the_sub_field('event_title');*/?></h2>
                        </div>
                    </div>
                <?php /*endwhile;
            else :*/?>
            --><?php /*endif; */?>

            </div>
            </div>
        </section>

    <section class="alejandraDescription">
        <div class="container">
        <div class="row">

        <?php if( have_rows('meet_alejandra') ):
            while ( have_rows('meet_alejandra') ) : the_row();?>
               <div class="col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8 descriptionTitle">
                   <h2><?php the_sub_field('meet_title');?></h2>
               </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1 descriptionImage" data-scroll-speed="17" data-scroll-style="lerp">
                    <img src="<?php the_sub_field('meet_img');?>" alt="Alejandra Poupel Portrait">
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1 col-md-7 col-md-offset-0 descriptionContent" data-scroll-speed="8">
                    <p><?php the_sub_field('meet_content');?></p>

                    <?php if( have_rows('cta_page_agence') ):
                        while ( have_rows('cta_page_agence') ) : the_row();?>
                            <a class="btn" href="<?php the_sub_field('page_agence_link');?>"><?php the_sub_field('page_agence_name');?></a>
                        <?php endwhile;
                    else :?>
                    <?php endif; ?>
                </div>
            <?php endwhile;
        else :?>
        <?php endif; ?>
        </div>
        </div>
    </section>


<?php get_footer();?>


