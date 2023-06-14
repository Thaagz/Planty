<?php

function commande_shorcode() {
    ob_start();
    $id =FORM_ID;
    $img_1 = get_field("image_produit_1", $id);
    $img_2 = get_field("image_produit_2", $id);
    $img_3 = get_field("image_produit_3", $id);
    $img_4 = get_field("image_produit_4", $id);

    $img1_text = get_field("texte_produit_1", $id);
    $img2_text = get_field("texte_produit_2", $id);
    $img3_text = get_field("texte_produit_3", $id);
    $img4_text = get_field("texte_produit_4", $id);

    $order_title = get_field("titre_commande", $id);

    $info_title = get_field("info_title", $id);
    $info_1 = get_field("nom", $id);
    $info_2 = get_field("prenom", $id);
    $info_3 = get_field("e-mail", $id);

    $delivery_title = get_field("titre_livraison", $id);
    $delivery_1 = get_field("adresse_de_livraison", $id);
    $delivery_2 = get_field("code_postal", $id);
    $delivery_3 = get_field("ville", $id);

    $submit = get_field("commander", $id);

   if(!empty($_POST)) {

//    get form data
$result = createOrder($_POST);

if ($result) { echo '
    <div class="order-confirmation">
        <p>Félicitation !</p>
        <p>Votre commande a bien été enregistrée.</p>
        <img src="/wp-content/uploads/2023/02/Picto-1.png" alt="logo de planty">
        <p>Planty vous remercie de votre confiance</p>
    </div>';}
else {echo '
    <div class="order-confirmation">
        <p>Félicitation !</p>
        <p>Vous avez reussis a avoir se message d\'erreur je ne sais pas comment vous avez fait ! votre commande n\'a pas été enregistré.</p>
        <img src="/wp-content/uploads/2023/02/Picto-1.png" alt="logo de planty">
        <p>Planty vous remercie de votre confiance</p>
    </div>';}
}
else {
?>

<form method="post" action="/commande" class="order-form">
    <h2 class="form-title order"><?php dv($order_title) ?></h2>
    <div class="commande-container">
        <div class="produit">
        <div class="img-text-container"> 
            <?php dv($img_1) ?>
            <p><?php dv($img1_text) ?></p>
        </div>
        
        <!-- Input, boutons et submit wrapper -->
        <div class="all-button-container">
        <!-- Input et boutons + / - wrapper -->
        <div class="number-plus-minus-container">
            <input type="number" name="fraise" class="number">
            <div class="plus-minus-container">
                <div class="plus">+</div>
                <div class="minus">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input name="fraise" type="submit" value="ok" class="number-submit">
        </div>

        </div>
        <div class="produit">
        <div class="img-text-container">
            <?php dv($img_2) ?>
            <p><?php dv($img2_text) ?></p>
        </div>

        <!-- Input, boutons et submit wrapper -->
        <div class="all-button-container">
        <!-- Input et boutons + / - wrapper -->
        <div class="number-plus-minus-container">
            <input name="pamplemousse" type="number" class="number">
            <div class="plus-minus-container">
                <div class="plus">+</div>
                <div class="minus">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input type="submit" value="ok" class="number-submit">
        </div>

        </div>
        <div class="produit">
        <div class="img-text-container">
            <?php dv($img_3) ?>
            <p><?php dv($img3_text) ?></p>
        </div>  

        <!-- Input, boutons et submit wrapper -->
        <div class="all-button-container">
        <!-- Input et boutons + / - wrapper -->
        <div class="number-plus-minus-container">
            <input  name="framboise"  type="number" class="number">
            <div class="plus-minus-container">
                <div class="plus">+</div>
                <div class="minus">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input type="submit" value="ok" class="number-submit">
        </div>
    
        </div>
        <div class="produit">
        <div class="img-text-container">
            <?php dv($img_4) ?>
            <p><?php dv($img4_text) ?></p>
        </div>

        <!-- Input, boutons et submit wrapper -->
        <div class="all-button-container">
            <!-- Input et boutons + / - wrapper -->
            <div class="number-plus-minus-container">
                <input  name="citron"  type="number" class="number">
                <div class="plus-minus-container">
                    <div class="plus">+</div>
                    <div class="minus">-</div>
                </div>
            </div>
            <!-- Submit -->
            <input type="submit" value="ok" class="number-submit">
        </div>

        </div>
    </div>
    <div class="bordure-horizontal">
    </div>
    <div class="informations-Livraison">
        <div class="informations">
        <h2 class="form-title"><?php dv($info_title) ?></h2>
            <label for="nom"><?php dv($info_1) ?></label>
            <input type="text" name="nom" id="nom" required>

            <label for="prenom"><?php dv($info_2) ?></label>
            <input type="text" name="prenom" id="prenom" required>
            
            <label for="email"><?php dv($info_3) ?></label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="bordure-vertical">
        </div>
        <div class="livraison">
            <h2 class="form-title"><?php dv($delivery_title) ?></h2>
                <label for="adresse"><?php dv($delivery_1) ?></label>
                <input type="text" name="adresse" id="adresse" required>

                <label for="code_postal"><?= dv($delivery_2) ?></label>
                <input type="text" name="code_postal" id="code_postal" required>

                <label for="ville"><?= dv($delivery_3) ?></label>
                <input type="text" name="ville" id="ville" required>
        </div>
    </div>
    <input class="order_button" type="submit" value="<?php dv($submit) ?>">
</form>

<?php
}
   return ob_get_clean();   
} 
add_shortcode( 'commande', 'commande_shorcode' );