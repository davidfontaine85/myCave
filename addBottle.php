<?php 

    $message = 'Création d\'une nouvelle Bouteille.';





?>

<form action="addBottle_post.php" method="post" enctype="multipart/form-data">
    <a href="#" class="cancel"><div class="canceldiv"><p>×</p></div></a>
    <h3><?php echo $message; ?></h3>
    
    
    <label for="winame">Nom du Vin</label>
    <input type="text" name="winename" id="winename" placeholder="Entrez un nom de vin">
    
    <label for="year">Année</label>
    <input type="number" name="year" id="year" placeholder="Entrez le millésime">
    
    <label for="grapes">Type de Raisin</label>
    <input type="text" name="grapes" id="grapes" placeholder="Entrez le type de raisin">
    
    <label for="country">Pays</label>
    <input type="text" name="country" id="country" placeholder="Entrez le pays">
    
    <label for="region">Region</label>
    <input type="text" name="region" id="region" placeholder="Entrez la région">
    
    <label for="description">Description</label>
    <!-- <input type="text" name="description" id="description" value=""> -->
    <textarea name="description" id="description" cols="30" rows="5" placeholder="Description de la bouteille"></textarea>
    
    <input type="file" name="picture" id="picture" accept=".png, .jpg, .jpeg">

    <div class="confirm">
        <input type="hidden" class="hidden"  name="id_bottle" value="">
        <input type="submit"  name="update" value="✓">
    </div>
</form>
