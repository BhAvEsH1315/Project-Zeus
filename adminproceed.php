<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction_History</title>
    <style>
        table {
            background-color: white;
            margin: 0 auto;
            padding: 20px;
            border: 1px;
            border-color: white;
            position: relative;
            align-self: auto;

        }

        tr,
        td {
            padding: 20px;
        }

        .container {
            width: 80%;
            background-color: #f8e8cace;
            align-items: center;
            margin: 0 auto;
            align-content: center;
            padding-bottom: 40px;
        }

        p {
            padding: 20px;
            font-size: 30px;
            font-family: system-ui;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table" border=1>
            <?php

            $hostname = "localhost";
            $Username = "root";
            $Password = "";
            $dbname = "Plaza";


            $conn = mysqli_connect($hostname, $Username, $Password, $dbname);

            if ($conn->connect_error) {
                die("<br>Connection failed: " . $conn->connect_error);
            }

            $sql1 = "SELECT * FROM transactions ";

            $result = $conn->query($sql1);

            $TotalRev = 0;

            if ($result->num_rows > 0) {
                // echo "<table border=1>";

                echo   "<tr><td>" . "Transaction id" . "</td><td>" .  "User Name" . "</td><td>" . "Time" . "</td><td>" . "Result" . "</td><td>" . "Amount Recieved" . "</td>";

                while ($row = $result->fetch_assoc()) {

                    echo "<tr><td>" . $row["Tran_id"] . "</td><td>" . $row["User"]  . "</td><td>" . $row["ExactTime"] .  "</td><td>" . $row['Result'] . "</td><td>" . $row['CurrentIncome'] . "</td></tr> <br>";
                    $TotalRev += (int)$row['CurrentIncome'];
                }
                echo "<br><p>Total Revenue so far is: Rs. $TotalRev.</p>";
                // echo "</table>";
            } else {
                echo "<script>
alert('There are no Transactions to display & Total Revenue is Rs.0');
window.location.href='index.php';  
</script>";
            }
            ?>
        </table>
    </div>

</body>

</html>