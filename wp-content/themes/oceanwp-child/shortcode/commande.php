<?php

function commande_shorcode() {
   ob_start();
   $id =FORM_ID;
   $img_1 = get_field("image_produit_1", $id);
   $img_2 = get_field("image_produit_2", $id);
   $img_3 = get_field("image_produit_3", $id);
   $img_4 = get_field("image_produit_4", $id);

   $order_title = get_field("titre_commande", $id);

   $info_title = get_field("info_title", $id);
   $info_1 = get_field("nom", $id);
   $info_2 = get_field("prenom", $id);
   $info_3 = get_field("e-mail", $id);

   $delivery_title = get_field("titre_livraison", $id);
   $delivery_1 = get_field("adresse_de_livraison", $id);
   $delivery_2 = get_field("code_postal", $id);
   $delivery_3 = get_field("ville", $id);

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

<form method="post" action="">
     <h2 class="form-title"><?php dv($order_title) ?></h2>
     <div class="commande-container">
        <div class="produit">
        <div class="img-text-container"> 
            <?php dv($img_1) ?>
            <p>FRAISE</p>
        </div>
        
        <!-- Input, boutons et submit wrapper -->
        <div style="display: flex; align-items: center; width: 100%; justify-content: space-between; margin-top: 14px;">
        <!-- Input et boutons + / - wrapper -->
        <div style="position: relative; display: flex;">
            <input type="number" name="fraise" style="width: 51px; height: 55px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: solid 1px #eee;">
            <div style="display: flex; flex-direction: column;">
                <div style="background-color: #DC9F96; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 12px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-top-right-radius: 6px;">+</div>
                <div style="background-color: #DC9F96; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 16px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-bottom-right-radius: 6px;">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input name="fraise" type="submit" value="ok" style="background-color: #e8a9a9; border-radius: 6px; width: 100px; height: 55px; margin-left: 4px; border: none; color: #fff; font-weight: bold;">
        </div>

        </div>
        <div class="produit">
        <div class="img-text-container">
            <?php dv($img_2) ?>
            <p>PAMPLE<br/>MOUSSE</p>
        </div>

        <!-- Input, boutons et submit wrapper -->
        <div style="display: flex; align-items: center; width: 100%; justify-content: space-between; margin-top: 14px;">
        <!-- Input et boutons + / - wrapper -->
        <div style="position: relative; display: flex;">
            <input name="pamplemousse" type="number" name="" style="width: 51px; height: 55px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: solid 1px #eee;">
            <div style="display: flex; flex-direction: column;">
                <div style="background-color: #DC9F96; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 12px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-top-right-radius: 6px;">+</div>
                <div style="background-color: #DC9F96; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 16px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-bottom-right-radius: 6px;">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input type="submit" value="ok" style="background-color: #e8a9a9; border-radius: 6px; width: 100px; height: 55px; margin-left: 4px; border: none; color: #fff; font-weight: bold;">
        </div>

        </div>
        <div class="produit">
        <div class="img-text-container">
            <?php dv($img_3) ?>
            <p>FRAM<br/>BOISE</p>
        </div>  

        <!-- Input, boutons et submit wrapper -->
        <div style="display: flex; align-items: center; width: 100%; justify-content: space-between; margin-top: 14px;">
        <!-- Input et boutons + / - wrapper -->
        <div style="position: relative; display: flex;">
            <input  name="framboise"  type="number" name="" style="width: 51px; height: 55px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: solid 1px #eee;">
            <div style="display: flex; flex-direction: column;">
                <div style="background-color: #DC9F96; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 12px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-top-right-radius: 6px;">+</div>
                <div style="background-color: #DC9F96; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 16px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-bottom-right-radius: 6px;">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input type="submit" value="ok" style="background-color: #e8a9a9; border-radius: 6px; width: 100px; height: 55px; margin-left: 4px; border: none; color: #fff; font-weight: bold;">
        </div>
    
        </div>
        <div class="produit">
        <div class="img-text-container">
            <?php dv($img_4) ?>
            <p>CITRON</p>
        </div>

        <!-- Input, boutons et submit wrapper -->
        <div style="display: flex; align-items: center; width: 100%; justify-content: space-between; margin-top: 14px;">
            <!-- Input et boutons + / - wrapper -->
            <div style="position: relative; display: flex;">
                <input  name="citron"  type="number" name="" style="width: 51px; height: 55px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: solid 1px #eee;">
                <div style="display: flex; flex-direction: column;">
                    <div style="background-color: #DC9F96; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 12px;  color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-top-right-radius: 6px;">+</div>
                    <div style="background-color: #DC9F96; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 16px;  color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-bottom-right-radius: 6px;">-</div>
                </div>
            </div>
            <!-- Submit -->
            <input type="submit" value="ok" style="background-color: #e8a9a9; border-radius: 6px; width: 100px; height: 55px; margin-left: 4px; border: none; color:    #fff; font-weight: bold;">
        </div>

        </div>
    </div>
    <div class="informations-Livraison">
        <div class="informations">
        <h2 class="form-title"><?php dv($info_title) ?></h2>
            <label for="nom"><?php dv($info_1) ?></label>
            <input type="text" name="nom" required>

            <label for="prenom"><?php dv($info_2) ?></label>
            <input type="text" name="prenom" required>
            
            <label for="email"><?php dv($info_3) ?></label>
            <input type="mail" name="email" required>
        </div>
        <div class="livraison">
            <h2 class="form-title"><?php dv($delivery_title) ?></h2>
                <label for="adresse"><?php dv($delivery_1) ?></label>
                <input type="text" name="adresse" required>

                <label for="code-postal"><?= dv($delivery_2) ?></label>
                <input type="text" name="code_postal" required>

                <label for="ville"><?= dv($delivery_3) ?></label>
                <input type="text" name="ville" required>
        </div>
    </div>
    <input class="order_button" type="submit">
</form>

<?php
}
   return ob_get_clean();   
} 
add_shortcode( 'commande', 'commande_shorcode' );