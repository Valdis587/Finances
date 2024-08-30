<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finances
 */
global $finances;
get_template_part('home/content', 'logo');
?>
</div>  
   <footer class="footer">
   <?php if ($finances['foo-short-form']) { ?>
	   <div class="footer__top-line">
		   <div class="footer__top-content container">
			<?php echo do_shortcode($finances['foo-short-form']); ?>
		   </div>
	   </div>
	   <?php } ?>
	   <div class="footer__content container">
		   <div class="footer__content-contact">
		   <?php if($finances['foo-title1']) { ?>
            <h5 class="footer__title"><?php echo $finances['foo-title1']; ?></h5>
            <?php } ?>
			   <ul class="footer__contact-list">
			   <?php if($finances['phone']) { ?>
                <li><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $finances['phone']); ?>"><i class="icon-phone-alt"></i><?php echo $finances['phone']; ?></a></li>
                <?php } ?>
                <?php if($finances['email']) { ?>
                <li><a href="mailto:<?php echo $finances['email']; ?>"><i class="icon-envelope"></i><?php echo $finances['email']; ?></a></li>
                <?php } ?>
                <?php if($finances['adres']) { ?>
                <li><i class="icon-map-marker-alt"></i><?php echo $finances['adres']; ?></li>
                <?php } ?>
                <?php if($finances['time-york']) { ?>
                <li><i class="icon-clock"></i> <?php echo $finances['time-york']; ?></li>
                <?php } ?>
			   </ul>
		   </div>
		   <div class="footer__content-menu">
		   <?php if($finances['foo-title2']) { ?>
            <h5 class="footer__title"><?php echo $finances['foo-title2']; ?></h5>
            <?php } ?>
			<?php if( has_nav_menu('menu-page') ) {
                Finances_menu_page();
            }?>
		   </div>
		   <div class="footer__content-menu">
		   <?php if($finances['foo-title3']) { ?>
            <h5 class="footer__title"><?php echo $finances['foo-title3']; ?></h5>
            <?php } ?>
			<?php if( has_nav_menu('menu-service') ) {
                Finances_menu_service();
            }?>
		   </div>
		   <div class="footer__content-desc">
			   <p> <?php if($finances['foo-text']) { echo $finances['foo-text']; }?></p>
			   <?php get_template_part( 'template-parts/content', 'social' ); ?>
		   </div>
	   </div>
	   <div class="footer__copy">
	   <?php if($finances['foo-copy']) { echo $finances['foo-copy']; }?>
	   </div>
	   <a href="javascript:void(0);" class="footer__button-up"><i class="icon-angle-down"></i></a>
   </footer>
</div>
<?php 
 get_template_part( 'template-parts/content', 'popup' );
 get_template_part( 'template-parts/content', 'popzak' );
if($finances['google']) { echo $finances['google']; } 
if($finances['yandex']) { echo $finances['yandex']; } 
?>
<?php wp_footer(); ?>
</body>
</html>
