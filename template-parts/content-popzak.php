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
<div id="zak" class="popup-zak">
    <div class="popup-zak__body popup__show">   
        <div class="popup-zak__content">
          <button aria-label="popup close" class="popup-zak__close"><i class="icon-plus"></i></button>
          <div class="popup-zak__content-form"> 
          <div class="popup-zak__left"></div> 
          <div class="popup-zak__right">
          <?php if($finances['popup-short-form']) {  echo do_shortcode($finances['popup-short-form']); } ?>
            </div>
</div>
        </div>
</div>
    </div>
</div>
<!--end end popup-->