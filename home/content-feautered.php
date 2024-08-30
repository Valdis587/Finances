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
<section class="feuter">
    <div class="home-title-wrapper">
    <?php if($finances['feutered-title-home']) {  ?>
    <h4 class="home-title"><?php echo $finances['feutered-title-home']; ?></h4>
    <?php }  ?>
    <?php if($finances['feutered-desc-home']) {  ?>
    <p class="home-desc"><?php echo $finances['feutered-desc-home']; ?></p>
    <?php }  ?>
</div>
    <div class="feuter__content container">
    <?php 
    $i=0; 
    if($finances['title_feutered']) {
		foreach ($finances['title_feutered'] as $tab => $key) { $i++ ?>
        <div class="feuter__item cart__border-color">
            <div class="feuter__img">
            <img src="<?php echo $finances['feutered-img'][$i-1]['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="feuter__text">
                <p class="feuter__title"><?php echo $finances['title_feutered'][$i-1]; ?></p>
                <p class="feuter__desc"><?php echo $finances['textarea_feutered'][$i-1]; ?></p>
            </div>
        </div>
        <?php } } ?>
    </div>
</section>