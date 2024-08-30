<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finances
 */
global $finances;
if(is_front_page()) { ?>
    <img src="<?php echo $finances['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
    <?php } else { ?>
         <a href="<?php echo home_url(); ?>">
         <img src="<?php echo $finances['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
     </a>
    <?php } ?>