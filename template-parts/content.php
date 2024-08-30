<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finances
 */

?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__news cart__shadow">
    <div class="cart__news-img">
	<?php
        $id = get_post_thumbnail_id();
        $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
         <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__news-img-link">
        <a href="<?php the_permalink(); ?>"><i class="icon-link"></i></a>
    </div>
    <div class="cart__news-bottom">
        <div class="cart__news-date">
            <p><?php the_date('d'); ?></p>
            <p><?php echo get_the_date( 'F'); ?></p>
        </div>
        <div class="cart__news-info">
            <a href="<?php the_permalink(); ?>" class="cart__news-title"><?php the_title(''); ?></a>
            <p class="cart__news-autor"><i class="icon-user-alt"></i> Автор: <?php the_author(); ?></p>
            <p class="cart__news-desc"><?php do_excerpt(get_the_excerpt(), 12); ?> ...</p>
            <a class="cart__news-link" href="<?php the_permalink(); ?>">Читать далее...</a>
        </div>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->

