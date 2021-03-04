<?php 
    
    if(empty($_SESSION)){
        $message = '';
    }else{
        $message = 'Bienvenu '.$_SESSION['user_id'] ;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Cave</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Parisienne|Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <a href="index.php"><img src="img/logo.png" alt="" id="logo"></a>
                <img id="blackbottle" src="./img/Wine_bottle2.png" alt="">
                <h1>Bienvenue sur My Cave</h1>
                <div class="bottom">
                    <h2><?php echo $message; ?></h2>
                    <div class="userEntrance">
                        <?php 
                        if(empty($_SESSION)) {
                            ?>
                            <a href="login.php" class="icondoor"><i class="far fa-user fa-3x"></i></a>
                            <div class="newaccount">
                                <a href="createAccount.php"><p>Nouveau compte</p></a>
                            </div>
                            <?php
                        }else{
                            ?>
                            <a href="index.php" class="logout"><i class="fas fa-sign-out-alt fa-3x"></i></a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
