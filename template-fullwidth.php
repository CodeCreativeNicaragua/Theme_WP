<?php
/**



*Template name: Ancho completo

*plantilla de ancho completo

*plantilla similar a page.php pero cambiando la section class predeterminada por fullwidth

*@package Code2018
*@subpackage Code2018
*@since 1.0
*/
?>


<!-- Header -->
<?php get_header(); ?>

      <?php
        $options = get_theme_mod('code_settings');
        if ( !empty($options['banner']) ) {
          $banner = $options['banner'];
        }else {
          $banner = RutaImagenes . 'slide1.jpg';
        }

       ?>

      <?php if (have_posts() ): while ( have_posts() ): the_post(); ?>
  <!-- Banner -->
  <section class="banner-principal">

        <?php if ( has_post_thumbnail() ): ?>

        <?php $banner_article = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>

        <div class="banner" style="background-image: url('<?php echo $banner_article[0];?>');"></div>

        <?php else: ?>

        <div class="banner" style="background-image: url('<?php echo $banner; ?>');"></div>

        <?php endif; ?>

        <div class="overlay-banner"></div>
        <div class="texto-banner">
          <h3><?php the_title(); ?></h3>
        </div>

  </section> <!-- Banner -->

  <section class="fullwidth">
    <div class="contenedor">
        <article <?php post_class ('pagina'); ?> id="post-<?php the_ID();?>">
              <?php the_content(); ?>
        </article>	<!-- /.article -->
      <?php endwhile; endif; ?>
    </div>
  </section> <!-- /Blog -->


<?php get_footer(); ?>
</body>
</html>
