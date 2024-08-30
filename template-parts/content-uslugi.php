<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finances
 */
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__service cart__shadow">
    <div class="cart__service-img">
    <?php
            $id = get_post_thumbnail_id();
            $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
        <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__service-info">
        <div class="cart__service-title-wrapper">
        <a href="<?php the_permalink(); ?>" class="cart__service-title"><?php the_title(''); ?></a>
    </div>
    </div>
    <div class="cart__service-over">
        <div class="cart__service-icon"><i class="icon-cogs"></i></div>
        <a href="" class="cart__service-title-over"><?php the_title(''); ?></a>
        <p class="cart__service-desc-over"><?php do_excerpt(get_the_excerpt(), 12); ?></p>
        <a class="cart__service-link" href="<?php the_permalink(); ?>">Подобнее</a>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->
