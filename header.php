<!DOCTYPE html>
<?php
/**
archivos con el encabezado del tema

@package Code2018
@subpackage Code2018
@since 1.0
*/

?>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title><?php wp_title('|',true,'right') ?> <?php bloginfo('name') ?></title>

    <?php if ( is_admin_bar_showing() ):?>
      <style media="screen">
        @media all and (max-width:980px) {
          header .menu-bar .menu-principal{
            top:32px !important;
            }
          }
        @media all and (max-width:782px) {
          header .menu-bar .menu-principal{
            top:46px !important;
            }
          }
        }
      </style>
    <?php endif; ?>

     <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
     <?php if (is_single() && comments_open() ) {
       wp_enqueue_script('comments-reply');
     } ?>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo RutaTema;?>/css/ideal-image-slider.css">
  </head>
  <body <?php body_class();?>>

      <?php $options = get_theme_mod('code_settings');
        //ocultar section top header
        if (isset($options['show_header_superior_section'])) {
          $show_header_superior_section = $options['show_header_superior_section'];
        }else {
          $show_header_superior_section = false;
        }
        //Enlace Texto en top header
        if ( !empty($options['top_header_tex'] ) ) {

            $top_header_tex = $options['top_header_tex'];

        }

        //Enlace Facebook
        if ( !empty($options['facebook_link']) ) {

            $facebook_link = $options['facebook_link'];

        }

        //Enlace Twitter
        if ( !empty($options['twitter_link']) ) {

            $twitter_link = $options['twitter_link'];

        }

        //Enlace Instagram
        if ( !empty($options['instagram_link']) ) {

            $instagram_link = $options['instagram_link'];

        }

        //Enlace YouTube
        if ( !empty($options['youtube_link']) ) {

            $youtube_link = $options['youtube_link'];

        }

        //Enlace SnapChat
        if ( !empty($options['snap_link']) ) {

            $snap_link = $options['snap_link'];

        }
        //Enlace Whatsapp
        if ( !empty($options['whatsapp_link']) ) {

            $whatsapp_link = $options['whatsapp_link'];

        }

        //Enlace linkedin
        if ( !empty($options['linkedin_link']) ) {

            $linkedin_link = $options['linkedin_link'];

        }

        // Logo

        if ( !empty($options['logo']) ) {

            $logo = $options['logo'];

        }else {
            $logo = RutaImagenes. '/logotipo.png';
        }

          // Mostrar u ocultar título web

        if ( isset ($options['show_page_title']) ) {

            $show_page_title = $options['show_page_title'];

        }else {
          $show_page_title = false;
        }

      ?>

    <!-- Header -->
    <header >

      <?php if ($show_header_superior_section == true): ?>

      <div class="top-header ">

        <div class="top-text">
          <?php if (isset($top_header_tex)): ?>

              <p><?php echo $top_header_tex; ?></p>

           <?php endif; ?>
        </div>

        <!-- <div class="search-container">
          <?php get_search_form(); ?>
        </div> -->

        <div class="top-redes">
          <?php if ( isset($facebook_link) ): ?>
            <a href="<?php echo esc_url($facebook_link); ?>">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          <?php endif; ?>

          <?php if (isset($twitter_link)): ?>
            <a href="<?php echo esc_url($twitter_link);?>">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          <?php endif; ?>

          <?php if (isset($instagram_link)): ?>
            <a href="<?php echo esc_url($instagram_link);?>">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          <?php endif; ?>

          <?php if (isset($youtube_link)): ?>
            <a href="<?php echo esc_url($youtube_link); ?>">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
          <?php endif; ?>

          <?php if (isset($snap_link)): ?>
            <a href="<?php echo esc_url($snap_link); ?>">
              <i class="fa fa-snapchat" aria-hidden="true"></i>
            </a>
          <?php endif; ?>

          <?php if (isset($whatsapp_link)): ?>
            <a href="<?php echo esc_url($whatsapp_link); ?>">
              <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
          <?php endif; ?>

          <?php if (isset($linkedin_link)): ?>
            <a href="<?php echo esc_url($linkedin_link); ?>">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          <?php endif; ?>




        </div>

      </div> <!-- /Top header -->

            <?php endif; ?>

      <div class="menu-bar">
        <a href="<?php echo home_url(); ?>" class="logo-container">
          <img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>">
          <?php if ($show_page_title == true): ?>
            <div class="titulo-web">
              <h1><?php bloginfo('name'); ?></h1>
              <h2><?php bloginfo('description');?> ?</h2>
            </div>
          <?php endif; ?>
        </a>

        <nav id="menuPrincipal" class="menu-principal">
          <div class="top-text">
            <?php if (isset ($top_header_tex)): ?>

                <p> <?php echo $top_header_tex; ?></p>

           <?php endif; ?>
            <i id="iconoCerrarMenu" class="fa fa-arrow-left" aria-hidden="true"></i>
          </div>
          <div class="top-redes">
            <?php if ( isset($facebook_link) ): ?>
              <a href="<?php echo esc_url($facebook_link); ?>">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            <?php endif; ?>

            <?php if (isset($twitter_link)): ?>
              <a href="<?php echo esc_url($twitter_link);?>">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            <?php endif; ?>

            <?php if (isset($instagram_link)): ?>
              <a href="<?php echo esc_url($instagram_link);?>">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            <?php endif; ?>

            <?php if (isset($youtube_link)): ?>
              <a href="<?php echo esc_url($youtube_link); ?>">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
            <?php endif; ?>

            <?php if (isset($snap_link)): ?>
              <a href="<?php echo esc_url($snap_link); ?>">
                <i class="fa fa-snapchat" aria-hidden="true"></i>
              </a>
            <?php endif; ?>

            <?php if (isset($whatsapp_link)): ?>
              <a href="<?php echo esc_url($whatsapp_link); ?>">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
            <?php endif; ?>

            <?php if (isset($linkedin_link)): ?>
              <a href="<?php echo esc_url($linkedin_link); ?>">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            <?php endif; ?>




          </div>
          <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>

        <div class="icono-menu-responsive">
          <i id="iconoAbrirMenu" class="fa fa-bars" aria-hidden="true"></i>
        </div>
      </div> <!-- /menu-bar -->

    </header> <!-- /Header -->


<section class="main">
