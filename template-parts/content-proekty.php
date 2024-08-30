<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finances
 */
 ?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__projekt cart__shadow">
    <div class="cart__projekt-img">
    <?php
        $id = get_post_thumbnail_id();
        $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
         <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__projekt-info">
        <a class="cart__projekt-title" href="<?php the_permalink(); ?>"><?php the_title(''); ?></a>
        <p class="cart__projekt-desc"><?php do_excerpt(get_the_excerpt(), 12); ?></p>
        <a class="btn-blue" href="<?php the_permalink(); ?>">Подробнее</a>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->