<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new user</title>
</head>
<body>
    <h1>
        Add new user
    </h1>
    <form action="post_user.php" method="POST">
        <label for="first_name">
            Enter first name of user
        </label>
        <input type="text" name="first_name" id="first_name" placeholder="First name" required><br>
        <label for="last_name">
            Enter last name of user
        </label>
        <input type="text" name="last_name" id="last_name" placeholder="Last name" required><br>
        <button type="submit">
            Add
        </button>
    </form>
</body>
</html>