<?php
    require 'inc/connect.php';

    global $db;
    $message = 'La Bouteille a bien été supprimée.';
    $id_bottle = $_POST['id'];

    $sqldel = "DELETE FROM bottle WHERE id=$id_bottle LIMIT 1";
    $stmt = $db->query($sqldel);
    

?>
<div class="modalDelet">
    <a href="admin.php"><p>×</p></a>
    <p><?php echo $message; ?></p>
</div>