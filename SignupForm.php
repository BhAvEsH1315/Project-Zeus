<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
        <link rel="stylesheet" href="SignupForm.css">
    </head>
    <body>
    <form action="CreateAccount.php" method = "GET">
        <p class="sign">Sign up</p>
          <p><label for="User" align="center"><i>User Name:</i></label><br></p>
          <p><input type="text" id="User" name="User" class="username" align="center"><br></p>
          <p><label for="Pass">Password</label><br></p>
          <p><input type = "text" id = "Pass" name="Pass" class="pass"><br></p>
          <p><label for="email">Email_id: </label><br></p>
          <p><input type = "text" id = "email" name="email" class="email"><br></p>
          <p><label for="car">Car Number: </label><br></p>
          <p><input type = "text" id = "car" name="car" class="carno"><br></p>
          <p><label for="ewall">eWallet Number: </label><br></p>
          <p><input type = "text" id = "ewall" name="ewall" class="ewall"><br></p>
       
          <p><input type="submit" value="Submit"></p>
        </form>
    </body>
</html> -->



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>Signup Page</title>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="SignupForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body >
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="CreateAccount.php" method = "GET">
        <div class="user-details"> 
            <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="User" name="User" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">E-wallet Number</span>
            <input type="text" id = "ewall" name="ewall" placeholder="Enter Ewallet number" required>
          </div>
         
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id = "email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Car Number</span>
            <input type="text" id = "car" name="car" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id = "Pass" name="Pass" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>