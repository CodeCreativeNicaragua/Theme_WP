<?php
$options = get_theme_mod('code_settings');
/******************************************
Slider
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
  $show_blurbs_section = false;
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
Seccion de ultimos articulos
******************************************/

//Mostrar u ocultar seccion
if (isset($options['show_last_post_section'])) {
  $show_last_post_section = $options['show_last_post_section'];
}else {
  $show_last_post_section = false;
}

if (!empty($options['last_post_section_tittle'])) {
  $last_post_section_tittle = $options['last_post_section_tittle'];
}

if (!empty($options['last_post_section_subtittle'])) {
  $last_post_section_subtittle = $options['last_post_section_subtittle'];
}

 ?>
