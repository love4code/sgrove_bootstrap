<?php
/**
 * Created by PhpStorm.
 * User: markgrover
 * Date: 12/27/15
 * Time: 3:57 PM
 */
$sgrove_menus = get_option('activate_custom_menu');
if( !empty( $sgrove_menus ) ){
    add_theme_support( 'menus');
}