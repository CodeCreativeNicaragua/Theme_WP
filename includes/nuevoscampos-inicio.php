<?php
/**
*Crear campos adicionales en la pagina de inicio

*@package Code2018
*@subpackage Code2018
*@since 1.0
*/


function code_new_metabox_home(){

    add_meta_box('datos-home', __('Datos en la pagina de inicio','slan'), 'code_metabox_home', 'page', 'normal','high');
}

add_action('add_meta_boxes', 'code_new_metabox_home');

$code_custom_fields_home = array(

array(
  'label' => __('Titulo Destacado', 'slan'),
  'description' => __('Ingrese el titulo destacado del sitio', 'slan'),
  'id' => 'Titulo_destacado',
  'type' => 'text'
  ),

array(
    'label' => __('SubTitulo Destacado', 'slan'),
    'description' => __('Ingrese el SubTitulo destacado del sitio', 'slan'),
    'id' => 'SubTitulo_destacado',
    'type' => 'text'
    ),

array(
    'label' => __('Texto del boton', 'slan'),
    'description' => __('Ingrese texto del boton', 'slan'),
    'id' => 'Texto_del_boton_destacado',
    'type' => 'text'
    ),

array(
    'label' => __('Enlace del boton', 'slan'),
    'description' => __('Ingrese el enlace que tendra del boton', 'slan'),
    'id' => 'link_boton_destacado',
    'type' => 'text'
    )
);

function code_metabox_home(){

global $code_custom_fields_home, $post;

wp_nonce_field('code_metabox_home_nonce', 'meta_box_nonce');

foreach ($code_custom_fields_home as $campo) {

  //optener el valor del campos
  $meta = get_post_meta($post->ID, $campo['id'], true);

  ?>
        <p>
            <label for="<?php echo $campo['id'];?>"><?php echo $campo['label']; ?></label>
            <input class="widefat" id="<?php echo $campo['id'];?>" type="text" name="<?php echo $campo['id'];?>" value="<?php echo $meta; ?>">
            <span class="howto"><?php echo $campo['description']; ?></span>
        </p>
  <?php
  }
}


function save_code_metabox_home( $post_id ){

  global $code_custom_fields_home;

// verificando el envio del nonce
  if ( !isset ( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'],'code_metabox_home_nonce') ) {
      return;
  }
// verificando que solo se guarde cuando se de clic en actualizar.

if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
  return;
  }
// verificando que los guardados sea de una pagina y que el usuario tenga permisos de edicion
if ($_POST['post_type'] == 'page') {

  if ( !current_user_can('edit_page', $post_id) ) {
    return;
  }
}

//haciendo un recorrido por los campos
foreach ($code_custom_fields_home as $campo) {
    //obteniendo el valor del campo anterior
    $antiguo = get_post_meta($post_id, $campo['id'], true);

    $nuevo = $_POST[$campo['id']];

    if ($nuevo && $nuevo != $antiguo) {
      update_post_meta($post_id, $campo['id'], $nuevo);

    } elseif ( $nuevo == '' && $antiguo) {
      delete_post_meta($post_id, $campo['id'], $antiguo);
    }

  }

}

add_action('save_post', 'save_code_metabox_home');



function show_hide_code_metabox_home(){

  ?>

    <style media="screen">
          #datos-home{

            display: none;
          }
    </style>

    <script type="text/javascript">
          jQuery(document).ready(function ($) {


            function showhide_datoshome(){
                if ( $('#page_template').attr('value') == 'template-home.php') {

                  $('#datos-home').slideDown();
                }else {
                  $('#datos-home').slideUp();
                }

                $('#datos-home-hide').parent().remove();

              }

            showhide_datoshome();

          $('#page_template').on('change', function () {

            showhide_datoshome();
          });
      });
    </script>
<?php

}

add_action('admin_head','show_hide_code_metabox_home');
