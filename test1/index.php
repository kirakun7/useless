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

$sql = "SELECT * FROM `groups`";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Groups</title>
</head>
<body>
    <h1>
        Groups list
    </h1>
    <a href="users.php">
        Users list
    </a><br>
    <a href="add_new_group.php">
        Add new group
    </a>
    <table border="1">
        <th>
            Groupe name
        </th>
        <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr><td><a href=\"show_group_users.php?id=".$row["id"]."\">".$row["name"]."</a></td></tr>";
            }
        ?>
    </table>
</body>
</html>