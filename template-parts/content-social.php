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
<ul class="social__icon-list">
<?php if($finances['tg']) { ?>
                    <li><a aria-label="telegram" href="<?php echo $finances['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
                    <?php } ?>
                    <?php if($finances['sk']) { ?>
                    <li><a aria-label="skype"  href="<?php echo $finances['sk']; ?>"><i class="icon-skype"></i></a></li>
                    <?php } ?>
                    <?php if($finances['vb']) { ?>
                    <li><a aria-label="viber"  href="<?php echo $finances['vb']; ?>"><i class="icon-viber"></i></a></li>
                    <?php } ?>
                    <?php if($finances['vk']) { ?>
                    <li><a aria-label="vk"  href="<?php echo $finances['vk']; ?>"><i class="icon-vk"></i></a></li>
                    <?php } ?>
                    <?php if($finances['wh']) { ?>
                    <li><a aria-label="whatsapp" href="<?php echo $finances['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
                    <?php } ?>
</ul>
