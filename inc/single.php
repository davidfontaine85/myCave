<?php
    require 'inc/connect.php';
    global $db;

    $res = $db->query("SELECT * FROM bottle ORDER BY id ASC");
    $row = $res->fetch();
?>

<div class="single">
    <div class="row">
        <div class="img"><img src="./img/<?php echo $row['picture']; ?>" alt=""></div>
        <div class="text">
            <div> 
                <p><?php echo $row['winename']; ?></p>
                <p><?php echo $row['year']; ?></p>
                <p><?php echo $row['region']; ?></p>
                <p><?php echo $row['country']; ?></p> 
                <p><?php echo $row['description']; ?></p>
            </div>
        </div>
    </div>
</div>