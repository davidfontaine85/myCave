<?php 
    require 'inc/connect.php';

    $message = 'Modifier les informations.';
    $id_bottle = $_POST['id'];
    $sqlselect = "SELECT * FROM bottle WHERE id=$id_bottle";
    $stmt = $db->query($sqlselect);
    $row = $stmt->fetch();
    
    $winename_bottle = $row['winename'];
    $year_bottle = $row['year'];
    $country_bottle = $row['country'];
    $region_bottle = $row['region'];
    $description_bottle = $row['description'];
    $img_bottle = $row['picture'];

    
?>

<form action="modify_post.php" method="post" enctype="multipart/form-data">
    <a href="#" class="cancel"><div class="canceldiv"><p>×</p></div></a>
    <h3><?php echo $message; ?></h3>
    
    
    <label for="winame">Nom du Vin</label>
    <input type="text" name="winename" id="winename" value="<?php echo $row['winename'];  ?>">
    
    <label for="year">Année</label>
    <input type="number" name="year" id="year" value="<?php echo $row['year']; ?>">
    
    <label for="grapes">Type de raisin</label>
    <input type="text" name="grapes" id="grapes" value="<?php echo $row['grapes']; ?>">

    <label for="country">Pays</label>
    <input type="text" name="country" id="country" value="<?php echo $row['country']; ?>">
    
    <label for="region">Region</label>
    <input type="text" name="region" id="region" value="<?php echo $row['region']; ?>">
    
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="5" ><?php echo $row['description']; ?></textarea>
    
    <div class="fakeImg">
        <label class="fakeImgBtn" for="fakeimg">Modifier</label>
        <input class="fakeImgInput" type="text" name="fakeimg" id="fakeimg" value="<?php echo $row['picture']; ?>">
    </div>

    <div class="inputFile"></div>

    <div class="confirm">
        <input type="hidden" class="hidden"  name="id_bottle" value="<?php echo $id_bottle; ?>">
        <input type="submit"  name="update" value="✓">
    </div>
</form>