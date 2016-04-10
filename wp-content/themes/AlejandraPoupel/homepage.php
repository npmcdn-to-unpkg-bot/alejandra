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
    <ul class="homepageSlider">
        <?php
            if( have_rows('slide_images') ):
                while ( have_rows('slide_images') ) : the_row();?>
                    <li data-img="<?php the_sub_field('slide_single');?>"></li>
                <?php endwhile;
            else :?>
            <?php endif; ?>
    </ul>
    <h1 class="heroMessage">
        <?php the_field('heading_message');?>
    </h1>
</div>

<main>
        <section class="eventKind">
            <div class="container">
            <div class="row">
            <?php
            if( have_rows('events_buttons') ):
                while ( have_rows('events_buttons') ) : the_row();?>
                    <div class="col-lg-4 col-md-4 eventSingle">
                        <div class="eventButton" >
                           <a href="<?php the_sub_field('event_link');?>" data-category="<?php the_sub_field('event_title');?>">
                               <img src="<?php the_sub_field('event_image');?>">
                           </a>
                        </div>
                        <div class="eventTitleContainer">
                            <h2 class="event-<?php the_id();?>" data-kind="<?php the_sub_field('event_title');?>"><?php the_sub_field('event_title');?></h2>
                        </div>
                    </div>
                <?php endwhile;
            else :?>
            <?php endif; ?>
                <div class="eventsDescription col-lg-8 col-lg-offset-2"><?php the_field('events_description');?></div>
                <?php if( have_rows('page_event_link') ):
                    while ( have_rows('page_event_link') ) : the_row();?>
                        <a class="btn firstBtn" href="<?php the_sub_field('page_link');?>"><?php the_sub_field('page_link_name');?></a>
                    <?php endwhile;
                else :?>
                <?php endif; ?>
            </div>
            </div>
        </section>




    <section class="alejandraDescription">
        <div class="container">
        <div class="row">

        <?php if( have_rows('meet_alejandra') ):
            while ( have_rows('meet_alejandra') ) : the_row();?>
               <div class="col-lg-4 col-lg-offset-8 descriptionTitle"><h2><?php the_sub_field('meet_title');?></h2></div>
            <div class="col-lg-3 col-lg-offset-1 descriptionImage"><img src="<?php the_sub_field('meet_img');?>" alt="Alejandra Poupel Portrait"></div>
                <div class="col-lg-7 descriptionContent">
                    <?php the_sub_field('meet_content');?>
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





    <section class="lastEvents">
        <div class="container">
            <div class="row">
            <h2 class="col-lg-4">Nos derniers évènements</h2>



            <?php query_posts( 'post_type=events&posts_per_page=4' ); ?>
               <?php $count = 0;?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="col-lg-4 portfolioSingle">
                    <?php echo the_category();?>
                    <a href="<?php echo get_permalink();?>">
                        <div class="articleContainer">

                        <?php the_post_thumbnail('bones-thumb-square');?>
                            <div class="articleInfos">
                                <h3><?php the_title();?></h3>
                                <time><?php the_date();?></time>
                            </div>
                    </div>
                    </a>
                </article>
                <?php if ($count===1):?>
                    </div><div class="row">
                <?php elseif($count===3):?>
                <article class="col-lg-4 btnContainer">



                <?php endif;?>
                <?php $count++;?>
            <?php endwhile; ?>
            <?php wp_reset_query();?>
            <?php if( have_rows('page_portfolio_links') ):
                while ( have_rows('page_portfolio_links') ) : the_row();?>
                    <a class="btn" href="<?php the_sub_field('page_portfolio_link');?>"><?php the_sub_field('page_portfolio_name');?></a>
                <?php endwhile;
            else :?>
            <?php endif; ?>
                </article>
            </div>





        </div>

        </div>

    </section>


<?php get_footer();?>


