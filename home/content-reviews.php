<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finances
 */
global $finances; 
?>
<section class="homereviews">
    <div class="home-title-wrapper container">
    <?php if($finances['reviews-title-home']) {  ?>
    <h4 class="home-title"><?php echo $finances['reviews-title-home']; ?></h4>
    <?php }  ?>
    <?php if($finances['reviews-desc-home']) {  ?>
    <p class="home-desc"><?php echo $finances['reviews-desc-home']; ?></p>
    <?php }  ?>
        </div>
        <div class="swiper homereviews__content container">
            <div class="swiper-wrapper homereviews__content-wrapper cart">
            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'otzyvy',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', 'reviews' );
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
</section>