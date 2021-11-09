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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eWallet Balance</title>
</head>
<body>

    <center><h1>Your eWallet Balance is: <?php echo $balance['eWallet_balance'] ?></h1></center>
</body>
</html>