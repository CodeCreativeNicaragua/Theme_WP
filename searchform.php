<?php
/**

formulario de busqueda dinamico
@package Code2018
@subpackage Code2018
@since 1.0
*/
?>
 <form class="" action=" <?php echo home_url(); ?>" method="get">
   <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" idplaceholder="Buscar">
   <button type="submit" name="enviar">
     <i class="fa fa-search" aria-hidden="true"></i>
   </button>
 </form>
