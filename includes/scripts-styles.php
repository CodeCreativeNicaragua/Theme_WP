<?php
/**


@package Code2018
@subpackage Code2018
@since 1.0
*/

//registrando y cargando hojas de estilos


function code_theme_styles(){

  wp_register_style('font-awesome',RutaTema.'/css/font-awesome.min.css','','4.7.0','all');
  wp_register_style('poppins-font','https://fonts.googleapis.com/css?family=Poppins:300,400,500,700','','','all');
  wp_register_style('ideal-image-slider',RutaTema.'/css/ideal-image-slider','','1.5.1','all');
  wp_register_style('style', get_stylesheet_uri(),array('font-awesome','poppins-font','ideal-image-slider'),'1.0','all');

  //cargando hojas de estilos

  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts','code_theme_styles');



//registrando y cargando scripts


function code_theme_scripts(){

  wp_register_script('slider',RutaTema.'/js/ideal-image-slider.min.js',array('jquery'),'1.5.1',true);
  wp_register_script('code-scripts',RutaTema.'/js/functions.js',array('jquery','slider'),'1.5.1',true);

  //cargar scripts-styles
  wp_enqueue_script('code-scripts');
  }

  add_action('wp_enqueue_scripts','code_theme_scripts');
