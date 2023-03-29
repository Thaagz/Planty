<?php

function commande_shorcode() {
   ob_start();
   $id =FORM_ID;
   $img_1 = get_field("image_produit_1", $id);
   $img_2 = get_field("image_produit_2", $id);
   $img_3 = get_field("image_produit_3", $id);
   $img_4 = get_field("image_produit_4", $id);
   $order_title = get_field("titre_commande", $id);

?>

 <h2 class="order-title"><?php dv($order_title) ?></h2>
 <div class="commande-container">
    <div class="produit">
        <div class="img-text-container"> 
            <?php dv($img_1) ?>
            <p>FRAISE</p>
        </div>
        
        <!-- Input, boutons et submit wrapper -->
        <div style="display: flex; align-items: center; width: 100%; justify-content: space-between; margin-top: 16px;">
        <!-- Input et boutons + / - wrapper -->
        <div style="position: relative; display: flex;">
            <input type="number" name="" style="width: 51px; height: 60px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: solid 1px #eee;">
            <div style="display: flex; flex-direction: column;">
                <div style="background-color: #e8a9a9; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 12px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-top-right-radius: 6px;">+</div>
                <div style="background-color: #e8a9a9; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 16px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-bottom-right-radius: 6px;">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input type="submit" value="ok" style="background-color: #e8a9a9; border-radius: 6px; width: 100px; height: 60px; margin-left: 4px; border: none; color: #fff; font-weight: bold;">
        </div>

    </div>
    <div class="produit">
        <div class="img-text-container">
            <?php dv($img_2) ?>
            <p>PAMPLE<br/>MOUSSE</p>
        </div>

        <!-- Input, boutons et submit wrapper -->
        <div style="display: flex; align-items: center; width: 100%; justify-content: space-between; margin-top: 16px;">
        <!-- Input et boutons + / - wrapper -->
        <div style="position: relative; display: flex;">
            <input type="number" name="" style="width: 51px; height: 60px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: solid 1px #eee;">
            <div style="display: flex; flex-direction: column;">
                <div style="background-color: #e8a9a9; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 12px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-top-right-radius: 6px;">+</div>
                <div style="background-color: #e8a9a9; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 16px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-bottom-right-radius: 6px;">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input type="submit" value="ok" style="background-color: #e8a9a9; border-radius: 6px; width: 100px; height: 60px; margin-left: 4px; border: none; color: #fff; font-weight: bold;">
        </div>

    </div>
    <div class="produit">
        <div class="img-text-container">
            <?php dv($img_3) ?>
            <p>FRAM<br/>BOISE</p>
        </div>  

    <!-- Input, boutons et submit wrapper -->
    <div style="display: flex; align-items: center; width: 100%; justify-content: space-between; margin-top: 16px;">
        <!-- Input et boutons + / - wrapper -->
        <div style="position: relative; display: flex;">
            <input type="number" name="" style="width: 51px; height: 60px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: solid 1px #eee;">
            <div style="display: flex; flex-direction: column;">
                <div style="background-color: #e8a9a9; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 12px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-top-right-radius: 6px;">+</div>
                <div style="background-color: #e8a9a9; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 16px; color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-bottom-right-radius: 6px;">-</div>
            </div>
        </div>
        <!-- Submit -->
        <input type="submit" value="ok" style="background-color: #e8a9a9; border-radius: 6px; width: 100px; height: 60px; margin-left: 4px; border: none; color: #fff; font-weight: bold;">
    </div>
    
    </div>
    <div class="produit">
        <div class="img-text-container">
            <?php dv($img_4) ?>
            <p>CITRON</p>
        </div>

        <!-- Input, boutons et submit wrapper -->
        <div style="display: flex; align-items: center; width: 100%; justify-content: space-between; margin-top: 16px;">
            <!-- Input et boutons + / - wrapper -->
            <div style="position: relative; display: flex;">
                <input type="number" name="" style="width: 51px; height: 60px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; border: solid 1px #eee;">
                <div style="display: flex; flex-direction: column;">
                    <div style="background-color: #e8a9a9; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 12px;  color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-top-right-radius: 6px;">+</div>
                    <div style="background-color: #e8a9a9; width: 36px; height: 50%; display: flex; justify-content: center; align-items: center; font-size: 16px;  color: #fff; font-weight: bold; border: solid 1px rgba(255,255,255,0.9); border-bottom-right-radius: 6px;">-</div>
                </div>
            </div>
            <!-- Submit -->
            <input type="submit" value="ok" style="background-color: #e8a9a9; border-radius: 6px; width: 100px; height: 60px; margin-left: 4px; border: none; color:    #fff; font-weight: bold;">
        </div>

    </div>
</div>
<div class="informations-Livraison">
    <div class="informations">
        <h2 class="order-title">Vos informations</h2>
        <form action="">
            <label for="nom"><?= get_field("titre_commande", $id) ?></label>
            <input type="text" name="nom" required>
            <label for="prenom"><?= get_field("titre_commande", $id) ?></label>
            <input type="text" name="prenom" required>
            <label for="email"><?= get_field("titre_commande", $id) ?></label>
            <input type="mail" name="email" required>
        </form>
    </div>
    <div class="livraison">
            <h2 class="order-title">Livraison</h2>
            <form action="">
                <label for="adresse"><?= get_field("titre_commande", $id) ?></label>
                <input type="text" name="adresse" required>
                <label for="code-postal"><?= get_field("code_postal", $id) ?></label>
                <input type="text" name="code-postal" required>
                <label for="ville"><?= get_field("ville", $id) ?></label>
                <input type="text" name="ville" required>
            </form>
    </div>
</div>
<input type="submit">

<?php
   return ob_get_clean();   
} 
add_shortcode( 'commande', 'commande_shorcode' );