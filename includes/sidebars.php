<?php
/**

area para los wigets
@package Code2018
@subpackage Code2018
@since 1.0
*/

function code_sidebars(){

  register_sidebar(array(
  'name'          => __( 'Barra lateral', 'slan' ),
	'id'            => 'main-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => __( 'esta es la zona de widgets principal;' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Pie de pagina zona izquierda', 'slan' ),
	'id'            => 'footer-widget-izq',    // ID should be LOWERCASE  ! ! !
	'description'   => __( 'esta es la zona de widgets izquierda en el pie de pagina;' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Pie de pagina zona central', 'slan' ),
	'id'            => 'footer-widget-centro',    // ID should be LOWERCASE  ! ! !
	'description'   => __( 'esta es la zona de widgets central en el pie de pagina;' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Pie de pagina zona derecha', 'slan' ),
	'id'            => 'footer-widget-der',    // ID should be LOWERCASE  ! ! !
	'description'   => __( 'esta es la zona de widgets derecha en el pie de pagina;' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));
}

add_action('widgets_init','code_sidebars');
