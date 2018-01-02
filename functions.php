<?php
/**


@package Code2018
@subpackage Code2018
@since 1.0
*/
/** funcion para mandar la ruta en la llamada del hmtl del los archivos css y js */
define('RutaTema', get_stylesheet_directory_uri() );

/** funcion para mandar la ruta en la llamada de las imagenes en el html */
define('RutaImagenes',RutaTema.'/img');




/** definiendo caracteristicas del Tema */

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1200;

if ( ! function_exists('code2018_custom_theme_features') ) {

// Register Theme Features
function code2018_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'F1F4F6',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'editor-style.css' );

	// Add theme support for Translation
	load_theme_textdomain( 'code2018', get_template_directory() . '/languages' );

  // añadir un tamaño a imagesetthickness
  add_image_size('blog-size-image',820,615, true);
}
add_action( 'after_setup_theme', 'code2018_custom_theme_features' );

}



//cargando estilos y script


require_once('includes/scripts-styles.php');



//Añadindo sonas del menu interactivo


require_once('includes/menus.php');

//Registrando Sidebars interactivos


require_once('includes/sidebars.php');


//limitando the_excerpt
/**
function code_custom_the_excerpt($length){
	return 20;
}



add_filter('excerpt_length','code_custom_the_excerpt');

remove_action('shutdown','wp_ob_flush_all',1);

*/

//Funcion para limitar la catidad de palabras en entradas del blog solo del inicio
function code_custom_excerpt($limite){

	$extracto = explode(' ',get_the_excerpt(), $limite);
	if (count($extracto) >= $limite ) {
		array_pop($extracto);
		$extracto = implode(' ', $extracto) . '...';
	}else {
		$extracto = implode(' ', $extracto);
	}

	$extracto = preg_replace('/^\s*{(\w+)}\s*=/','',$extracto);
	return $extracto;
}


//Nuevos campos en el inicio


require_once('includes/nuevoscampos-inicio.php');


//agregando Nuevas funciones al  personalizador


require_once('includes/personalizador-tema.php');





//Añadiendo nuevas taxonomias


require_once('includes/nuevas-taxonomias.php');
