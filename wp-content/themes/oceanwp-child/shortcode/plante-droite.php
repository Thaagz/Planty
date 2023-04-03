<?php
function planteDroite_shortcode() {
   ob_start();?>

<img class="planteDroite" src="/wp-content/uploads/2023/03/plantedroite.png" alt="Une plante">

<?php
   return ob_get_clean();   
} 
add_shortcode( 'plantedroite', 'planteDroite_shortcode' );