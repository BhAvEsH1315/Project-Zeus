<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            align-content: center;
        }

        .container {
            background-color: #254e58;
            width: 80%;
            height: 800px;
            align-self: center;
            margin: 3em auto;
        }

        .text {
            width: 70%;
            height: 400px;
            background-color: antiquewhite;
            margin: 2em auto;
            border-radius: 0.7cm;
            text-align: center;
            font-size: 50px;
        }

        p {
            padding-top: 20px;
        }

        .submit {
            width: 40%;
            height: 80px;
            cursor: pointer;
            border-radius: 5em;
            color: #fff;
            background: linear-gradient(to right, #254e58, #112d32);
            border: 0;
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-family: system-ui;
            margin-left: 35%;
            font-size: 28px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.404);
            margin: 0.8em auto;
        }
    </style>
</head>

<body style="background-color:#4f4a41;">
    <?php

    session_start();
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];

    $hostname = "localhost";
    $Username = "root";
    $Password = "";
    $dbname = "Plaza";

    $conn = mysqli_connect($hostname, $Username, $Password, $dbname);

    if ($conn->connect_error) {
        die("<br>Connection failed: " . $conn->connect_error);
    }

    $sql1 = "SELECT eWallet_balance FROM Users WHERE UserName = '$user' and Pass = '$pass'";

    $result = $conn->query($sql1);

    $row = $result->fetch_assoc();

    $eWall_bal = $row['eWallet_balance'];

    if ($eWall_bal >= 150) {
        $eWall_bal = $eWall_bal - 150;

        $sql2 = "UPDATE Users SET eWallet_balance = '$eWall_bal' WHERE UserName = '$user' and Pass = '$pass' ";

        $conn->query($sql2);

        // echo $conn->error;
        $res = "Successful";
        // $day = date('D', time());
        $time = date('Y-m-d H:i:s', time());


        $sql4 = "INSERT INTO Transactions(User, ExactTime, Result, CurrentIncome) VALUES('$user', '$time', '$res', 150)";

        $conn->query($sql4);

        // echo $conn->error;

        echo "<div class='container'><div class='text'><p>!!! Transaction Successful !!!<br>!! Happy Journey..!!<p>
        <form action='index.php'><button class='submit'>Back to Homepage</button></form></div></div>";
    } else {
        //  echo "You do not have enough balance in your eWallet for the transaction. Minimum required balance is 150 Rupees.";
        echo "<script>
    alert('You do not have enough balance in your eWallet for the transaction. Minimum required balance is 150 Rupees.');
    window.location.href='loginProceed.php';  
    </script>";

        // echo $conn->error;
        $res = "Failed";
        // $day = date('D', time());
        $time = date('Y-m-d H:i:s', time());


        $sql4 = "INSERT INTO Transactions(User, ExactTime, Result, CurrentIncome) VALUES('$user', '$time', '$res', 0)";

        $conn->query($sql4);
    }

    ?>
</body>

</html>