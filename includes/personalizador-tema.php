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
    //checkbox para mostrar la secccion
    $wp_customize-> add_setting('code_settings[show_header_superior_section]', array(

          'default' => '',
          'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('show_header_superior_section', array(

          'label' => __('Mostrar esta sección ', 'slan'),
          'section' => 'code_header_top',
          'settings'=>'code_settings[show_header_superior_section]',
          'type' => 'checkbox'
    ));
    //seccion en cabezado superior
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

      'label' => __('Texto en parte superior', 'slan'),
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

      'label' => __('Enlace a página de facebook', 'slan'),
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

      'label' => __('Enlace a página de twitter', 'slan'),
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

      'label' => __('Enlace a página de Instagram', 'slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[instagram_link]'
    ));

    /**---------------------------------------------
    ENLACES instagram
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[youtube_link]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('youtube_link', array(

      'label' => __('Enlace a página de YouTube', 'slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[youtube_link]'
    ));

    /**---------------------------------------------
    ENLACES SnapChat
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[snap_link]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('snap_link', array(

      'label' => __('Enlace a página de SnapChat', 'slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[snap_link]'
    ));

    /**---------------------------------------------
    ENLACES WhatsApp
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[whatsapp_link]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('whatsapp_link', array(

      'label' => __('Enlace a página de WhatsApp', 'slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[whatsapp_link]'
    ));

    /**---------------------------------------------
    ENLACES LinkedIn
    ---------------------------------------------*/
    $wp_customize-> add_setting('code_settings[linkedin_link]', array(

      'default' => '',
      'type' => 'theme_mod'
    ));

    $wp_customize-> add_control('linkedin_link', array(

      'label' => __('Enlace a página de LinkedIn', 'slan'),
      'section' => 'code_header_top',
      'settings'=>'code_settings[linkedin_link]'
    ));


    /***************************************
    Encabezado normal
    ****************************************/
    $wp_customize->add_section('code_header', array(
      'title' => __('Opciones de logo del menú', 'slan'),
      'description' => __('Opciones para cambiar el logo del menú', 'slan'),
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

      'label' => __('Mostrar título y descripción de la web', 'slan'),
      'section' => 'code_header',
      'settings'=>'code_settings[show_page_title]',
      'type' => 'checkbox'
    ));


        /*---------------------------------------------
        BANNER por defecto
        ---------------------------------------------*/
        $wp_customize-> add_section('code_banner', array(

            'title' => __('Imagen de encabezado','slan'),
            'description' => 'Imagen por defecto de encabezado de todas las páginas',
            'priority' => 36,
            'panel'=>'code_header_panel'

          ));

          //BANNER
          $wp_customize-> add_setting('code_settings[banner]', array(

            'default' => '',
            'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'banner', array(

            'label' => __('Subir imagen de encabezado', 'slan'),
            'section' => 'code_banner',
            'settings'=>'code_settings[banner]'

          )));

          /**---------------------------------------------
          Panel opciones Home Page
          ---------------------------------------------*/

          $wp_customize-> add_panel('code_homepage_panel', array(

              'title' => __('Página de inicio','slan'),
              'description' => __('Opciones de la plantilla de la página de inicio','slan'),
              'priority' => 37

          ));

            //seccion de Slider
          $wp_customize-> add_section('code_slider_section', array(

                  'title' => __('Sección de slider principal ','slan'),
                  'priority' => 10,
                  'panel' =>'code_homepage_panel'

          ));

          //Imagen 1 slider
          $wp_customize-> add_setting('code_settings[first_slider_image]', array(

                  'default' => '',
                  'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'first_slider_image',array(

                  'label' => __('Subir imagen del primer slider', 'slan'),
                  'section' => 'code_slider_section',
                  'settings'=>'code_settings[first_slider_image]'

          )));

          //Imagen 2 slider
          $wp_customize-> add_setting('code_settings[second_slider_image]', array(

                  'default' => '',
                  'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'second_slider_image',array(

                  'label' => __('Subir imagen del segundo slider', 'slan'),
                  'section' => 'code_slider_section',
                  'settings'=>'code_settings[second_slider_image]'

          )));

          //Imagen 3 slider
          $wp_customize-> add_setting('code_settings[third_slider_image]', array(

                  'default' => '',
                  'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'third_slider_image',array(

                  'label' => __('Subir imagen del tercer slider', 'slan'),
                  'section' => 'code_slider_section',
                  'settings'=>'code_settings[third_slider_image]'

          )));
          //Imagen 4 slider
          $wp_customize-> add_setting('code_settings[four_slider_image]', array(

                  'default' => '',
                  'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'four_slider_image',array(

                  'label' => __('Subir imagen del cuarto slider', 'slan'),
                  'section' => 'code_slider_section',
                  'settings'=>'code_settings[four_slider_image]'

          )));
          /******************************
          Título de seccion de sobre la empresa
          *******************************/

          //checkbox para mostrar la secccion
          $wp_customize-> add_setting('code_settings[show_about_section]', array(

                'default' => '',
                'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('show_about_section', array(

                'label' => __('Mostrar esta sección ', 'slan'),
                'section' => 'code_about_section',
                'settings'=>'code_settings[show_about_section]',
                'type' => 'checkbox'
          ));
          //seccion about
          $wp_customize-> add_section('code_about_section', array(

                  'title' => __('Sección sobre la empresa ','slan'),
                  'priority' => 11,
                  'panel' =>'code_homepage_panel'

          ));

          $wp_customize-> add_setting('code_settings[about_section_title]', array(

                'default' => '',
                'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('about_section_title', array(

                'label' => __('Título sobre la empresa', 'slan'),
                'section' => 'code_about_section',
                'settings'=>'code_settings[about_section_title]'

          ));

            //Texo  de la  seccion sobre la empresa
          $wp_customize-> add_setting('code_settings[about_section_subtitle]', array(

                'default' => '',
                'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('about_section_subtitle', array(

                'label' => __('Texto sobre la empresa', 'slan'),
                'section' => 'code_about_section',
                'settings'=>'code_settings[about_section_subtitle]'

          ));

          //Texo  del boton de la  seccion sobre la empresa
        $wp_customize-> add_setting('code_settings[about_section_title_btn]', array(

              'default' => '',
              'type' => 'theme_mod'
        ));

        $wp_customize-> add_control('about_section_title_btn', array(

              'label' => __('Texto de botón', 'slan'),
              'section' => 'code_about_section',
              'settings'=>'code_settings[about_section_title_btn]'

        ));

        //Enlace del boton
      $wp_customize-> add_setting('code_settings[about_section_link_btn]', array(

            'default' => '',
            'type' => 'theme_mod'
      ));

      $wp_customize-> add_control('about_section_link_btn', array(

            'label' => __('Enlace del botón', 'slan'),
            'section' => 'code_about_section',
            'settings'=>'code_settings[about_section_link_btn]'

      ));
      //Imagen about
      $wp_customize-> add_setting('code_settings[about_image]', array(

              'default' => '',
              'type' => 'theme_mod'
      ));

      $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'about_image',array(

              'label' => __('Subir imagen', 'slan'),
              'section' => 'code_about_section',
              'settings'=>'code_settings[about_image]'

      )));


          /******************************
          Seccion de anuncios
          *******************************/
          //checkbox para mostrar la secccion
          $wp_customize-> add_setting('code_settings[show_blurbs_section]', array(

                'default' => '',
                'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('show_blurbs_section', array(

                'label' => __('Mostrar esta sección ', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[show_blurbs_section]',
                'type' => 'checkbox'
          ));
          //Seccion de anuncios
          $wp_customize-> add_section('code_blurbs_section', array(

                  'title' => __('Sección de anuncios o servicios ','slan'),
                  'priority' => 12,
                  'panel' =>'code_homepage_panel'

          ));

          $wp_customize-> add_setting('code_settings[blurbs_section_title]', array(

                'default' => '',
                'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('blurbs_section_title', array(

                'label' => __('Título de sección de anuncios o servicios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[blurbs_section_title]'

          ));

            //subtitulo  de la  seccion de anuncios o servicios
          $wp_customize-> add_setting('code_settings[blurbs_section_subtitle]', array(

                'default' => '',
                'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('blurbs_section_subtitle', array(

                'label' => __('Subtitulo de sección de anuncios o servicios', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[blurbs_section_subtitle]'

          ));

            //Imagen primer anuncio
          $wp_customize-> add_setting('code_settings[first_bluerb_image]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'first_bluerb_image',array(

              'label' => __('Subir imagen del primer anuncios o servicios', 'slan'),
              'section' => 'code_blurbs_section',
              'settings'=>'code_settings[first_bluerb_image]'

          )));

          //enlace del  priner  anuncio
          $wp_customize-> add_setting('code_settings[first_bluerb_link]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('first_bluerb_link', array(

                'label' => __('Enlace de la imagen del primer anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[first_bluerb_link]'

          ));

          //Título  del  primer anuncio
          $wp_customize-> add_setting('code_settings[first_bluerb_title]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('first_bluerb_title', array(

                'label' => __('Título  del primer anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[first_bluerb_title]'

          ));

          //Texto del  primer anuncio
          $wp_customize-> add_setting('code_settings[first_bluerb_text]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('first_bluerb_text', array(

                'label' => __('Texto del primer anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[first_bluerb_text]'

          ));

            //Segundo anuncio

            //Imagen
          $wp_customize-> add_setting('code_settings[second_bluerb_image]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));
          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'second_bluerb_image',array(

              'label' => __('Subir imagen segundo anuncio o servicio', 'slan'),
              'section' => 'code_blurbs_section',
              'settings'=>'code_settings[second_bluerb_image]'

          )));
          //enlace del  segundo  anuncio
          $wp_customize-> add_setting('code_settings[second_bluerb_link]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('second_bluerb_link', array(

                'label' => __('Enlace de la imagen del segundo anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[second_bluerb_link]'

          ));

            //Título  del  segundo anuncio
          $wp_customize-> add_setting('code_settings[second_bluerb_title]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('second_bluerb_title', array(

                'label' => __('Título  del segundo anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[second_bluerb_title]'

          ));

          //Texto del  segundo anuncio
          $wp_customize-> add_setting('code_settings[second_bluerb_text]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('second_bluerb_text', array(

                'label' => __('Texto del segundo anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[second_bluerb_text]'

          ));


          //Foto de tercer anuncio

          $wp_customize-> add_setting('code_settings[third_bluerb_image]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));
          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'third_bluerb_image',array(

              'label' => __('Subir imagen del tercer anuncio o servicio', 'slan'),
              'section' => 'code_blurbs_section',
              'settings'=>'code_settings[third_bluerb_image]'

          )));

          //enlace del  tercer  anuncio
          $wp_customize-> add_setting('code_settings[third_bluerb_link]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('third_bluerb_link', array(

                'label' => __('Enlace de la imagen del tercer anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[third_bluerb_link]'

          ));

          //Título  del  tercer anuncio
          $wp_customize-> add_setting('code_settings[third_bluerb_title]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('third_bluerb_title', array(

                'label' => __('Título  del tercer anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[third_bluerb_title]'

          ));

          //Texto del  tercer  anuncio
          $wp_customize-> add_setting('code_settings[third_bluerb_text]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('third_bluerb_text', array(

                'label' => __('Texto del tercer anuncio o servicio', 'slan'),
                'section' => 'code_blurbs_section',
                'settings'=>'code_settings[third_bluerb_text]'

          ));

          //Enlace del boton de todos los servicios
        $wp_customize-> add_setting('code_settings[bluerb_link_btn]', array(

              'default' => '',
              'type' => 'theme_mod'
        ));

        $wp_customize-> add_control('bluerb_link_btn', array(

              'label' => __('Enlace del botón', 'slan'),
              'section' => 'code_blurbs_section',
              'settings'=>'code_settings[bluerb_link_btn]'

        ));
          //titulo del boton de todos los servicios
        $wp_customize-> add_setting('code_settings[bluerb_title_btn]', array(

              'default' => '',
              'type' => 'theme_mod'
        ));

        $wp_customize-> add_control('bluerb_title_btn', array(

              'label' => __('Texto del botón', 'slan'),
              'section' => 'code_blurbs_section',
              'settings'=>'code_settings[bluerb_title_btn]'

        ));
          //-----------------------------------
          //SECCION PORFOLIO
          //-----------------------------------
          $wp_customize-> add_section('code_porfolio_section', array(

                'title' => __('Sección de trabajos realizados','slan'),
                'priority' => 13,
                'panel' =>'code_homepage_panel'

          ));

          //checkbox para mostrar la secccion
          $wp_customize-> add_setting('code_settings[show_porfolio_section]', array(

                'default' => '',
                'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('show_porfolio_section', array(

                'label' => __('Mostrar esta sección', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[show_porfolio_section]',
                'type' => 'checkbox'
          ));
          //titulo de la seccion
          $wp_customize-> add_setting('code_settings[porfolio_section_tittle]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_section_tittle', array(

                'label' => __('Título de sección', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_section_tittle]'

          ));

          //Subtitulo de la seccion
          $wp_customize-> add_setting('code_settings[porfolio_section_subtittle]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_section_subtittle', array(

                'label' => __('Título de sección', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_section_subtittle]'

          ));
          //Primer trabajo - Imagen
          $wp_customize-> add_setting('code_settings[porfolio_work_1]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'porfolio_work_1',array(

              'label' => __('Subir imagen del primer proyecto', 'slan'),
              'section' => 'code_porfolio_section',
              'settings'=>'code_settings[porfolio_work_1]'

          )));

          // Categoria
          $wp_customize-> add_setting('code_settings[porfolio_work_1_categoria]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_1_categoria', array(

                'label' => __('Categoria del primer proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_1_categoria]'

          ));
          // Nombre del proyecto
          $wp_customize-> add_setting('code_settings[porfolio_work_1_nombre]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_1_nombre', array(

                'label' => __('Nombre del primer proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_1_nombre]'

          ));

          // Link del proyecto
          $wp_customize-> add_setting('code_settings[porfolio_work_1_link]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_1_link', array(

                'label' => __('Enlace del primer proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_1_link]'

          ));

          //segundo trabajo - Imagen
          $wp_customize-> add_setting('code_settings[porfolio_work_2]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'porfolio_work_2',array(

              'label' => __('Subir imagen del segundo proyecto', 'slan'),
              'section' => 'code_porfolio_section',
              'settings'=>'code_settings[porfolio_work_2]'

          )));

          // Categoria
          $wp_customize-> add_setting('code_settings[porfolio_work_2_categoria]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_2_categoria', array(

                'label' => __('Categoria del segundo proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_2_categoria]'

          ));
          // Nombre del proyecto
          $wp_customize-> add_setting('code_settings[porfolio_work_2_nombre]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_2_nombre', array(

                'label' => __('Nombre del segundo proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_2_nombre]'

          ));

          // Link del proyecto
          $wp_customize-> add_setting('code_settings[porfolio_work_2_link]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_2_link', array(

                'label' => __('Enlace del segundo proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_2_link]'

          ));

          //Tercer trabajo - Imagen
          $wp_customize-> add_setting('code_settings[porfolio_work_3]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'porfolio_work_3',array(

              'label' => __('Subir imagen del tercer proyecto', 'slan'),
              'section' => 'code_porfolio_section',
              'settings'=>'code_settings[porfolio_work_3]'

          )));

          // Categoria
          $wp_customize-> add_setting('code_settings[porfolio_work_3_categoria]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_3_categoria', array(

                'label' => __('Categoria del tercer proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_3_categoria]'

          ));
          // Nombre del proyecto
          $wp_customize-> add_setting('code_settings[porfolio_work_3_nombre]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_3_nombre', array(

                'label' => __('Nombre del tercer proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_3_nombre]'

          ));

          // Link del proyecto
          $wp_customize-> add_setting('code_settings[porfolio_work_3_link]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_work_3_link', array(

                'label' => __('Enlace del tercer proyecto', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_work_3_link]'

          ));
          // boton del proyecto
          $wp_customize-> add_setting('code_settings[porfolio_btn_text]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_btn_text', array(

                'label' => __('Texto del botón de la sección', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_btn_text]'

          ));

          // link del boton del proyecto
          $wp_customize-> add_setting('code_settings[porfolio_btn_link]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('porfolio_btn_link', array(

                'label' => __('Enlace del botón', 'slan'),
                'section' => 'code_porfolio_section',
                'settings'=>'code_settings[porfolio_btn_link]'

          ));


          //-----------------------------------
          //seccion de articulos mas recientes
          //-----------------------------------
          $wp_customize-> add_section('code_last_post_section', array(

                'title' => __('Sección del blog','slan'),
                'priority' => 15,
                'panel' =>'code_homepage_panel'

          ));

          //checkbox para mostrar la secccion de blog
          $wp_customize-> add_setting('code_settings[show_post_section]', array(

                'default' => '',
                'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('show_post_section', array(

                'label' => __('Mostrar sección de blog', 'slan'),
                'section' => 'code_last_post_section',
                'settings'=>'code_settings[show_post_section]',
                'type' => 'checkbox'
          ));


          // *****************************
          //   SECCION DE BLOG
          //******************************

          $wp_customize-> add_setting('code_settings[last_post_section_tittle]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('last_post_section_tittle', array(

                'label' => __('Título de sección', 'slan'),
                'section' => 'code_last_post_section',
                'settings'=>'code_settings[last_post_section_tittle]'

          ));

          //Subtitulo de sección de últimos artículos del blog
          $wp_customize-> add_setting('code_settings[last_post_section_subtittle]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('last_post_section_subtittle', array(

                'label' => __('Subtitulo  de sección', 'slan'),
                'section' => 'code_last_post_section',
                'settings'=>'code_settings[last_post_section_subtittle]'

          ));

          // *****************************
          //   SECCION DE CALLS TO ACTION
          //******************************
          $wp_customize-> add_section('call_to_action_section', array(

                'title' => __('Sección de llamadas a la acción','slan'),
                'priority' => 16,
                'panel' =>'code_homepage_panel'

          ));
          // Primer Texto
          $wp_customize-> add_setting('code_settings[call_to_action_section_texto_1]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('call_to_action_section_texto_1', array(

                'label' => __('Texto del primer llamada a la acción', 'slan'),
                'section' => 'call_to_action_section',
                'settings'=>'code_settings[call_to_action_section_texto_1]'

          ));

          // Primer texto de boton
          $wp_customize-> add_setting('code_settings[call_to_action_section_text_btn_1]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('call_to_action_section_text_btn_1', array(

                'label' => __('Texto del primer botón', 'slan'),
                'section' => 'call_to_action_section',
                'settings'=>'code_settings[call_to_action_section_text_btn_1]'

          ));

          // Primer link boton
          $wp_customize-> add_setting('code_settings[call_to_action_section_link_btn_1]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('call_to_action_section_link_btn_1', array(

                'label' => __('Enlace del primer botón', 'slan'),
                'section' => 'call_to_action_section',
                'settings'=>'code_settings[call_to_action_section_link_btn_1]'

          ));

          // Segundo Texto
          $wp_customize-> add_setting('code_settings[call_to_action_section_texto_2]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('call_to_action_section_texto_2', array(

                'label' => __('Texto del segundo llamada a la acción', 'slan'),
                'section' => 'call_to_action_section',
                'settings'=>'code_settings[call_to_action_section_texto_2]'

          ));

          // segundo texto de  boton
          $wp_customize-> add_setting('code_settings[call_to_action_section_text_btn_2]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('call_to_action_section_text_btn_2', array(

                'label' => __('Texto del Segundo botón', 'slan'),
                'section' => 'call_to_action_section',
                'settings'=>'code_settings[call_to_action_section_text_btn_2]'

          ));
          // segundo link boton
          $wp_customize-> add_setting('code_settings[call_to_action_section_link_btn_2]', array(

              'default' => '',
              'type' => 'theme_mod'
          ));

          $wp_customize-> add_control('call_to_action_section_link_btn_2', array(

                'label' => __('Enlace del segundo botón', 'slan'),
                'section' => 'call_to_action_section',
                'settings'=>'code_settings[call_to_action_section_link_btn_2]'

          ));


}

add_action('customize_register','code_customize_regiser');
