<?php
function form_shortcode() {
   ob_start();?>

<fieldset>
</fieldset>
<fieldset>
    <form method="post" action="#">
        <label for="name">Nom</label>
        <input type="text" name="name" id="">
        <label for="email">E-mail</label>
        <input type="mail" name="email" id="">
        <label for="message">Message</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Envoyer">
    </form>
</fieldset>
<fieldset>
    <form method="post" action="#">
        <label for="name">Nom</label>
        <input type="text" name="name" id="">
        <label for="email">E-mail</label>
        <input type="mail" name="email" id="">
        <label for="message">Message</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Envoyer">
    </form>
</fieldset>

<?php
   return ob_get_clean();   
} 
add_shortcode( 'form', 'banner_shortcode' );