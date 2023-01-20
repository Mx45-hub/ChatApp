<?php
session_start();

include 'dbh.php';


if (isset($_SESSION['firstName'])) {
    echo $_SESSION['FirstName'];
} else {
    echo "No name found";
}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="home.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>

<div id="main">
    <h1 style="background-color: aqua; color: white;">


    -Online
    </h1>

    <div class="output">
        <?php
        $sql = "select * from posts";
        $result = $conn ->query($sql);
        if($result -> num_rows >0){
            //output data for each row
            while($row = $result ->fetch_assoc()){
                echo $row["name"] . " " . $row["msg"] . "--" . $row["date"] . "<br>";

            }
        }
        else {
            echo "No Message yet";
        }
        $conn->close();

        ?>

    </div>

    <form method="post" action="send.php">
        <textarea name="msg" placeholder="Type your message..... "  class="form-control" ></textarea>
        <input type="submit" value="send">

    </form><br>
    <form action="send.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Submit">
    </form>

    <form action="logout.php" method="post">
    <input style="width: 100%; background-color: aqua; color: white; font-size: 20px;" type="submit" value="logout">
    </form>





    </form>


</div>

    
</body>
</html>