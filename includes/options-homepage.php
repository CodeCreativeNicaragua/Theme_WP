<?php
$options = get_theme_mod('code_settings');

/******************************************
SLIDER
******************************************/
//slider 1
if (!empty ($options['first_slider_image']) ) {
  $first_slider_image =$options['first_slider_image'];
}
//slider 2
if (!empty ($options['second_slider_image']) ) {
  $second_slider_image =$options['second_slider_image'];
}
//slider 3
if (!empty ($options['third_slider_image']) ) {
  $third_slider_image =$options['third_slider_image'];
}
//slider 4
if (!empty ($options['four_slider_image']) ) {
  $four_slider_image =$options['four_slider_image'];
}
/******************************************
About Us
******************************************/
//Mostrar u ocultar seccion
if (isset($options['show_about_section'])) {
  $show_about_section = $options['show_about_section'];
}else {
  $show_about_section = true;
}
//Titulo
if (!empty ($options['about_section_title']) ) {
  $about_section_title = $options['about_section_title'];
}else {
  $about_section_title = 'Conococenos un poco';
}
//texto
if (!empty ($options['about_section_subtitle']) ) {
  $about_section_subtitle = $options['about_section_subtitle'];
}else {
  $about_section_subtitle = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
}
//texto del boton
if (!empty ($options['about_section_title_btn']) ) {
  $about_section_title_btn =$options['about_section_title_btn'];
}else {
  $about_section_title_btn = 'Conocer más';
}
//Enlace del boton
if (!empty ($options['about_section_link_btn']) ) {
  $about_section_link_btn =$options['about_section_link_btn'];
}else {
  $about_section_link_btn = '#';
}

//Imagen
if (!empty ($options['about_image']) ) {
  $about_image =$options['about_image'];
}else {
  $about_image = RutaImagenes . '/slide1.jpg';
}
/******************************************
Seccion de anuncions o blurbs
******************************************/
//Mostrar u ocultar Seccion
if (isset($options['show_blurbs_section'])) {
  $show_blurbs_section = $options['show_blurbs_section'];
}else {
  $show_blurbs_section = true;
}
//Titulo seccion de anuncios o blurbs
if (!empty ($options['blurbs_section_title']) ) {
  $blurbs_section_title =$options['blurbs_section_title'];
}
//Titulo seccion de anuncios o blurbs
if (!empty ($options['blurbs_section_subtitle']) ) {
  $blurbs_section_subtitle =$options['blurbs_section_subtitle'];
}

//Primer anuncio o blurbs

//Imagen
if (!empty ($options['first_bluerb_image']) ) {
  $first_bluerb_image =$options['first_bluerb_image'];
}else {
  $first_bluerb_image = RutaImagenes . '/blurb-cosechando.jpg';
}

//Enlace de la Imagen
if (!empty ($options['first_bluerb_link']) ) {
  $first_bluerb_link =$options['first_bluerb_link'];
}
//Titulo
if (!empty ($options['first_bluerb_title']) ) {
  $first_bluerb_title =$options['first_bluerb_title'];
}else {
  $first_bluerb_title= __('Primer Anuncio','slan');
}
//texto
if (!empty ($options['first_bluerb_text']) ) {
  $first_bluerb_text = $options['first_bluerb_text'];
}else {
  $first_bluerb_text = __('Esto es un texto de prueba, por favor ingresa el texto que necesites en el personalizador','slan');
}


//Segundo anuncio o blurbs
if (!empty ($options['second_bluerb_image']) ) {
  $second_bluerb_image = $options['second_bluerb_image'];
}else {
  $second_bluerb_image = RutaImagenes . '/blurb-cosechando.jpg';
}
//Enlace de la Imagen
if (!empty ($options['second_bluerb_link']) ) {
  $second_bluerb_link =$options['second_bluerb_link'];
}
//Titulo
if (!empty ($options['second_bluerb_title']) ) {
  $second_bluerb_title = $options['second_bluerb_title'];
}else {
  $second_bluerb_title= __('Segundo Anuncio','slan');
}
//texto
if (!empty ($options['second_bluerb_text']) ) {
  $second_bluerb_text =$options['second_bluerb_text'];
}else {
  $second_bluerb_text = __('Esto es un texto de prueba, por favor ingresa el texto que necesites en el personalizador','slan');
}

//Tercer anuncio o blurbs

if (!empty ($options['third_bluerb_image']) ) {
  $third_bluerb_image = $options['third_bluerb_image'];
}else {
  $third_bluerb_image = RutaImagenes . '/blurb-cosechando.jpg';
}
//Enlace de la Imagen
if (!empty ($options['third_bluerb_link']) ) {
  $third_bluerb_link =$options['third_bluerb_link'];
}
//Titulo
if (!empty ($options['third_bluerb_title']) ) {
  $third_bluerb_title = $options['third_bluerb_title'];
}else {
  $third_bluerb_title = __('Tercer Anuncio','slan');
}
//texto
if (!empty ($options['third_bluerb_text']) ) {
  $third_bluerb_text = $options['third_bluerb_text'];
}else {
  $third_bluerb_text = __('Esto es un texto de prueba, por favor ingresa el texto que necesites en el personalizador','slan');
}

//Boton de la seccion

if (!empty ($options['bluerb_link_btn']) ) {
  $bluerb_link_btn = $options['bluerb_link_btn'];
}else {
  $bluerb_link_btn = '#';
}
if (!empty ($options['bluerb_title_btn']) ) {
  $bluerb_title_btn = $options['bluerb_title_btn'];
}else {
  $bluerb_title_btn = __('Conocer más','slan');
}

/******************************************
Seccion de PORFOLIO
******************************************/
//Mostrar u ocultar seccion
if (isset($options['show_porfolio_section'])) {
  $show_porfolio_section = $options['show_porfolio_section'];
}else {
  $show_porfolio_section = true;
}
//TRABAJO 1
//Titulo
if (!empty($options['porfolio_section_tittle'])) {
  $porfolio_section_tittle = $options['porfolio_section_tittle'];
}else {
  $porfolio_section_tittle = 'Nuestros trabajos';
}

//Subtitulo
if (!empty($options['porfolio_section_subtittle'])) {
  $porfolio_section_subtittle = $options['porfolio_section_subtittle'];
}else {
  $porfolio_section_subtittle = 'Realizamos los mejores trabajos para hacer crecer su empresa';
}

//Primer trabajo - Imagen
if (!empty($options['porfolio_work_1'])) {
  $porfolio_work_1 = $options['porfolio_work_1'];
}else {
  $porfolio_work_1 = RutaImagenes . '/work-1.jpg';
}

// Categoria

if (!empty($options['porfolio_work_1_categoria'])) {
  $porfolio_work_1_categoria = $options['porfolio_work_1_categoria'];
}else {
  $porfolio_work_1_categoria = 'PROYECTO 1';
}

// Nombre

if (!empty($options['porfolio_work_1_nombre'])) {
  $porfolio_work_1_nombre = $options['porfolio_work_1_nombre'];
}else {
  $porfolio_work_1_nombre = 'Proyecto a CodeCreative';
}

// Enlace

if (!empty($options['porfolio_work_1_link'])) {
  $porfolio_work_1_link = $options['porfolio_work_1_link'];
}else {
  $porfolio_work_1_link = 'http://codecreativenicaragua.com';
}
//TRABAJO 2


//Primer trabajo - Imagen
if (!empty($options['porfolio_work_2'])) {
  $porfolio_work_2= $options['porfolio_work_2'];
}else {
  $porfolio_work_2 = RutaImagenes . '/work-2.jpg';
}

// Categoria

if (!empty($options['porfolio_work_2_categoria'])) {
  $porfolio_work_2_categoria = $options['porfolio_work_2_categoria'];
}else {
  $porfolio_work_2_categoria = 'PROYECTO 2';
}

// Nombre

if (!empty($options['porfolio_work_2_nombre'])) {
  $porfolio_work_2_nombre = $options['porfolio_work_2_nombre'];
}else {
  $porfolio_work_2_nombre = 'Proyecto a CodeCreative';
}

// Enlace

if (!empty($options['porfolio_work_2_link'])) {
  $porfolio_work_2_link = $options['porfolio_work_2_link'];
}else {
  $porfolio_work_2_link = 'http://codecreativenicaragua.com';
}

//TRABAJO 3


//Tercer trabajo - Imagen
if (!empty($options['porfolio_work_3'])) {
  $porfolio_work_3= $options['porfolio_work_3'];
}else {
  $porfolio_work_3 = RutaImagenes . '/work-3.jpg';
}

// Categoria

if (!empty($options['porfolio_work_3_categoria'])) {
  $porfolio_work_3_categoria = $options['porfolio_work_3_categoria'];
}else {
  $porfolio_work_3_categoria = 'PROYECTO 3';
}

// Nombre

if (!empty($options['porfolio_work_3_nombre'])) {
  $porfolio_work_3_nombre = $options['porfolio_work_3_nombre'];
}else {
  $porfolio_work_3_nombre = 'Proyecto a CodeCreative';
}

// Enlace

if (!empty($options['porfolio_work_3_link'])) {
  $porfolio_work_3_link = $options['porfolio_work_3_link'];
}else {
  $porfolio_work_3_link = 'http://codecreativenicaragua.com';
}

//Boton de la seccion

if (!empty ($options['porfolio_btn_text']) ) {
  $porfolio_btn_text = $options['porfolio_btn_text'];
}else {
  $porfolio_btn_text = __('Conocer más','slan');
}
if (!empty ($options['porfolio_btn_link']) ) {
  $porfolio_btn_link = $options['porfolio_btn_link'];
}else {
  $porfolio_btn_link = 'http://codecreativenicaragua.com';
}
/******************************************
Seccion de ultimos articulos
******************************************/

//Mostrar u ocultar seccion
if (isset($options['show_post_section'])) {
  $show_post_section = $options['show_post_section'];
}else {
  $show_post_section = true;
}

if (!empty($options['last_post_section_tittle'])) {
  $last_post_section_tittle = $options['last_post_section_tittle'];
}

if (!empty($options['last_post_section_subtittle'])) {
  $last_post_section_subtittle = $options['last_post_section_subtittle'];
}

/******************************************
Seccion de calls to action
******************************************/
// Primer llamado a la accion
if (!empty($options['call_to_action_section_texto_1'])) {
  $call_to_action_section_texto_1 = $options['call_to_action_section_texto_1'];
}else {
  $call_to_action_section_texto_1 = 'Texto de llamado a la acción 1';
}

if (!empty($options['call_to_action_section_text_btn_1'])) {
  $call_to_action_section_text_btn_1 = $options['call_to_action_section_text_btn_1'];
}else {
  $call_to_action_section_text_btn_1 = 'Contactar';
}

if (!empty($options['call_to_action_section_link_btn_1'])) {
  $call_to_action_section_link_btn_1 = $options['call_to_action_section_link_btn_1'];
}else {
  $call_to_action_section_link_btn_1 = 'https://codecreativenicaragua.com';
}

// Segundo llamado a la accion
if (!empty($options['call_to_action_section_texto_2'])) {
  $call_to_action_section_texto_2 = $options['call_to_action_section_texto_2'];
}else {
  $call_to_action_section_texto_2 = 'Texto de llamado a la acción 2';
}

if (!empty($options['call_to_action_section_text_btn_2'])) {
  $call_to_action_section_text_btn_2 = $options['call_to_action_section_text_btn_2'];
}else {
  $call_to_action_section_text_btn_2 = 'Contactar';
}

if (!empty($options['call_to_action_section_link_btn_2'])) {
  $call_to_action_section_link_btn_2 = $options['call_to_action_section_link_btn_2'];
}else {
  $call_to_action_section_link_btn_2 = 'https://codecreativenicaragua.com';
}
 ?>
