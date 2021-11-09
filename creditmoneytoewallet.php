
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Money to eWallet</title>
    <style>
        body {
    background-color: #254E58;
    font-family: system-ui;
}

.main {
    background-color: #4F4A41;
    width: 500px;
    height: 400px;
    margin: 7em auto;
    border-radius: 1.5em;
    box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    padding:20px;
}

.sign {
    padding-top: 40px;
    color: white;
    font-family: system-ui;
    font-weight: bold;
    font-size: 23px;
}
.un {
    width: 76%;
    color: #6E6658;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(241, 227, 227, 0.726);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(36, 35, 35, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family:  system-ui;
    }

form.form1 {
    padding-top: 25px;
}
    
.pass {
    width: 76%;
color:  #6E6658;
font-weight: 700;
font-size: 14px;
letter-spacing: 1px;
background: rgba(241, 227, 227, 0.726);
padding: 10px 20px;
border: none;
border-radius: 20px;
outline: none;
box-sizing: border-box;
border: 2px solid rgba(0, 0, 0, 0.02);
margin-bottom: 50px;
margin-left: 46px;
text-align: center;
margin-bottom: 27px;
font-family: system-ui;
}    
.submit {
    cursor: pointer;
      border-radius: 5em;
      color: #fff;
      background: linear-gradient(to right,#254E58, #112D32);
      border: 0;
      padding-left: 40px;
      padding-right: 40px;
      padding-bottom: 10px;
      padding-top: 10px;
      font-family: system-ui;
      margin-left: 35%;
      font-size: 13px;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.14);
  }

a {
    text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
    color: #E1BEE7;
    text-decoration: none
}
        </style>
</head>
<body>

    <!-- <h1>Please enter your New Horizon Bank account number and pin: </h1>

    <form action="creditcheck.php" method='post'>
    <label for="AcNo"></label><br>
    <input type="text" id="AcNo" name="AcNo"  placeholder="Account Number"><br>

    <label for="pin"></label><br>
    <input type="text" id="pin" name="pin"  placeholder="Pin"><br>

    <input class="submit" type="submit" ></input>


    </form> -->


    <div class = "main">
        <p class="sign" align="center">Please Enter your New Horizon Bank Account number and PIN:</p>
    <form action="creditcheck.php" method = "POST" class = "form1">
          <label for="AcNo"></label><br>
          <input type="text" id="AcNo" name="AcNo" class="un" placeholder="Account Number" required><br>

          <label for="pin"></label><br>
          <input type = "password" id = "pin" name="pin" class="pass" placeholder="PIN" required><br>

    

          <!-- <input type="submit" value="Login"> -->
          <input class="submit" type="submit" align="center"></input>
          </form>
        </div>
    
</body>
</html>