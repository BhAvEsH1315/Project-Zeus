<?php

$admin = $_GET['admin'];
$pass = $_GET['passw'];

$hostname = "localhost";
$Username = "root";
$Password = "";
$dbname = "Plaza";


$conn = mysqli_connect($hostname, $Username, $Password, $dbname );

if($conn->connect_error)
{
    die("<br>Connection failed: ". $conn->connect_error);
}

if($admin == "admin" && $pass == "abcd")
{
    echo "<script>
alert('Username and password authenticated');
window.location.href='adminproceed.php';  
</script>";
}
else {
    echo "<script>
alert('Username or password incorrect');
window.location.href='adminform.php';  
</script>";
}


?>