<?php
function banner_shortcode() {
   ob_start();?>

<div class=banner-container>
    <div class="plante">
        <img src="/wp-content/uploads/2023/02/Group-4.png" class="plante-droite animated slideInLeft" alt="plante droite">
        <img src="/wp-content/uploads/2023/02/Group-3.png" class="plante-gauche animated slideInRight" alt="plante gauche">
    </div>
    <img src="/wp-content/uploads/2023/02/Planty6-1.png" class="canette animated slideInDown" alt="canette">
</div>
<?php
   return ob_get_clean();   
} 
add_shortcode( 'banner', 'banner_shortcode' );

















?>