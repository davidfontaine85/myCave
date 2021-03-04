<?php include 'inc/header.php'; ?>


<div class="container">
    <form action="login_post.php" method="POST">

        <label for="identifiant">Identifiant :</label>    
        <input type="text" name="pseudonym" id="identifiant">

        <label for="mdp">Mot de Passe :</label>    
        <input type="text" name="password" id="mdp">

        <input type="submit" value="Sign In">
        </form>
</div>

<?php include 'inc/footer.php'; ?>