<?php

$amount = $_POST['amount'];

$hostname = "localhost";
$Username = "root";
$Password = "";
$bank = "bank_accounts";
$plaza = "Plaza";

session_start();
$AccountNo = $_SESSION['AcNo'];
$Pin = $_SESSION['pin'];


$conn_bank = mysqli_connect($hostname, $Username, $Password, $bank );
$conn_plaza = mysqli_connect($hostname, $Username, $Password, $plaza );

if($conn_bank->connect_error)
{
    die("<br>Connection failed: ". $conn_bank->connect_error);
}

if($conn_plaza->connect_error)
{
    die("<br>Connection failed: ". $conn_plaza->connect_error);
}



$user = $_SESSION['user'];
$pass = $_SESSION['pass'];

$sql1 = "SELECT balance FROM Account_info WHERE (Userid = $AccountNo) and (pin = $Pin);";


$result = $conn_bank->query($sql1);

// echo $conn_bank->error;

if($result->num_rows>0)
{
    $row2 = $result->fetch_assoc();
}


$balance = (int)$row2['balance'];

if((int)$amount < (int)$balance)
{
    //deducting money from bank balance
    $diff = $balance - $amount;

    $sql2 = "UPDATE Account_info SET balance = $diff WHERE Userid = $AccountNo and pin = $Pin;";

    $conn_bank->query($sql2);

    //increasing ewallet balance
    $sql3 = "SELECT eWallet_balance FROM Users WHERE UserName = '$user' and Pass = '$pass'; ";

    $current_bal = $conn_plaza->query($sql3);
    echo $conn_plaza->error;
    
    $row = $current_bal->fetch_assoc();
    echo $row['eWallet_balance'];

    $curr_bal = $row['eWallet_balance'];


    $curr_bal = $curr_bal + $amount;

    echo $curr_bal;

    $sql4 = "UPDATE Users SET eWallet_balance = $curr_bal WHERE (UserName = '$user') and (Pass = '$pass');";

    $conn_plaza->query($sql4);

    // echo $conn_plaza->error;


    echo "<script>
alert('Money Transfer successful');
window.location.href='loginProceed.php';  
</script>";


}

else
{
    echo "<script>
alert('Sorry, your account balance is not enough. Money transfer aborted.');
window.location.href='creditcheck.php';  
</script>";
}

?>