<?php
$servername = "database";//database
$username = "root";
$password = "tiger";

try {
    $connexion = new PDO("mysql:host=$servername;port=3306;dbname=exercise1", $username,$password);   // set the PDO error mode to exception
    $sql = "insert into `users`(`first_name`, `last_name`) values('".$_POST['first_name']."','".$_POST['last_name']."')";
    $connexion->exec($sql);
    header("location: /test1/users.php");
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


