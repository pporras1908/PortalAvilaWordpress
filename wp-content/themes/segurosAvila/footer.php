 <footer class="footer text-footer">
     <div class="row">
         <div class="col-sm-12">
         <br>
             <p>
                 C.A. DE SEGUROS ÁVILA<br>
                 RIF J-00034021-8<br>
                 Inscrita en la Superintendencia de la Actividad Aseguradora Bajo el Nº 1<br>
             </p>
         </div>
         <div class="social">
             <a href="https://www.instagram.com/segurosavila/"> <i class="fa fa-instagram"></i></a>
             <a href="https://twitter.com/segurosavilaca?lang=es"> <i class="fa fa-twitter"></i></a>
         </div>
         <div class="col-sm-12">
             <p><br>
                 Diseñado por<br> <a href="http://pfcevolution.com/"> <img
                     src=" <?php echo esc_url( home_url( 'wp-content/themes/segurosAvila/images/logopfcIcono.png' ) ); ?>"
                     alt=""> </a>  <br>
             </p>
         </div>
         <div>
             <ul class="footer-nav">
                 <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
             </ul>
         </div>

 </footer>
 <?php wp_footer(); ?>
 </body>

 </html>