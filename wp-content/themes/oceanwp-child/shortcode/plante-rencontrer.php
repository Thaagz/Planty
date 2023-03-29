<?php
function planteRencontrer_shortcode() {
   ob_start();?>

<img class="planteRencontrer" src="/wp-content/uploads/2023/03/Group-2.png" alt="Une plante">

<?php
   return ob_get_clean();   
} 
add_shortcode( 'planterencontrer', 'planteRencontrer_shortcode' );