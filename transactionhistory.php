<?php
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

$sql1 = "SELECT Tran_id, User, Dayy, ExactTime, Result, CurrentIncome FROM Transactions WHERE User = '{$user}';";

$result = $conn->query($sql1);

// $result = mysqli_query($conn, $sql1);

// if( gettype($result) != "boolean")
// {
if(($result)->num_rows > 0)
{
    echo "<table border=1>";

    echo   "<tr><td>". "Transaction id"."</td><td>".  "User Name"."</td><td>"."Day"."</td><td>". "Time"."</td><td>" ."Result"."</td><td>"."Amount Recieved"; 

    while($row = $result->fetch_assoc()) {

        echo "<tr><td>" . $row["Tran_id"]. "</td><td>". $row["User"]. "</td><td>" . $row["Dayy"]. "</td><td>" . $row["ExactTime"].  "</td><td>" .$row['Result'] . "</td><td>" . $row['CurrentIncome']. "</td></tr> <br>";

    }
    echo "</table>";
}
// }
else
{
    echo "<center>There are no Transactions to display</center>";
}



?>