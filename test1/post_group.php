<?php
$servername = "database";//database
$username = "root";
$password = "tiger";

try {
    $connexion = new PDO("mysql:host=$servername;port=3306;dbname=exercise1", $username,$password);   // set the PDO error mode to exception
    $sql = "insert into `groups`(`name`) values('".$_POST['group_name']."')";
    $connexion->exec($sql);
    header("location: /test1");
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


