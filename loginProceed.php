<?php
$balance;

$hostname = "localhost";
$Username = "root";
$Password = "";
$dbname = "Plaza";

session_start();
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];


$conn = mysqli_connect($hostname, $Username, $Password, $dbname );

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sql1 = "SELECT eWallet_balance FROM Users WHERE UserName = '$user' and Pass = '$pass' ";

$result = $conn->query($sql1);
$balance = mysqli_fetch_assoc($result);

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eWallet Balance</title>
</head>
<body>

    <center><h1>Your eWallet Balance is:</h1></center>
</body>
</html> -->

















<!-- <!DOCTYPE html>
<html>
    <head>
        <title>User options</title>
        <link rel="stylesheet" href="loginproceed.css">

    </head>

    <body>
      
        
             <p><li><form action="transactionhistory.php"><button type="submit">Check transaction history</button></form></li></p> -->
            <!-- <p><li><form action="ewalletbalance.php"><button type="submit">Check ewallet balance</button></form></li></p> -->
            <!-- <div style="width:100px;height:50px;background-color:black;" >
              <p style="color:white;">  php </P> -->
            <!-- <p><li><form action="creditmoneytoewallet.php"><button type="submit">Credit Money to ewallet</button></form></li></p>
            <p><li><form action="maketransaction.php"><button type="submit">Make a Transaction</button></form></li></p> --> 
<!-- </div>
   <div class="container">
        <ul class="list">
  <li><a href="transactionhistory.php">Transaction History</a></li>
  <li><a href="creditmoneytoewallet.php">Credit money to E-wallet</a></li>
  <li><a href="maketransaction.php">Make a Transaction</a></li>
</ul>
</div>
    </body>
</html> -->






<!DOCTYPE html>
<html>

<head>
    <title>Login chya nanter che options</title>
    <link rel="stylesheet" href="loginproceed.css">
</head>

<body style="background-color:#f8e8cace; ">
   
    <div class="container">
        <div class="buttons">
            <div class="balance">
            <p style="color:black;"> Balance : <?php echo $balance['eWallet_balance'] ?> </P>
            </div>
            <div class="para">
            <p style="color:white;align:center;padding-top:20px;">
            If the toll was not paid automatically click the button below to pay now. <br> <br>
            FOR CAR : 150 Rs   </p> <br>
           
            <form action="maketransaction.php" >

            <button  class="pay"> PAY NOW</button>

            </form>
            </div>
            
        </div>
            <!-- <button href="MakeTran.php" class="pay"> PAY NOW</button> -->

   
      
        <div class="options">
        <!-- <ul class="list">
  <li><a href="transactionhistory.php">Transaction History</a></li>
  <li><a href="creditmoneytoewallet.php">Credit money to E-wallet</a></li>
  
</ul> -->
<form action="transactionhistory.php" class="form1">
<button type="submit" class="trans" >Transaction History</button>
</form>
<form action="creditmoneytoewallet.php" class="form1">
<button type="submit" class="cred" >Credit money to E-wallet</button>
</form>
        </div>
    </div>





</body>

</html>