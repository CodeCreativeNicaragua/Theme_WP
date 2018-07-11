<?php
/**
archivos con el footer del tema del tema

@package Code2018
@subpackage Code2018
@since 1.0
*/

?>
<footer>

  <section class="footer-widgets">
        <div class="contenedor">

          <div class="contenedor-widget">
            <?php if (is_active_sidebar('footer-widget-izq')) {

              dynamic_sidebar('footer-widget-izq');

            }?>
          </div>

          <div class="contenedor-widget">
            <?php if (is_active_sidebar('footer-widget-centro')) {

              dynamic_sidebar('footer-widget-centro');

            }?>
          </div>

          <div class="contenedor-widget">
            <?php if (is_active_sidebar('footer-widget-der')) {

              dynamic_sidebar('footer-widget-der');

            }?>
          </div>


        </div>
      </section>
       <!-- /.footer-widgets -->

         <section class="bottom-footer">
           <div class="contenedor">
             <p>Proudly developed by <a href="codecreativenicaragua.com">Code Creative</a></p>
           </div>
         </section> <!-- /.bottom-footer -->

    </footer> <!-- /Footer -->


    <?php wp_footer(); ?>

  </body>
</html>
