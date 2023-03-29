<?php
function planteContacter_shortcode() {
   ob_start();?>

<img class="planteContacter" src="/wp-content/uploads/2023/03/Group-16.png" alt="Une plante">

<?php
   return ob_get_clean();   
} 
add_shortcode( 'plantecontacter', 'planteContacter_shortcode' );