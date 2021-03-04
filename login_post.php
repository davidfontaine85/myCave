<?php 
    require('inc/connect.php');
    
    $message = "Formulaire non soumis!";

    if(isset($_POST)) {
        global $db;
        $user_pseudonym = strip_tags($_POST['pseudonym']);
        $user_password = strip_tags($_POST['password']);
        if($res = $db->query("SELECT * FROM user WHERE pseudonym ='$user_pseudonym' LIMIT 1")) {
            while($row = $res->fetch()) {
                $bd_id = $row['id'];
                $bd_pseudonym = $row['pseudonym'];
                $bd_password = $row['password'];
            }
            
            if(password_verify($user_password, $bd_password) === TRUE ) {
                
                session_start();
                $_SESSION['user_id'] = $user_pseudonym;
                $_SESSION['user_password'] = $user_password;
                header('Location: admin.php');

            }else{

                $message = 'Mauvais mot de passe.';
                echo $message;
                header('Location: login.php');

            }
        }else{

            $message = 'Cet identifiant n\'existe pas.';
            echo $message;
            header('Location: login.php');

        }
    }else{

        echo $message;
        header('Location: login.php');
        
    }
?>

