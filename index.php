<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <?php require './templates/imports.php' ?>;
        <link href="styles/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form>
            Email:<input type="text" name="email" placeholder="email">
            Password:<input type="password" name="password" placeholder="password">
            <input type="checkbox" name="password" > remember me
            <button type="submit">login</button>
            <a href="#">reset your password</a>
        </form>
        <a href="rcode.php">register</a>
    </body>
</html>
