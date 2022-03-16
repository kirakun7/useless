<?php
$servername = "database";//database
$username = "root";
$password = "tiger";

try {
    $connexion = new PDO("mysql:host=$servername;port=3306;dbname=exercise1", $username,$password);   // set the PDO error mode to exception
    $sql = "delete from `group_user`where `group_id`=".$_REQUEST['gid']." and `user_id`=".$_REQUEST['id'].";";
    // DELETE FROM group_user WHERE group_id=1 AND user_id=1;
    //$sql = "remove from `group_user`(`group_id`,`user_id`) values('".$_POST['group_id']."','".$_POST['user_id']."')";
   // echo $sql;
    
    $connexion->exec($sql);
    
    header("location: /test1/show_group_users.php?id=".$_REQUEST['gid']);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


