<?php

include 'dbh.php';


	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$password = $_POST['password'];


	// Database connection
    $conn = new mysqli('localhost','root','','chatapplication');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT * FROM signup WHERE firstName=? AND lastName=? AND password=?");
	$stmt->bind_param("sss", $firstName, $lastName, $password);
	$execval = $stmt->execute();
    if ($execval) {
        
        $stmt->store_result();
        if ($stmt->num_rows>0) {
            // Redirect to chatpage.php
            header("Location: home.php");
        } else {
            echo "Invalid Credentials";
        }
    } else {
        echo "Error";
    }
	$stmt->close();
	$conn->close();
}
?>

