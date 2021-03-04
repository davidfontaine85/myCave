<?php 
    require 'connect.php';

    function displayCountry() {
        global $db;
        $res = $db->query("SELECT DISTINCT country FROM bottle");
        while($row = $res->fetch()) {
            ?>
            <option value="<?php echo $row['country']; ?>" id="country"><?php echo $row['country']; ?></option>
            <?php
        }
    }
    function displayRegion() {
        global $db;
        $res = $db->query("SELECT DISTINCT region FROM bottle");
        while($row = $res->fetch()) {
            ?>
            <option value="<?php echo $row['region']; ?>" id="region"><?php echo $row['region']; ?></option>
            <?php
        }
    }
    function displayNameWine() {
        global $db;
        $res = $db->query("SELECT DISTINCT winename FROM bottle");
        while($row = $res->fetch()) {
            ?>
            <option value="<?php echo $row['winename']; ?>" id="winename"><?php echo $row['winename']; ?></option>
            <?php
        }
    }
    function displayYear() {
        global $db;
        $res = $db->query("SELECT DISTINCT year FROM bottle");
        while($row = $res->fetch()) {
            ?>
            <option value="<?php echo $row['year']; ?>" id="year"><?php echo $row['year']; ?></option>
            <?php
        }
    }
    
    
?>
<form action="acceuil.php" method="POST">
        <label for="country">Pays</label>
        <select name="country" id="country">
            <option value=""></option>
            <?php displayCountry(); ?>
        </select>

        <label for="region">Region</label>
        <select name="" id="region">
            <option value="" id=""></option>
            <?php displayRegion(); ?>
        </select>
    
        <label for="name">Nom du Vin</label>
        <select name="" id="name">
            <option value="" id=""></option>
            <?php displayNameWine(); ?>
        </select>  

        <label for="year">Années</label>
        <select name="" id="year">
            <option value="" id=""></option>
            <?php displayYear(); ?>
        </select>

    <!-- <input type="submit" name="submit" value="Rechercher"> -->
</form>