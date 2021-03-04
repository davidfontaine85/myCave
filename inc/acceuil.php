<?php 
    require 'inc/connect.php';

    global $db;
    
    
    $sql2 = $db->query("SELECT COUNT(id) AS nbrArticles FROM bottle");
    $row2 = $sql2->fetch();
    
    // if(isset($_POST['submit'])){
        
    //     global $db;
    //     $selectCountry = $_POST['country'];
    //     $selectRegion = $_POST['region'];
    //     $selectWinename = $_POST['name'];
    //     $selectYear = $_POST['year'];

    //     $sql1 = $db->prepare("SELECT * FROM bottle WHERE country=?, region=?, name=?, year=? ORDER BY winename DESC LIMIT".(($currentPage-1)*$perPage)." ,$perPage");
    //     $sql1->execute($selectCountry,$selectRegion,$selectWinename,$selectYear);
    // }
    
    $nbrArticles = $row2['nbrArticles'];
    $perPage = 4;
    $currentPage = 1;
    $nbPage = ceil($nbrArticles/$perPage);

    if(isset($_GET['p'])){
        $currentPage = $_GET['p'];
    }else{
        $currentPage = 1;
    }

    $sql1 = $db->query("SELECT * FROM bottle ORDER BY winename DESC LIMIT ".(($currentPage-1)*$perPage)." ,$perPage");
    
    
    
?>


    <div class="container">
        <div class="row">
            <?php 
                while($row = $sql1->fetch()) {
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
                               <p p class="info"><?php echo $row['description']; ?></p>
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
            echo " <a href=\"index.php?p=$i\" class='page'> $i  </a>";
            }
            ?>
        </div>
    </div>
