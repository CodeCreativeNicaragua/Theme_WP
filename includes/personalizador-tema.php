<?php
/**

agregando nuevas funciones al personalizador

@package Code2018
@subpackage Code2018
@since 1.0
*/

function code_customize_regiser($wp_customize){

  /**---------------------------------------------
  PANEL ENCABEZADO
  ---------------------------------------------*/
    $wp_customize-> add_panel('code_header_panel', array(

      'title' => __('Encabezado','slan'),
      'description' => __('Opciones de encabezado','slan'),
      'priority' => 35
    ));

    /**---------------------------------------------
    ENCABEZADO SUPERIOR
    ---------------------------------------------*/
    $wp_customize-> add_section('code_header_top', array(

      'title' => __('Encabezado superior','slan'),
      'description' => __('Opciones de encabezado superior','slan'),
      'priority' => 10,
      'panel'=>'code_header_panel'
    ));

    /**---------------------------------------------
    TEXTO EN EL TOP HEADER
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[top_header_tex]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));
    /**---------------------------------------------
    CREANDO EL HTML DEL CONTROLADOR
    ---------------------------------------------*/
    $wp_customize-> add_control('top_header_tex', array(

      'label' => __('Texto en top header', 'slan'),
      'description' => __('Texto que se muestra en la barra superior','slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[top_header_tex]'
    ));

    /**---------------------------------------------
    ENLACES DE REDES SOCIALES
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[facebook_link]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('facebook_link', array(

      'label' => __('Enlace a pagina de facebook', 'slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[facebook_link]'
    ));
    /**---------------------------------------------
    ENLACES TWITER
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[twitter_link]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('twitter_link', array(

      'label' => __('Enlace a pagina de twitter', 'slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[twitter_link]'
    ));

    /**---------------------------------------------
    ENLACES instagram
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[instagram_link]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('instagram_link', array(

      'label' => __('Enlace a pagina de Instagram', 'slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[instagram_link]'
    ));

    /***************************************
    Encabezado normal
    ****************************************/
    $wp_customize->add_section('code_header', array(
      'title' => __('Encabezado normal', 'slan'),
      'description' => __('Opciones del encabezado normal', 'slan'),
      'priority' => 11,
      'panel' => 'code_header_panel'
    ));


    // Logo
    $wp_customize->add_setting('code_settings[logo]', array(
          'default' => '',
          'type' => 'theme_mod'
        ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
          'label' => __('Subir logo', 'slan'),
          'section' =>'code_header',
          'settings' => 'code_settings[logo]'
        )));


    /**---------------------------------------------
    CHECKBOX mostrar titulo y descripcion en encabezado
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[show_page_title]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('show_page_title', array(

      'label' => __('Mostrar titulo y descripcion de la web', 'slan'),
      'section' => 'code_header',
      'settings'=>'code_settings[show_page_title]',
      'type' => 'checkbox'
    ));

    /**---------------------------------------------
    PANEL PIE DE PAGINA
    ---------------------------------------------*/
      $wp_customize-> add_panel('code_footer_panel', array(

        'title' => __('pie de pagina','slan'),
        'description' => __('Opciones del pie de pagina','slan'),
        'priority' => 125
      ));

    /**---------------------------------------------
    ENCABEZADO NORMAL
    ---------------------------------------------*/
    $wp_customize-> add_section('code_call_to_action', array(

        'title' => __('Llamada a la accion','slan'),
        'priority' => 10,
        'panel'=>'code_footer_panel'
      ));
      // TEXTO LLAMADA A LA ACCION
      $wp_customize-> add_setting('code_settings[call_to_action_text]', array(

        'default' => '',
        'type' => 'theme_mod'
      ));

      $wp_customize-> add_control('call_to_action_text', array(

        'label' => __('Texto de llamado a la accion', 'slan'),
        'section' => 'code_call_to_action',
        'settings'=>'code_settings[call_to_action_text]'
      ));


      // TEXTO DEL BOTON LLAMADO A LA ACCION
      $wp_customize-> add_setting('code_settings[call_to_action_text_btn_text]', array(

        'default' => '',
        'type' => 'theme_mod'
      ));

      $wp_customize-> add_control('call_to_action_text_btn_text', array(

        'label' => __('Texto del boton del llamado a la accion', 'slan'),
        'section' => 'code_call_to_action',
        'settings'=>'code_settings[call_to_action_text_btn_text]'
      ));

      // ENLACE DEL BOTON LLAMADO A LA ACCION
      $wp_customize-> add_setting('code_settings[call_to_action_text_btn_link]', array(

        'default' => '',
        'type' => 'theme_mod'
      ));

      $wp_customize-> add_control('call_to_action_text_btn_link', array(

        'label' => __('Enlace del boton del llamado a la accion', 'slan'),
        'section' => 'code_call_to_action',
        'settings'=>'code_settings[call_to_action_text_btn_link]'
      ));

      /**---------------------------------------------
      PIE DE PAGINA INFERIOR
      ---------------------------------------------*/
      $wp_customize-> add_section('code_botton_footer', array(

          'title' => __('Pie de pagina inferior','slan'),
          'priority' => 11,
          'panel'=>'code_footer_panel'
        ));
        // TEXTO LLAMADA A LA ACCION
        $wp_customize-> add_setting('code_settings[code_botton_footer_text]', array(

          'default' => '',
          'type' => 'theme_mod'
        ));

        $wp_customize-> add_control('code_botton_footer_text', array(

          'label' => __('Texto de pie de pagina inferior', 'slan'),
          'section' => 'code_botton_footer',
          'settings'=>'code_settings[code_botton_footer_text]'
        ));

        /**---------------------------------------------
        BANNER
        ---------------------------------------------*/
        $wp_customize-> add_section('code_banner', array(

            'title' => __('Banner principal','slan'),
            'priority' => 36

          ));

          //BANNER
          $wp_customize-> add_setting('code_settings[banner]', array(

            'default' => '',
            'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'banner', array(

            'label' => __('Subir imagen del banner principal', 'slan'),
            'section' => 'code_banner',
            'settings'=>'code_settings[banner]'

          )));



          /**---------------------------------------------
          Panel opciones Home Page
          ---------------------------------------------*/
          $wp_customize-> add_panel('code_homepage_panel', array(

              'title' => __('HomePage','slan'),
              'description' => __('Opciones de la plantilla de la pagina de inicio','slan'),
              'priority' => 37

            ));
            //seccion de anuncions
            $wp_customize-> add_section('code_blurbs_section', array(

                'title' => __('Seccion de anuncios o blurbs ','slan'),
                'priority' => 10,
                'panel' =>'code_homepage_panel'

              ));
              //checkbox para mostrar la secccion de anuncios
            $wp_customize-> add_setting('code_settings[show_blurbs_section]', array(

                'default' => '',
                'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('show_blurbs_section', array(

                'label' => __('Mostrar seccion de anuncios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[show_blurbs_section]',
                'type' => 'checkbox'
            ));
            //Texto de seccion de anuncios
            $wp_customize-> add_setting('code_settings[blurbs_section_title]', array(

                'default' => '',
                'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('blurbs_section_title', array(

                'label' => __('Titulos de seccion de anuncios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[blurbs_section_title]'

            ));

            //subtitulo  de la  seccion de anuncios
            $wp_customize-> add_setting('code_settings[blurbs_section_subtitle]', array(

                'default' => '',
                'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('blurbs_section_subtitle', array(

                'label' => __('Sub-Titulo de seccion de anuncios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[blurbs_section_subtitle]'

            ));

            //Imagen primer anuncio
            $wp_customize-> add_setting('code_settings[first_bluerb_image]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'first_bluerb_image',array(

              'label' => __('Subir foto del primer anuncio', 'slan'),
              'section' => 'code_blurbs_section',
              'settings'=>'code_settings[first_bluerb_image]'

            )));

            //Titulo del  primer anuncio
            $wp_customize-> add_setting('code_settings[first_bluerb_title]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('first_bluerb_title', array(

                'label' => __('Titulo del primer anuncios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[first_bluerb_title]'

            ));

            //Texto del  primer anuncio
            $wp_customize-> add_setting('code_settings[first_bluerb_text]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('first_bluerb_text', array(

                'label' => __('Texto del primer anuncios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[first_bluerb_text]'

            ));

            //segundo anuncio

            $wp_customize-> add_setting('code_settings[second_bluerb_image]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));
            $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'second_bluerb_image',array(

              'label' => __('Subir foto segundo anuncio', 'slan'),
              'section' => 'code_blurbs_section',
              'settings'=>'code_settings[second_bluerb_image]'

            )));

            //Titulo del  primer anuncio
            $wp_customize-> add_setting('code_settings[second_bluerb_title]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('second_bluerb_title', array(

                'label' => __('Titulo del segundo anuncios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[second_bluerb_title]'

            ));

            //Texto del  primer anuncio
            $wp_customize-> add_setting('code_settings[second_bluerb_text]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('second_bluerb_text', array(

                'label' => __('Texto del segundo anuncio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[second_bluerb_text]'

            ));


            //tercer anuncio

            $wp_customize-> add_setting('code_settings[third_bluerb_image]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));
            $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'third_bluerb_image',array(

              'label' => __('Subir foto del tercer anuncio', 'slan'),
              'section' => 'code_blurbs_section',
              'settings'=>'code_settings[third_bluerb_image]'

            )));

            //Titulo del  primer anuncio
            $wp_customize-> add_setting('code_settings[third_bluerb_title]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('third_bluerb_title', array(

                'label' => __('Titulo del tercer anuncios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[third_bluerb_title]'

            ));

            //Texto del  primer anuncio
            $wp_customize-> add_setting('code_settings[third_bluerb_text]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('third_bluerb_text', array(

                'label' => __('Texto del tercer anuncio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[third_bluerb_text]'

            ));

            //seccion de articulos mas recientes
            $wp_customize-> add_section('code_last_post_section', array(

                'title' => __('Seccion de ultimos articulos','slan'),
                'priority' => 11,
                'panel' =>'code_homepage_panel'

              ));
              //checkbox para mostrar la secccion de anuncios
            $wp_customize-> add_setting('code_settings[show_last_post_section]', array(

                'default' => '',
                'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('show_last_post_section', array(

                'label' => __('Mostrar seccion de ultimos articulos', 'slan'),
                'section' => 'code_last_post_section',
                'settings'=>'code_settings[show_last_post_section]',
                'type' => 'checkbox'
            ));


            // Agregando personilazador del titutlo de las ultimas entradas


            $wp_customize-> add_setting('code_settings[last_post_section_tittle]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('last_post_section_tittle', array(

                'label' => __('Titulo de seccion de ultimos articulos', 'slan'),
                'section' => 'code_last_post_section',
                'settings'=>'code_settings[last_post_section_tittle]'

            ));

            //Texto del  primer anuncio
            $wp_customize-> add_setting('code_settings[last_post_section_subtittle]', array(

              'default' => '',
              'type' => 'theme_mod'
            ));

            $wp_customize-> add_control('last_post_section_subtittle', array(

                'label' => __('Sub-Titulo de seccion de ultimos articulos', 'slan'),
                'section' => 'code_last_post_section',
                'settings'=>'code_settings[last_post_section_subtittle]'

            ));











}

add_action('customize_register','code_customize_regiser');
