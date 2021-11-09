<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="loginform.css">

    </head>

    <body>
        <div class = "main">
        <p class="sign" align="center">Log in</p>
    <form action="adminVerify.php" method = "GET" class = "form1">
          <label for="admin"></label><br>
          <input type="text" id="admin" name="admin" class="un" placeholder="Administrator name" required><br>

          <label for="passw"></label><br>
          <input type = "password" id = "passw" name="passw" class="pass" placeholder="Password" required><br>

          <input class="submit" type="submit" align="center"></input>
        
    </form>
        </div>
    </body>
</html>

<?php

?>