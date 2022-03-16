<?php
$servername = "database";
$username = "root";
$password = "tiger";
$dbname = "exercise1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `users` where id='".$_REQUEST["id"]."'";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM `groups`";
$result2 = $conn->query($sql2);

$sql3 = "select";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Groups</title>
</head>
<body>
    <h1>
        <?php echo $result->fetch_assoc()["last_name"]; ?>'s groups
    </h1>
    <a href="users.php">
        Users list
    </a><br>
     <a href="index.php">
         Groups list
    </a><br>
    <form action="post_group_to_user.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $_REQUEST["id"] ?>">
        <select name="group_id">
            <?php
            while($row = $result2->fetch_assoc()){
                echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
            }
            ?>
        </select>
        <button type="submit">
            Add group to user
        </button>
    </form>
    <table border="1">
        <th>
            Group name
        </th>
        <?php 
        /*$sql4 = "SELECT `first_name`,`last_name` FROM `users` LEFT JOIN `group_user` ON `users`.id = `group_user`.user_id WHERE `group_user`.group_id=
        '".$_REQUEST["id"]."'";*/
        $sql4 = "SELECT * FROM `groups` LEFT JOIN `group_user` ON `groups`.id = `group_user`.group_id WHERE `group_user`.user_id='".
        $_REQUEST["id"]."'";
        $result4 = $conn->query($sql4);
//        SELECT `first_name`,`last_name` FROM `users` LEFT JOIN `group_user` ON `users`.id = `group_user`.user_id WHERE `group_user`.group_id=1;
        while($row = $result4->fetch_assoc()){
            echo "<tr><td><a href='show_group_users.php?id=" .
             $row["id"] ."'>".$row["name"].
             "</a><td><a href='show_group_users.php?id=" . $row["id"] ."'> </a></td></tr>";
        }
        ?>
    </table>
    </body>
</html5>
