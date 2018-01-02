<?php
$options = get_theme_mod('code_settings');
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
