<?php
function form_shortcode() {
   ob_start();?>


<?php
   return ob_get_clean();   
} 
add_shortcode( 'form', 'banner_shortcode' );