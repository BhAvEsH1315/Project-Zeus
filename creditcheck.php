<html>
    <head>
        <style>
            body {
    background-color: #254E58;
    font-family: system-ui;
}

.main {
    background-color: #4F4A41;
    width: 500px;
    height: 300px;
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
      font-size: 20px;
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


<?php

$AccountNo = $_POST['AcNo'];
$Pin = $_POST['pin'];

session_start();
$_SESSION['AcNo'] = $AccountNo;
$_SESSION['pin'] = $Pin;

$hostname = "localhost";
$Username = "root";
$Password = "";
$bank = "bank_accounts";
$plaza = "Plaza";


$conn_bank = mysqli_connect($hostname, $Username, $Password, $bank );

if($conn_bank->connect_error)
{
    die("<br>Connection failed: ". $conn_bank->connect_error);
}


$conn_plaza = mysqli_connect($hostname, $Username, $Password, $plaza );

if($conn_plaza->connect_error)
{
    die("<br>Connection failed: ". $conn_plaza->connect_error);
}

$sql1 = "SELECT * FROM Account_info WHERE (Userid = $AccountNo) AND (pin = $Pin) ";

$result = $conn_bank->query($sql1);



if($result==true && $result->num_rows>0)
{
    // echo "Account found. Please enter the amount to be transferred: ";
    // echo ("<form action='transferer.php' method='POST'>
    // <p><input type='text' id='amount' name='amount' class='username' ><br>
    // </p><p><input type='submit' value='Submit'></p></form>");


   echo " <div class = \"main\">
    <p class=\"sign\" align=\"center\">Please enter the amount to be transferred</p>
<form action=\"transferer.php\" method = \"POST\" class = \"form1\">
      <input type=\"text\" id=\"amount\" name=\"amount\" class=\"un\" placeholder='Amount' required><br>

      <input class=\"submit\" type=\"submit\" align=\"center\"></input>
      </form>
    </div> ";


}

else
{
    // echo "<center>Account not found. Please recheck your Account Number and pin.</center>";
    echo "<script>
alert('Account not found. Please recheck your Account Number and pin.');
window.location.href='creditmoneytoewallet.php';  
</script>";
}

?>

</body>
</html>