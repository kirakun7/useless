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

$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body> 
    <h1>
        Users list
     </h1>
        <a href="index.php">
         Groups list
        </a><br>
    <a href="add_new_user.php">
        Add new user
    </a>
    <table border="1">
        <th>
            First name
        </th>
        <th>
            Last name
        </th>
        <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["first_name"]." </td>";
                echo "<td>".$row["last_name"]." </td></tr>";
            }
            
                
        ?>
    </table>
</body>
</html>