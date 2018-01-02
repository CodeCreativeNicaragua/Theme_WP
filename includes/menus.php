<?php
/**
Registrando area de menu

@package Code2018
@subpackage Code2018
@since 1.0
*/


function code_menu(){

  register_nav_menus(array(
    'main-menu' => __('Menu principal en cabecera','slan')

));
}

add_action('init','code_menu');
