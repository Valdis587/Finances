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
<section class="homecatalog">
    <div class="home-title-wrapper">
    <?php if($finances['tehnika-title-home']) {  ?>
    <h4 class="home-title"><?php echo $finances['tehnika-title-home']; ?></h4>
    <?php }  ?>
    <?php if($finances['tehnika-desc-home']) {  ?>
    <p class="home-desc"><?php echo $finances['tehnika-desc-home']; ?></p>
    <?php }  ?>
    </div>
    <div class="swiper homecatalog__content container">
        <div class="swiper-wrapper homecatalog__content-wrapper cart">
        <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'katalog',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
                                get_template_part( 'template-parts/content', 'catalog' );
			endwhile;
		endif;
		?>
        
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>