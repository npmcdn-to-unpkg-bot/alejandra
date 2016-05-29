<?php
/**
 * Template Name: Service Single
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
        <?php echo the_title();?>
    </h1>
</div>

<main>

    <section class="container service">
        <div class="row">

            <article class="row">
            <div class="col-xs-12 col-md-8 descriptionContainer">

                <h3><?php echo the_title();?></h3>
                <p><?php
                $id= $post->ID;
                $post = get_post($id);
                $content = apply_filters('the_content', $post->post_content);
                echo $content;
                ?></p>
                <a href="<?php the_field('portfolio_link');?>" class="btn">Voir le portfolio</a>

            </div>

            <div class="col-sm-12 col-md-4 quoteContainer">
                <blockquote><?php the_field('service_single_quote');?></blockquote>

            </div>
            </article>
            <div class="separator" data-image="<?php the_field('service_single_image');?>"></div>


            <?php if( have_rows('sublinks_list') ):
                while ( have_rows('sublinks_list') ) : the_row();?>
                    <article class="col-xs-3 servicesLinks">
                        <a href="<?php the_sub_field('sublink_single');?>">

                            <?php $thumb = wp_get_attachment_image_src(get_sub_field('sublink_image'), 'bones-thumb-skyscraper' ); ?>
                            <img src="<?php echo $thumb[0];?>">
                            <h4 class="hiddenTitle"><?php the_sub_field('sublink_title');?></h4>
                        </a>
                    </article>
                <?php endwhile;?>
            <?php endif;?>

        </div>
    </section>



</main>

<?php get_footer();?>


