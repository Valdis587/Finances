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
get_header();
get_template_part( 'template-parts/content', 'head' );
do_action( 'start_wrapper_single_sidebar_right' ); 
?>
                <div class="single__top">
                <?php if(!$value['uslugi-gallery-on']) { ?>
                <div class="single__img-thumb">
                <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' ); ?>
               <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                    </div>
                    <?php } else { ?>
                    <div class="single__top-img">
                    <?php 
                      $myGalleryIDs = explode(',', $value['uslugi-gallery']);
                      if($myGalleryIDs) {
                    ?>
                        <div class="swiper single__sleder-big">
                            <div class="swiper-wrapper single__sleder-big-wrapp">
                            <?php 
                        foreach($myGalleryIDs as $myPhotoID) {
                            $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                         ?>
                                <div class="swiper-slide single__item-slide-big">
                                <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                                </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <div class="swiper single__sleder-small">
                            <div class="swiper-wrapper single__sleder-small-wrapp">
                            <?php 
                        foreach($myGalleryIDs as $myPhotoID) {
                            $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                         ?>
                                <div class="swiper-slide single__item-slide-small">
                                <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <div class="single__top-info">
                        <p class="single__project-name"><?php the_title(''); ?></p>
                        <?php
                        if($value['item-uslugi']) {
							 $i =0; 
							foreach ($value['uslugi-left'] as $tab => $key) { $i++ ?>
                            <p class="single__catalog-item"><span><?php echo $value ['uslugi-left'][$i-1]; ?></span><?php echo $value ['uslugi-right'][$i-1]; ?></p>
                            <?php } } ?>
                    </div>
                </div>
                <div class="single__buttom-text">
                <?php the_content(); ?>
                </div>
                <?php if($value['uslugi-table-on']) { ?>
                <div class="single__table">
                    <table class="site-table">
                        <thead>
                            <tr>
                                <th>Вид работ</th>
                                <th>Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
							 $i =0;
							foreach ($value['uslugi-tablefield1'] as $tab => $key) { $i++ ?>
                            <tr>
                                <td><?php echo $value ['uslugi-tablefield1'][$i-1]; ?></td>
                                <td><?php echo $value ['uslugi-tablefield2'][$i-1]; ?></td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
                <?php } ?>
<?php do_action( 'end_wrapper_single_sidebar_right' );
get_footer();
