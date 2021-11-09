
<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="loginform.css">

    </head>

    <body>
        <div class = "main">
        <p class="sign" align="center">Log in</p>
    <form action="loginVerify.php" method = "GET" class = "form1">
          <label for="User"></label><br>
          <input type="text" id="User" name="User" class="un" placeholder="Username"><br>

          <label for="Pass"></label><br>
          <input type = "password" id = "Pass" name="Pass" class="pass" placeholder="Password"><br>

          <label for="car"> </label><br>
          <input type = "number" id = "car" name="car" class="carno" placeholder="Car Number"><br>

          <!-- <input type="submit" value="Login"> -->
          <input class="submit" type="submit" align="center"></input>
        
    </form>
        </div>
    </body>
</html>