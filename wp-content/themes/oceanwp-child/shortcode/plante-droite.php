<?php
function planteDroite_shortcode() {
   ob_start();?>

<img class="planteDroite" src="/wp-content/uploads/2023/02/Group-4.png" alt="Une plante">

<?php
   return ob_get_clean();   
} 
add_shortcode( 'plantedroite', 'planteDroite_shortcode' );