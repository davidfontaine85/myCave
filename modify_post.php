<?php 
    require 'inc/connect.php';
    

    if(isset ($_POST['update'])) {                     
        
        $winename_bottle = strip_tags(strtoupper($_POST['winename']));
        $year_bottle = $_POST['year'];
        $grapes_bottle = strip_tags(ucfirst($_POST['grapes']));
        $country_bottle = strip_tags(ucfirst($_POST['country']));
        $region_bottle = strip_tags(ucfirst($_POST['region']));
        $description_bottle = strip_tags(strtolower($_POST['description']));
        $id_bottle = $_POST['id_bottle'];
        
        if(isset($_FILES['picture'])){
            
            $target_dir = 'img/';
            $target_file = $target_dir.basename($_FILES['picture']['name']);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES['picture']['tmp_name']);
            
            if(file_exists($target_file)){
                
                $message ='Ce fichier est déja sur le site, Bouteille mise à jour.';
                unlink($target_file);
                global $db;
                $picture_bottle = $_FILES['picture']['name'];
                $sqlWithoutPic = $db->prepare("UPDATE bottle SET winename=:winename, year=:year, grapes=:grapes, country=:country, region=:region, description=:description, picture=:picture WHERE id='$id_bottle' LIMIT 1");
                $sqlWithoutPic->execute(array(
                    'winename' => $winename_bottle,
                    'year' => $year_bottle,
                    'grapes' => $grapes_bottle,
                    'country' => $country_bottle,
                    'region' => $region_bottle,
                    'description' => $description_bottle,
                    'picture' => $picture_bottle
                ));
                move_uploaded_file($_FILES['picture']['tmp_name'], $target_file);
                header('Location: admin.php');

            }elseif($check !== false || $_FILES['picture']['size']>500000 || ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png")){
                
                global $db;
                $picture_bottle = $_FILES['picture']['name'];
                $sqlupdate = $db->prepare(" UPDATE bottle SET winename=:winename, year=:year, grapes=:grapes, country=:country, region=:region, description=:description, picture=:picture WHERE id='$id_bottle' LIMIT 1");
                $sqlupdate->execute(array(
                    'winename' => $winename_bottle,
                    'year' => $year_bottle,
                    'grapes' => $grapes_bottle,
                    'country' => $country_bottle,
                    'region' => $region_bottle,
                    'description' => $description_bottle,
                    'picture' => $picture_bottle
                ));
                move_uploaded_file($_FILES['picture']['tmp_name'], $target_file);
                $message = 'Votre bouteille a bien été mise à jour.';
                header('Location: admin.php');
            }else{
                $message ='ERROR';
            }
        }else{
            global $db;
                
                $sqlWithoutPic = $db->prepare("UPDATE bottle SET winename=:winename, year=:year, grapes=:grapes, country=:country, region=:region, description=:description WHERE id='$id_bottle' LIMIT 1");
                $sqlWithoutPic->execute(array(
                    'winename' => $winename_bottle,
                    'year' => $year_bottle,
                    'grapes' => $grapes_bottle,
                    'country' => $country_bottle,
                    'region' => $region_bottle,
                    'description' => $description_bottle
                ));
                $message = 'Bouteille mise à jour';
                header('Location: admin.php');
        }
    }
?>
<div class="modalUpdate">
    <p><?php echo $message; ?></p>
    <a href="admin.php"><p>× fermer</p></a>
</div>



