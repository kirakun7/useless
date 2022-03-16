<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new group</title>
</head>
<body>
    <h1>
        Add new group
    </h1>
    <form action="post_group.php" method="POST">
        <label for="groupe_name">
            Enter name of group
        </label>
        <input type="text" name="group_name" id="groupe_name" placeholder="Group name" required>
        <button type="submit">
            Add
        </button>
    </form>
</body>
</html>