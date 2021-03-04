<?php 
    require 'inc/connect.php';
    include 'inc/header.php';
    global $db;
    
    
    
    function addNewUser() {
        
        global $db;
        $pseudo = strip_tags($_POST['pseudonym']);
        $password = strip_tags(password_hash($_POST['password'], PASSWORD_DEFAULT));
        $lastname = strip_tags($_POST['lastname']);
        $firstname = strip_tags($_POST['firstname']);
        $mail = strip_tags($_POST['mail']);
        $phone = strip_tags($_POST['phone']);
        
        $res = $db->prepare("INSERT INTO user (lastname, firstname, pseudonym, password, mail, phone) VALUES ('$lastname', '$firstname', '$pseudo', '$password', '$mail', '$phone')");
        $res->bindParam(':lastname', $lastname);
        $res->bindParam('firstname', $firstname);
        $res->bindParam('pseudonym', $pseudo);
        $res->bindParam('password', $password);
        $res->bindParam('mail', $mail);
        $res->bindParam('phone', $phone);

        $res->execute();
        header('Location: login.php');
    }
    
    addNewUser();
?>
    <div class="container">
        <div class="row"><p class="registerOk">Votre Compte a bien été enregistré.</p></div>
    </div>


<?php include 'inc/footer.php'; ?>