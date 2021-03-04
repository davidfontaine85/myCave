<?php 

    require 'inc/connect.php';

    $message ='Nouvelle bouteille ajoutée';

    
    if(empty($_POST)){
        $message ='Erreur de création';
        echo $message;
        //header('Location : addBottle.php');
    }else{

        $winename_bottle = strip_tags(strtoupper($_POST['winename']));
        $year_bottle = ($_POST['year']);
        $grapes_bottle = strip_tags(ucfirst($_POST['grapes']));
        $country_bottle = strip_tags(ucfirst($_POST['country']));
        $region_bottle = strip_tags(ucfirst($_POST['region']));
        $description_bottle = strip_tags(strtolower($_POST['description']));
        
        if(isset($_FILES)){

            $target_dir = 'img/';
            $target_file = $target_dir.basename($_FILES['picture']['name']);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES['picture']['tmp_name']);

            if($check !== false || $_FILES['picture']['size']>500000 || ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") ) {
                
                global $db;
                $picture_bottle = $_FILES['picture']['name'] ;

                $sqladd = $db->prepare("INSERT INTO bottle(winename, year, grapes, country, region, description, picture) VALUES (:winename, :year, :grapes, :country, :region, :description, :picture)");
                $sqladd->execute(array(
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
            }else{
                
                $message = 'Le Fichier que vous avez uploadé ne convient pas ';
                echo $message;
            }
        }else{

            $message = 'Vous avez oublier l\'image correspondante';
            echo $message;
        }
    }

?>