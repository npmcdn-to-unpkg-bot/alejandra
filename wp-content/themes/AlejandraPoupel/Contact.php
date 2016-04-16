<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Alejandra Poupel Event
 * @since 1986
 */
?>

<?php get_header();?>

<div class="heroSlider" xmlns="http://www.w3.org/1999/html" >
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $url = $thumb['0']; ?>
    <div data-scroll-speed="-4" class="heroSliderImage" style="background-image:url('<?php echo $url;?>');">
    </div>
    <h1 class="heroMessage" data-scroll-speed="-8">
        <?php the_field('heading_message');?>
    </h1>
</div>
<main>

        <section class="container contact">
        <div class="row">
            <div class="col-lg-5">
                <h2><?php the_field('adresses_title');?></h2>
            <?php if( have_rows('adresses') ):
                while ( have_rows('adresses') ) : the_row();?>
                    <div class="adressSingle">
                        <h3><?php the_sub_field('adress_city');?></h3>
                        <p><?php the_sub_field('adress_content');?></p>
                    </div>

                <?php endwhile;
            else :?>
            <?php endif; ?>

                <h2><?php the_field('socials_title');?></h2>
                <div class="Socials">
                    <?php wp_nav_menu( array( 'theme_location' => 'Social_Links' ) ); ?>
                </div>

                <h2><?php the_field('cta_title');?></h2>

                <?php if( have_rows('cta') ):
                    while ( have_rows('cta') ) : the_row();?>
                <a class="btn" href="<?php the_sub_field('cta_link');?>"><?php the_sub_field('cta_title');?></a>
                    <?php endwhile;
                else :?>
                <?php endif; ?>






            </div>

            <div class="col-lg-6 formContainer">
                <h2><?php the_field('form_title');?></h2>
                <p><?php the_field('form_description');?></p>
                <?php the_field('form');?>
            </div>
        </div>
    </section>

    <section class="googleMap">

    </section>


</main>

<?php get_footer();?>


