<?php
$servername = "database";//database
$username = "root";
$password = "tiger";

try {
    $connexion = new PDO("mysql:host=$servername;port=3306;dbname=exercise1", $username,$password);   // set the PDO error mode to exception
    $sql = "insert into `group_user`(`group_id`,`user_id`) values('".$_POST['group_id']."','".$_POST['user_id']."')";
    
    
    $connexion->exec($sql);
    
    header("location: /test1/show_user_groups.php?id=".$_POST['user_id']);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


