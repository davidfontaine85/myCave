<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// try{
//     $db = new PDO("mysql:host=localhost;dbname=my_cave", "root", "");
    
//     // Set the PDO error mode to exception
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//     // Print host information
//     echo "Connect Successfully. Host info: " . 
// $db->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
// } catch(PDOException $e){
//     die("ERROR: Could not connect. " . $e->getMessage());
// }

if(isset($_GET['logout'])){
    session_destroy();
    header('Location: index.php');
    if(session_destroy() == TRUE){
        $message = "Vous n'étes plus connecté!";
    }
    return TRUE;
    }
try
       {
           $bdd_host = 'db5000126777.hosting-data.io';
           $bdd = 'dbs121310';
           $bdd_charset = 'utf8';
           $bdd_log = 'dbu31684';
           $bdd_pass = 'Motdepasse37!';
           $db = new PDO( "mysql:host=$bdd_host;dbname=$bdd;charset=$bdd_charset", "$bdd_log", "$bdd_pass",  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
       }
       catch (Exception $e)
       {
           die( 'Erreur : ' . $e->getMessage (  ) );
       }
 
?>