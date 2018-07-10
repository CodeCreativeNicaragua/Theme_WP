<?php
/**
archivos con el sidebar del tema

@package Code2018
@subpackage Code2018
@since 1.0
*/

?>
<aside class="sidebar-principal">
<div class="sticky">

  <?php if ( is_single() ): ?>
    <div class="widget article-header">
    <p class="article-author"><i class="fa fa-user" aria-hidden="true"></i> <?php _e('Autor: ','slan') ?><?php the_author_posts_link(); ?></p>
    <p class="article-date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time(get_option('date_format')); ?></p>
    <p class="article-category"><i class="fa fa-list-ul" aria-hidden="true"></i> <?php the_category(','); ?></p>
    <?php if (has_tag()): ?>
      <p class="article-tags"><i class="fa fa-tags" aria-hidden="true"></i> <?php the_tags('',', ',''); ?></p>
    <?php endif; ?>

    <?php if ( comments_open() || get_comments_number() ): ?>
      <p class="article-comments-count">
        <i class="fa fa-comments-o" aria-hidden="true"></i>
        <a href="<?php comments_link();?>">
          <?php comments_number(__('Escribe el primer comentario','slan'),__('Solo hay 1 comentario, comentanos tu tambien ','slan'),__('Hay % comentarios se el proximo en dejarnos tu opinion','slan')); ?>
        </a>
      </p>
    <?php endif; ?>

  </div><!-- /article-header -->
  <?php endif; ?>
  <div class="sticky">
  <?php if (is_active_sidebar('main-sidebar')) {

    dynamic_sidebar('main-sidebar');

  } else { ?>
  <div class="widget">
    <?php get_search_form();?>
  </div>
  <?php } ?>
</div>

</div>
</aside> <!-- /sidebar-principal -->
