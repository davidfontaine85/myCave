<?php 
    session_start();
    
    if(empty($_SESSION)) {
        $message = 'Vous n\'êtes pas logger.';
        header('Location: index.php');
    }else{
        
        require 'inc/connect.php';
        require 'inc/header.php'; 
        
        global $db;

        $sql2 = $db->query("SELECT COUNT(id) AS nbrArticles FROM bottle");
        $row2 = $sql2->fetch();
    
    
        $nbrArticles = $row2['nbrArticles'];
        $perPage = 4;
        $currentPage = 1;
        $nbPage = ceil($nbrArticles/$perPage);
        if(isset($_GET['p'])){
            $currentPage = $_GET['p'];
        }else{
            $currentPage = 1;
        }

        $res = $db->query("SELECT * FROM bottle ORDER BY winename DESC LIMIT ".(($currentPage-1)*$perPage)." ,$perPage");
    
    ?>
        <section>
            <div class="acceuil">
                <div class="container">
                    <div class="row">
                        <div class="addBottle">
                            <p>Ajouter une bouteille </p>
                            <i class="fas fa-plus-circle"></i>
                            <input type="hidden" name="add" id ="add">
                        </div>
                            <?php 
                            while($row = $res->fetch()) {
                            ?>
                            <div class="single">
                                <div class="img"><img src="./img/<?php echo $row['picture']; ?>" alt=""></div>
                                <div class="text">
                                    <div> 
                                        <h2 class="title_bottle"><?php echo $row['winename']; ?></h2>
                                        <p class="sub"><?php echo $row['year']; ?></p>
                                        <p class="sub"><?php echo $row['grapes']; ?></p>
                                        <p class="sub"><?php echo $row['region']; ?></p>
                                        <p class="sub"><?php echo $row['country']; ?></p> 
                                        <p class="info"><?php echo $row['description']; ?></p>
                                    </div>
                                    <div class="actionBottle">
                                        <i class="trash fas fa-trash-alt fa-2x"></i>
                                        <input type="hidden" value="<?php echo $row['id']; ?>">
                                        <i class="edit far fa-edit fa-2x"></i>
                                    </div>
                                </div> 
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class='paginate'>
                            <?php 
                            for($i = 1; $i <= $nbPage; $i++){
                            echo " <a href=\"admin.php?p=$i\" class='page'> $i  </a>";
                            }
                            ?>
                    </div> 
                </div>
            </div>
        </section>
    <?php require 'inc/footer.php'; ?>
    <?php
    }
?>