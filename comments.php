<?php
/**
plantilla de comentarios

@package Code2018
@subpackage Code2018
@since 1.0
*/
?>



<?php if ( post_password_required() ): ?>
    <p><?php _e('Se necesita contraseña para visualizar este contenido','slan'); ?></p>
    <?php return; ?>
<?php endif; ?>

<div class="comments-container">

  <div id="comments">
    <?php if (get_comments_number() ): ?>
        <h3 class="comments-title">  <?php comments_number(__('Escribe el primer comentario','slan'),__('Solo hay 1 comentario, comentanos tu tambien ','slan'),__('Hay % comentarios se el proximo en dejarnos tu opinion','slan')); ?></h3>
        <ol id="comments-list">
          <?php wp_list_comments(); ?>
        </ol><!-- /#comments-list -->
    <?php endif; ?>
    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')): ?>

        <div class="navegacion-comentarios">
          <?php if (get_previous_comments_link()): ?>
            <div class="anterior">
              <?php previous_comments_link(__('<i class="fa fa-arrow-left" aria-hidden="true"></i> Comentarios antiguos','slan')); ?>
            </div>
          <?php endif; ?>

          <?php if (get_next_comments_link): ?>
              <div class="siguiente">
              <?php next_comments_link(__('Comentarios recientes <i class="fa fa-arrow-right" aria-hidden="true"></i>','slan')); ?>
            </div>
          <?php endif; ?>

        </div>
    <?php endif; ?>
    <?php comment_form(); ?>
  </div><!-- /#comments -->
</div>
