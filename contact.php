<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head' );
global $finances;
?>
<div class="page container">
    <div class="page__content">
        <div class="page__item">
            <ul class="page__contact-list">
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
        <div class="page__item">
        <?php if($finances['map']) { 
            echo $finances['map'];
        } ?>
        </div>
    </div>
</div>
<?php
get_footer();