<?php
/**



*Template name: pagina de inicio

*plantilla pagina de inicio



*@package Code2018
**@subpackage Code2018
***@since 1.0
*/
?>
    <?php get_header(); ?>
      <?php require_once('includes/options-homepage.php') ?>
      <!-- Slider -->
      <section class="slider-principal">
        <div class="slider" id="slider">

          <?php $slides = new WP_Query(array(
            'post_type' => 'slides',
            'order' => 'ASC'

          )); ?>
          <?php if ($slides->have_posts() && $slides->post_count > 1 ): while ($slides->have_posts() ): $slides->the_post();?>
              <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full'); ?>
              <?php endif; ?>
          <?php endwhile; else: ?>

          <img src="<?php echo $first_slider_image; ?>" alt="">
          <img src="<?php echo $second_slider_image; ?>" alt="">
          <img src="<?php echo $third_slider_image; ?>" alt="">
          <img src="<?php echo $four_slider_image; ?>" alt="">
          <?php endif; ?>
        </div>
        <div class="overlay-slider"></div>
        <div class="texto-slider">
          <?php

            $Titulo_destacado = get_post_meta( $post->ID,'Titulo_destacado',true);
            $SubTitulo_destacado = get_post_meta( $post->ID,'SubTitulo_destacado',true);
            $Texto_del_boton_destacado = get_post_meta( $post->ID,'Texto_del_boton_destacado',true);
            $link_boton_destacado = get_post_meta( $post->ID,'link_boton_destacado',true);
            if (empty($Titulo_destacado)) {
              $Titulo_destacado = get_bloginfo('name');
            }
            if (empty($SubTitulo_destacado)) {
              $SubTitulo_destacado = get_bloginfo('description');
            }
            if (empty($Texto_del_boton_destacado)) {
              $Texto_del_boton_destacado = __('Ver mas','slan');
            }
                     ?>
          <h3><?php echo   $Titulo_destacado; ?></h3>
          <p><?php echo   $SubTitulo_destacado; ?></p>
          <?php if ( !empty($link_boton_destacado)):?>
          <a href="<?php echo esc_url($link_boton_destacado); ?>"><?php echo   $Texto_del_boton_destacado; ?></a>
        <?php endif; ?>
        </div>
      </section> <!-- Slider -->

      <?php if ($show_about_section == true): ?>
      <!-- About us -->
      <section class="blurbs bg-grey">
                <div class="contenedor">
                      <div class="contenido-seccion">
                            <div class="about">
                              <div class="titulo-about">
                                      <h1><?php echo $about_section_title; ?></h1>
                              </div>
                                  <div class="titulo-destacado">
                                      <p><?php echo $about_section_subtitle; ?></p>

                                            <?php if ( !empty($about_section_title_btn) && !empty($about_section_link_btn) ): ?>
                                              <p class="container-btn">
                                                  <a  href="<?php echo $about_section_link_btn; ?>" class="link-btn"><?php echo $about_section_title_btn; ?></a>
                                              </p>
                                            <?php endif;?>


                                  </div>
                            </div>

                            <div class="about">
                                  <img src="<?php echo $about_image; ?>" alt="">
                            </div>

                      </div>

                </div>
      </section>
      <!-- End about us -->
    <?php endif; ?>


    <?php if ($show_blurbs_section == true): ?>

         <section class="blurbs" id="blurbs">
           <div class="contenedor">

             <?php if (isset( $blurbs_section_title) || isset($blurbs_section_subtitle) ): ?>
               <div class="titulo-seccions">

                 <?php if (isset($blurbs_section_title)): ?>

                   <h1><?php echo $blurbs_section_title; ?></h1>

                 <?php endif; ?>

                 <?php if (isset($blurbs_section_subtitle)): ?>

                   <p><?php echo $blurbs_section_subtitle; ?></p>

                 <?php endif; ?>

               </div>
             <?php endif; ?>


             <div class="contenido-seccion">

               <article class="blurb">
                 <div class="imagen">
                   <a href="<?php echo $first_bluerb_link; ?>"><img src="<?php echo $first_bluerb_image;?>" alt=""></a>
                 </div>
                 <div class="texto">
                   <h4><?php echo $first_bluerb_title; ?></h4>
                   <p><?php echo $first_bluerb_text; ?></p>
                 </div>
               </article>

               <article class="blurb">
                 <div class="imagen">
                   <a href="<?php echo $second_bluerb_link; ?>"><img src="<?php echo $second_bluerb_image;?>" alt=""></a>
                 </div>
                 <div class="texto">
                   <h4><?php echo$second_bluerb_title; ?></h4>
                   <p><?php echo$second_bluerb_text; ?></p>
                 </div>
               </article>

               <article class="blurb">
                 <div class="imagen">
                   <a href="<?php echo $third_bluerb_link; ?>"><img src="<?php echo $third_bluerb_image;?>" alt=""></a>
                 </div>
                 <div class="texto">
                   <h4><?php echo $third_bluerb_title; ?></h4>
                   <p><?php echo $third_bluerb_text; ?></p>
                 </div>
               </article>
               <?php if (!empty($bluerb_link_btn) && !empty($bluerb_title_btn)): ?>
                 <p class="container-btn">
                     <a  href="<?php echo $bluerb_link_btn; ?>" class="link-btn"><?php echo $bluerb_title_btn ?></a>
                 </p>
               <?php endif; ?>

             </div>  <!-- /Contenido sección -->
           </div>
         </section> <!-- /Blurbs -->
       <?php endif; ?>

       <?php if ( $show_porfolio_section == true ): ?>

       <section class="blurbs bg-grey">
                <div class="contenedor">
                      <div class="titulo-seccions">
                            <h1><?php echo $porfolio_section_tittle; ?></h1>
                            <p><?php echo $porfolio_section_subtittle;?></p>
                      </div>

                      <div class="contenido-seccion">
                            <div class="project ">
                              <img src="<?php echo $porfolio_work_1;?>" alt="">
                              <div class="overlay"></div>
                              <div class="porfolio-content">
                                  <span><?php echo $porfolio_work_1_categoria;?></span>
                                  <h1><?php echo $porfolio_work_1_nombre;?></h1>
                                  <div class="porfolio-link">
                                        <a href="<?php echo $porfolio_work_1_link;?></h1>"><i class="fa fa-external-link"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>

                            <div class="project ">
                              <img src="<?php echo $porfolio_work_2;?>" alt="">
                              <div class="overlay"></div>
                              <div class="porfolio-content">
                                  <span><?php echo $porfolio_work_2_categoria;?></span>
                                  <h1><?php echo $porfolio_work_2_nombre;?></h1>
                                  <div class="porfolio-link">
                                        <a href="<?php echo $porfolio_work_2_link;?></h1>"><i class="fa fa-external-link"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>

                            <div class="project ">
                              <img src="<?php echo $porfolio_work_3;?>" alt="">
                              <div class="overlay"></div>
                              <div class="porfolio-content">
                                  <span><?php echo $porfolio_work_3_categoria;?></span>
                                  <h1><?php echo $porfolio_work_3_nombre;?></h1>
                                  <div class="porfolio-link">
                                        <a href="<?php echo $porfolio_work_3_link;?></h1>"><i class="fa fa-external-link"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>

                            <p class="container-btn">
                                <a  href="<?php echo $porfolio_btn_link; ?>" class="link-btn"><?php echo $porfolio_btn_text; ?></a>
                            </p>
                      </div>
                </div>
       </section>
       <?php endif; ?>

       <section class="llamada-accion">
                <div class="contenedor">
                      <div class="texto">
                            <p>Texto de llamado a la acción</p>
                      </div>

                      <div class="boton">
                            <a href="#">Contactar</a>
                      </div>
                </div>
       </section>

       <section class="sections">
                <div class="contenedor">
                      <div class="titulo-seccions">
                            <h1>Testimonios de nuestros clientes</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                      </div>

                      <div class="contenido-sections">

                      </div>
                      </div>
                </div>
       </section>

       <?php if ($show_last_post_section == true): ?>
         <section class="ultimos-articulos">
           <div class="contenedor">
             <?php if (isset( $last_post_section_tittle) || isset($last_post_section_subtittle) ): ?>
               <div class="titulo-seccions">

                 <?php if (isset($last_post_section_tittle)): ?>

                   <h1><?php echo $last_post_section_tittle; ?></h1>

                 <?php endif; ?>

                 <?php if (isset($last_post_section_subtittle)): ?>

                   <p><?php echo $last_post_section_subtittle; ?></p>

                 <?php endif; ?>

               </div>
             <?php endif; ?>
             <div class="contenedor-articulos">
               <?php $post_home = new WP_Query(array(
                 'post_type' => 'post',
                 'posts_per_page' => 3

               )); ?>


               <?php if ( $post_home-> have_posts() ): while ($post_home-> have_posts() ): $post_home->the_post(); ?>

                 <article class="article">
                   <?php if (has_post_thumbnail() ): ?>

                     <a href=" <?php the_permalink();?> ">
                       <?php the_post_thumbnail('blog-size-image'); ?>
                     </a>
                   <?php endif; ?>


                   <div class="article-content">
                     <div class="article-header">
                       <h2><a href="<?php the_permalink();?>"title="<?php the_title_attribute();?>"><?php the_title(); ?></a></h2>
                       <p class="article-date"><?php the_time(get_option('date_format')); ?></p>
                     </div><!-- /.blog-entry-header -->

                     <p><?php echo code_custom_excerpt(15); ?></p>

                     <p class="read-more-container"><a href="<?php the_permalink(); ?>" class="read-more-link"><?php _e('Leer más','slan') ?></a></p>
                   </div> <!-- /.article-content -->

                 </article>	<!-- /.article -->
               <?php endwhile; else: ?>
               <?php endif; ?>


             </div>

           </div>
         </section> <!-- /.ultimos-articulos -->
       <?php endif; ?>

       </section>

       <?php
           $options = get_theme_mod('code_settings');

           if (!empty($options['call_to_action_text'])) {
             $call_to_action_text = $options['call_to_action_text'];
           }

           if (!empty($options['call_to_action_text_btn_text'])) {
             $call_to_action_text_btn_text = $options['call_to_action_text_btn_text'];
           }

           if (!empty($options['call_to_action_text_btn_link'])) {
             $call_to_action_text_btn_link = $options['call_to_action_text_btn_link'];
           }

           if (!empty($options['code_botton_footer_text'])) {
             $code_botton_footer_text = $options['code_botton_footer_text'];
           }
        ?>

             <section class="llamada-accion">
               <div class="contenedor">
                 <?php if (isset($call_to_action_text)): ?>
                     <div class="texto">
                         <p><?php echo $call_to_action_text; ?></p>
                     </div>
                 <?php endif; ?>

                 <?php if (isset($call_to_action_text_btn_link)): ?>
                     <div class="boton">
                         <a href="<?php echo esc_url($call_to_action_text_btn_link); ?>"><?php echo $call_to_action_text_btn_text; ?></a>
                     </div>
                 <?php endif; ?>

               </div>

             </section> <!-- /.llamada-accion 2 -->



      <section class="sections">
                <div class="contenedor">
                      <div class="titulo-seccions">
                            <h1>Contacto</h1>
                            <p>lorem impusn</p>
                      </div>
                      <div class="contenido-sections">
                          <div class="about">
                                <div class="contact">
                                      <i class="fa fa-phone"></i>
                                      <p>(505) 87379055</p>
                                      <p>(505) 82724327</p>
                                </div>

                                <div class="contact">
                                      <i class="fa fa-envelope"></i>
                                      <p>example@correo.com</p>

                                </div>

                                <div class="contact">
                                      <i class="fa fa-map-marker"></i>
                                      <p>New York City. P 318 </p>

                                </div>
                          </div>

                          <div class="about">
                              <?php if ( is_active_sidebar('contact-widget')) {
                                      dynamic_sidebar('contact-widget');
                              } ?>
                          </div>
                      </div>
                </div>
      </section>

      <?php get_footer(); ?>
  </body>
</html>
