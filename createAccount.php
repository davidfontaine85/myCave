<?php include 'inc/header.php'; ?>

<div class="container">

    <form action="createAccount_post.php" method="post" id="form_create">

        <label for="pseudonyme">Nouvel Identifiant</label>
        <input type="text" name="pseudonym" id="pseudonyme" >

        <label for="password">Nouveau Mot de Passe</label>
        <input type="text" name="password" id="password">

        <label for="lastname">Votre nom</label>
        <input type="text" name="lastname" id="lastname">

        <label for="firstname">Votre prénom</label>
        <input type="text" name="firstname" id="firstname">

        <label for="mail">Votre E-Mail</label>
        <input type="text" name="mail" id="mail">

        <label for="phone">Votre n° de téléphone</label>
        <input type="text" name="phone" id="phone">

        <input type="submit" value="Souscrire">




    </form>
</div>


<?php include 'inc/footer.php'; ?>