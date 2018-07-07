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

          <img src="<?php echo RutaImagenes; ?>/slide1.jpg" alt="">
          <img src="<?php echo RutaImagenes; ?>/slide2.jpg" alt="">
          <img src="<?php echo RutaImagenes; ?>/slide3.jpg" alt="">
          <img src="<?php echo RutaImagenes; ?>/slide4.jpg" alt="">
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

      <!-- About us -->
      <section class="blurbs bg-grey">
                <div class="contenedor">
                      <div class="contenido-seccion">
                            <div class="about">
                              <div class="titulo-about">
                                    <h1>Conococenos un poco</h1>
                              </div>
                                  <div class="titulo-destacado">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            . Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                            mollit anim id est laborum.
                                        </p>
                                        

                                        <p class="container-btn">
                                            <a  href="#" class="link-btn">Conocer más</a>
                                        </p>
                                  </div>
                            </div>

                            <div class="about">
                                  <img src="<?php echo RutaImagenes; ?>/slide1.jpg" alt="">
                            </div>

                      </div>

                </div>
      </section>
      <!-- End about us -->

      <?php require_once('includes/options-homepage.php') ?>

       <?php if ($show_blurbs_section == true): ?>

         <section class="blurbs" id="blurbs">
           <div class="contenedor">

             <?php if (isset( $blurbs_section_title) || isset($blurbs_section_subtitle) ): ?>
               <div class="titulo-seccion">

                 <?php if (isset($blurbs_section_title)): ?>

                   <h3><?php echo $blurbs_section_title; ?></h3>

                 <?php endif; ?>

                 <?php if (isset($blurbs_section_subtitle)): ?>

                   <p><?php echo $blurbs_section_subtitle; ?></p>

                 <?php endif; ?>

               </div>
             <?php endif; ?>


             <div class="contenido-seccion">

               <article class="blurb">
                 <div class="imagen">
                   <img src="<?php echo $first_bluerb_image;?>" alt="">
                 </div>
                 <div class="texto">
                   <h4><?php echo $first_bluerb_title; ?></h4>
                   <p><?php echo $first_bluerb_text; ?></p>
                 </div>
               </article>

               <article class="blurb">
                 <div class="imagen">
                   <img src="<?php echo $second_bluerb_image;?>" alt="">
                 </div>
                 <div class="texto">
                   <h4><?php echo$second_bluerb_title; ?></h4>
                   <p><?php echo$second_bluerb_text; ?></p>
                 </div>
               </article>

               <article class="blurb">
                 <div class="imagen">
                   <img src="<?php echo $third_bluerb_image;?>" alt="">
                 </div>
                 <div class="texto">
                   <h4><?php echo $third_bluerb_title; ?></h4>
                   <p><?php echo $third_bluerb_text; ?></p>
                 </div>
               </article>

             </div>  <!-- /Contenido sección -->
           </div>
         </section> <!-- /Blurbs -->
       <?php endif; ?>

       <section class="blurbs bg-grey">
                <div class="contenedor">
                      <div class="titulo-seccion">
                            <h3>Nuestros trabajos</h3>
                            <p>realizamos los mejores trabajos para hacer crecer su empresa</p>
                      </div>

                      <div class="contenido-seccion">
                            <div class="project ">
                              <img src="<?php echo $first_bluerb_image;?>" alt="">
                              <div class="overlay"></div>
                              <div class="porfolio-content">
                                  <span>Proyecto 1</span>
                                  <h1>Plantas medicinales</h1>
                                  <div class="porfolio-link">
                                        <a href="#"><i class="fa fa-external-link"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>

                            <div class="project ">
                              <img src="<?php echo $first_bluerb_image;?>" alt="">
                              <div class="overlay"></div>
                              <div class="porfolio-content">
                                  <span>Proyecto 1</span>
                                  <h1>Plantas medicinales</h1>
                                  <div class="porfolio-link">
                                        <a href="#"><i class="fa fa-external-link"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>

                            <div class="project ">
                              <img src="<?php echo $first_bluerb_image;?>" alt="">
                              <div class="overlay"></div>
                              <div class="porfolio-content">
                                  <span>Proyecto 1</span>
                                  <h1>Plantas medicinales</h1>
                                  <div class="porfolio-link">
                                        <a href="#"><i class="fa fa-external-link"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>
                      </div>

                </div>
       </section>

       <?php if ($show_last_post_section == true): ?>
         <section class="ultimos-articulos">
           <div class="contenedor">
             <?php if (isset( $last_post_section_tittle) || isset($last_post_section_subtittle) ): ?>
               <div class="titulo-seccion">

                 <?php if (isset($last_post_section_tittle)): ?>

                   <h3><?php echo $last_post_section_tittle; ?></h3>

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


      <?php get_footer(); ?>

  </body>
</html>
