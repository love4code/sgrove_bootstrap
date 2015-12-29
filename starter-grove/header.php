<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sgrove</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(array('sgrove','my-class')); ?> >
<?php
wp_nav_menu('theme_location', 'primary');
?>

<?php
    echo 'This is the Header';
