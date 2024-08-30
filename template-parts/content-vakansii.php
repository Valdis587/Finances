<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finances
 */
global $finances; 
$value = redux_post_meta( 'finances', 'otzyvy' );
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__vakan cart__shadow">
    <div class="cart__vakan-content">
        <div class="cart__vakan-img">
        <?php
            $id = get_post_thumbnail_id();
            $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
        <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
        </div>
        <div class="cart__vakan-text">
            <p class="cart__vakan-name"><?php the_title(''); ?></p>
            <p class="cart__vakan-price"><?php echo $value['vakansii-price']; ?> руб.</p>
            <div class="cart__vakan-desc">
            <?php the_content(); ?>
            </div>
        </div>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->