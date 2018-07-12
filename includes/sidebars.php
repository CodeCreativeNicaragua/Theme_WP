<?php
/**

area para los wigets
@package Code2018
@subpackage Code2018
@since 1.0
*/

function code_sidebars(){

  register_sidebar(array(
  'name'          => __( 'Zona lateral del blog', 'slan' ),
	'id'            => 'main-sidebar',    // ID should be LOWERCASE  ! ! !
	'description'   => __( 'Esta es la zona de widgets principal;' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Widget de Pie de página izquierda', 'slan' ),
	'id'            => 'footer-widget-izq',    // ID should be LOWERCASE  ! ! !
	'description'   => __( 'Esta es la zona de widgets izquierda en el pie de página;' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Widget de Pie de página central', 'slan' ),
	'id'            => 'footer-widget-centro',    // ID should be LOWERCASE  ! ! !
	'description'   => __( 'Esta es la zona de widgets central en el pie de página;' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
  'name'          => __( 'Widget de Pie de página derecha', 'slan' ),
	'id'            => 'footer-widget-der',    // ID should be LOWERCASE  ! ! !
	'description'   => __( 'Esta es la zona de widgets derecha en el pie de página;' ),
  'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'          => __( 'Widget de contacto', 'code' ),
  	'id'            => 'contact-widget',    // ID should be LOWERCASE  ! ! !
  	'description'   => __('Esta es la zona de widget principal para agregar el formulario de contacto','code'),
    'class'         => '',
  	'before_widget' => '<div id="%1$s" class="footer-logo %2$s">',
  	'after_widget'  => '</div>',
  	'before_title'  => '<h3 class="title">',
  	'after_title'   => '</h3>'
  ));
}

add_action('widgets_init','code_sidebars');
