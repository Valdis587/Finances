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
<section class="onas">
        <div class="onas__content container">
            <div class="onas__left">
                <div class="home-title-wrapper">
                <?php if($finances['onas-title-home']) {  ?>
    <h4 class="home-title"><?php echo $finances['onas-title-home']; ?></h4>
    <?php }  ?>
    <?php if($finances['onas-desc-home']) {  ?>
    <p class="home-desc"><?php echo $finances['onas-desc-home']; ?></p>
    <?php }  ?>
                    </div>
                <p><?php if($finances['onas-text-left']) { echo $finances['onas-text-left']; } ?></p>
            </div>
            <div class="onas__right">
                <div class="swiper onas__swiper-big">
                    <div class="swiper-wrapper onas__wrapper-big">
                    <?php
                $myGalleryIDs = explode(',', $finances['onas-gallery']); 
                foreach($myGalleryIDs as $myPhotoID) {
                    $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                ?>
                    <div class="swiper-slide onas__item-slide">
                        <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <?php } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="swiper onas__swiper-small">
                    <div class="swiper-wrapper onas__wrapper-small">
                    <?php
                $myGalleryIDs = explode(',', $finances['onas-gallery']); 
                foreach($myGalleryIDs as $myPhotoID) {
                    $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                ?>
                    <div class="swiper-slide onas__item-slide-small">
                    <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</section>