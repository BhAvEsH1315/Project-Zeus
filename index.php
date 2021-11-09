<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Plaza";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//Create the database plaza....
$sql1 = "CREATE DATABASE Plaza";
if($conn->query($sql1)===TRUE)
{
    //echo "Database created succesfully";
}

else
{
    //echo "Error creating database: ". $conn->error;
}

$conn->close();

$conn = mysqli_connect($servername, $username, $password, $dbname);


if($conn->connect_error)
{
   // die("<br>Connection failed: ". $conn->connect_error);
}

$sql2 = "CREATE TABLE Users(

    UserName VARCHAR(120)   ,
    Pass VARCHAR(100)  ,
    Email_id VARCHAR(100)  ,
    CarNo VARCHAR(30) ,
    eWalletNo INT(16),
    eWallet_balance INT DEFAULT 0
    )";

if($conn->query($sql2)==TRUE)
{
    //echo "<br>Table Users created succesfully";
}

else
{
    //echo "<br>Error creating table: " . $conn->error;
}

$sql3 = "CREATE TABLE Transactions(
    Tran_id INT NOT NULL AUTO_INCREMENT, /* Transaction id */
    User VARCHAR(120),
    Dayy VARCHAR(10),
    ExactTime DATETIME,
    Result VARCHAR (10), /*Successful or failure */
    CurrentIncome INT(20),

    PRIMARY KEY (Tran_id)
    )";
    

    if($conn->query($sql3))
    {
        //echo "<br>Table Transactions created succesfully";
    }

else
{
    //echo "<br>Error creating table: " . $conn->error;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Toll Plaza website
        </title>
        <style type="text/css">
        body {
            height: 125vh;
            margin-top: 0px;
            padding: 4px;
            background-color: #112D32;
            font-family: sans-serif;
            background-image: url(A1.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px;
        }
    
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #112D32;
            }
            
            li {
              float: left;
            }
            
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 18px;
              text-decoration: none;
            }
            

            li a:hover:not(.active) {
                background-color: #4F4A41;
              }
              
              .active {
                background-color: #254E58;
              }

            </style>


        </style>
    </head>

    <body>

        <header>
            <nav>
                <ul>
                    <li>
                        <a href="index.php"> &nbsp; &nbsp; Home &nbsp; &nbsp;   </a>
                    </li>
                    <li>
                        <a href="Userguide.html">&nbsp; &nbsp; Documentation    &nbsp; &nbsp;    </a>
                    </li>
                    <li>
                        <a href="contactus.html">&nbsp; &nbsp; Contact us   &nbsp; &nbsp;    </a>
                    </li>
                    <li>
                        <a href="SignupForm.php">&nbsp; &nbsp; Sign Up   &nbsp; &nbsp;    </a>
                    </li>
                    <li>
                        <a href="loginForm.php">&nbsp; &nbsp; Sign In  &nbsp; &nbsp;    </a>
                    </li>
                    <li>
                        <a href="adminform.php">&nbsp; &nbsp; Administrator &nbsp; &nbsp;    </a>
                    </li>
                
                </ul>
            </nav>
        </header><font color="white">
     


       

      

     
    </font>
    </body>
</html>