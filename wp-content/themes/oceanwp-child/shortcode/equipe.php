<?php
function equipe_shortcode() {
   ob_start();?>

<section class="equipe">
    <h2>L'équipe</h2>
    <div class="card-container">
        <div class="card">
            <img src="/wp-content/uploads/2023/03/Mask-group-2.png" alt="Mégane">
            <h3>Mégane</h3>
            <p>CEO</p>
        </div>
        <div class="card">
            <img src="/wp-content/uploads/2023/03/Mask-group-1.png" alt="Brooke">
            <h3>Brooke</h3>
            <p>Nutritionniste</p>
        </div>
        <div class="card">
            <img src="/wp-content/uploads/2023/03/Mask-group.png" alt="Sylvie">
            <h3>Sylvie</h3>
            <p>mixologue</p>
        </div>
    </div>
</section>

<?php
   return ob_get_clean();   
} 
add_shortcode( 'equipe', 'equipe_shortcode' );