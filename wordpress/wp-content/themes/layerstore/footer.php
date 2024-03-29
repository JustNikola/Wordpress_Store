<?php if( is_active_sidebar( 'maxstore-footer-area' ) ) { ?>  				
  <div id="content-footer-section" class="row clearfix">    				
    <?php
      // Calling the header sidebar if it exists.
      dynamic_sidebar( 'maxstore-footer-area' );
    ?>  				
  </div>		
<?php } ?>         
<footer id="colophon" class="rsrc-footer" role="contentinfo">                
  <div class="row rsrc-author-credits">                    
    <p>                      
      <div class="text-center">
        <?php printf(__('Copyright &copy; %1$s | %2$s designed by Themes4WP', 'layerstore'), date("Y"), '<a href="' . esc_url('https://themes4wp.com/theme/layerstore') . '" title="' . __( 'Free WooCommerce WordPress Theme', 'layerstore' ) . '">' . __( 'LayerStore', 'layerstore' ) . '</a>'); ?>
      </div>                    
    </p>                
  </div>    
</footer>
<div id="back-top">  
  <a href="#top">
    <span></span>
  </a>
</div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>