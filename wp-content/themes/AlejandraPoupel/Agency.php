<?php
/**
 * Template Name: Agency
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Event
 * @since 1986
 */
?>

<?php get_header();?>

<div class="heroSlider" xmlns="http://www.w3.org/1999/html">
    <?php the_post_thumbnail('full');?>
    <h1 class="heroMessage">
        <?php the_field('heading_message');?>
    </h1>
</div>

<main>

        <section class="container ourDna">
            <div class="row">
                <h2><?php the_field('dna_title');?></h2>
                <?php if( have_rows('dna') ):
                    while ( have_rows('dna') ) : the_row();?>
                        <div class="col-lg-3 dnaSingle dna<?php the_sub_field('step_title');?>">
                            <h3><?php the_sub_field('step_title');?></h3>
                            <p><?php the_sub_field('step_content');?></p>
                        </div>

                    <?php endwhile;
                else :?>
                <?php endif; ?>

            </div>
        </section>

    <section class="meetAlejandra">
            <div class="container">
            <h2><?php the_field('alejandra_title');?></h2>
            <?php if( have_rows('alejandra') ):
                while ( have_rows('alejandra') ) : the_row();?>

        <div class="row meetAlejandraSingle">

                    <div class="col-lg-6 imgContainer">
                        <img src="<?php the_sub_field('alejandra_image');?>" alt="">
                        </div>
                    <div class="col-lg-6">
                            <p><?php the_sub_field('alejandra_description');?></p>
                    </div>
        </div>
                <?php endwhile;
            else :?>
            <?php endif; ?>


            </div>
    </section>


</main>

<?php get_footer();?>

