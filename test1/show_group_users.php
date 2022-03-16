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

$sql = "SELECT * FROM `groups` where id='".$_REQUEST["id"]."'";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM `users`";
$result2 = $conn->query($sql2);

$sql3 = "select"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goup users</title>
</head>
<body>
    <h1>
        <?php echo $result->fetch_assoc()["name"] ?> group users
    </h1>
    <a href="users.php">
        Users list
    </a><br>
     <a href="index.php">
         Groups list
    </a><br>
    <form action="post_user_to_group.php" method="POST">
        <input type="hidden" name="group_id" value="<?php echo $_REQUEST["id"] ?>">
        <select name="user_id">
            <?php
            while($row = $result2->fetch_assoc()){
                echo "<option value='".$row["id"]."'>".$row["first_name"]." ".$row["last_name"]."</option>";
            }
            ?>
        </select>
        <button type="submit">
            Add user to group
        </button>
    </form>
    <table border="1">
        <th>
            First name
        </th>
        <th>
            Last name
        </th>
        <th>
            Action
        </th>
        <?php 
        /*$sql4 = "SELECT `first_name`,`last_name` FROM `users` LEFT JOIN `group_user` ON `users`.id = `group_user`.user_id WHERE `group_user`.group_id=
        '".$_REQUEST["id"]."'";*/
        $sql4 = "SELECT * FROM `users` LEFT JOIN `group_user` ON `users`.id = `group_user`.user_id WHERE `group_user`.group_id=
        '".$_REQUEST["id"]."'";
        $result4 = $conn->query($sql4);
//        SELECT `first_name`,`last_name` FROM `users` LEFT JOIN `group_user` ON `users`.id = `group_user`.user_id WHERE `group_user`.group_id=1;
        while($row = $result4->fetch_assoc()){
            echo
             "<tr>
                <td>
                    <a href='show_user_groups.php?id=" . $row["id"] ."'>" . $row["first_name"] ."</a>
                </td>
                <td>
                    <a href='show_user_groups.php?id=" . $row["id"] ."'> ".$row["last_name"]."</a>
                </td>
                <td>
                    <a href='remove_user_from_group.php?id=" . $row["id"] . "&gid=" . $_REQUEST["id"] . "'>Remove</a>
                </td>
            </tr>";
        }
        ?>
    </table>
    </body>
</html5>
