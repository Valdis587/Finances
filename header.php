<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finances
 */
global $finances;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="alternate" href="<?php echo home_url(); ?>" hreflang="ru-ru" />
    <link rel="shortcut icon" sizes="120x120" href="<?php echo home_url(); ?>/favicon.svg" type="image/svg+xml" />
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
<header class="header">
    <div class="header__top-line">
        <div class="header__top-content container">
            <div class="header__top-item social">
            <?php get_template_part( 'template-parts/content', 'social' ); ?>
            </div>
            <button aria-label="menu" class="header__burger"><i class="icon-bars"></i></button>
        </div>
    </div>
    <div class="header__center-line">
        <div class="header__center-content container">
            <div class="header__center-logo">
            <?php get_template_part( 'template-parts/content', 'logo' ); ?>
            </div>
            <div class="header__center-contact">
                <div class="header__center-item">
                    <span class="header__icon"><i class="icon-clock"></i></span>
                    <div class="header__time-wrapp">
                    <?php if($finances['time-york']) { ?>
                    <p>Часы работы:</p>
                    <span class="header__icon-text"><?php echo $finances['time-york']; ?></span>
                    <?php if($finances['time-york-desc']) { ?>
                    <p><?php echo $finances['time-york-desc']; ?></p>
                    <?php } } ?>
                    </div>
                </div>
                <div class="header__center-item">
                    <span class="header__icon"><i class="icon-map-marker-alt"></i></span>
                    <div class="header__adres-wrapp">
                    <?php if($finances['adres']) { ?>
                    <p>Адрес:</p>
                    <span class="header__icon-text"><?php echo $finances['adres']; ?></span>
                    <?php if($finances['adres-desc']) { ?>
                    <p><?php echo $finances['adres-desc']; ?></p>
                    <?php } } ?>
                </div>
                </div>
        </div>
            <div class="header__center-button">
            <?php if($finances['phone']) { ?>
                <a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $finances['phone']); ?>" ><i class="icon-phone-alt"></i><?php echo $finances['phone']; ?></a>
                <?php } ?>
                <?php if($finances['email']) { ?>
                <a href="mailto:<?php echo $finances['email']; ?>"><i class="icon-envelope"></i><?php echo $finances['email']; ?></a>
                <?php } ?>
                <a class="header__button btn-blue" href="javascript:void(0);">Заказать звонок</a>
            </div>
        </div>
    </div>
    <div class="header__bottom-line">
        <div class="header__bottom-menu-wrapper container">
        <nav class="header__menu-nav">
            <button aria-label="menu-close" class="header__menu-close"><i class="icon-plus"></i></button>  
            <?php if( has_nav_menu('menu-primary') ) {
                        Finances_menu_primary();
                    }?>
        </nav>
        </div>
    </div>
</header>
<div class="content-wrapper">