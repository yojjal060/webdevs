<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./file.php" method="post" autocomplete="off >
        <label for="username">Username</label><br>
        <input type="text" id="username" name="Username"><br>
        <label for="password">password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="submit" id="submit" value="submit"><br>
    </form>
</body>
</html>

<?php

    $post = $_POST;
    $username = $post['Username'];
    echo($username);

?>