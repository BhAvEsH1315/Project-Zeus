<?php

$User = $_GET['User'];
$Pass = $_GET['Pass'];
$CarNo = $_GET['car'];

$hostname = "localhost";
$Username = "root";
$Password = "";
$dbname = "Plaza";

session_start();
$_SESSION['user'] = $User;
$_SESSION['pass'] = $Pass;
// $_SESSION['pc'] = 0;
// $_SESSION[]

$conn = mysqli_connect($hostname, $Username, $Password, $dbname );

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

$sqll = "SELECT * FROM Users WHERE (Users.UserName = '$User') AND (Users.Pass = '$Pass') AND (Users.CarNo = $CarNo)";

$result = $conn->query($sqll);

$count = $result->num_rows;

if(  $count>0)
{
   echo "<script>
alert('Username and password authenticated');
window.location.href='loginProceed.php';  
</script>";
}

else
{
  echo "<script>
alert('Usename or password incorrect');
window.location.href='loginForm.php';  
</script>";
}

?>