<?php

session_start();
include 'dbh.php';





$name = $_POST['name'];
$msg = $_Post['msg'];
$name=$_SESSION['name'];
$_SESSION['name'] = $name;

$sql = "insert into posts(msg,name)values('$msg','$name')";
$result = $conn->query($sql);

header("location: home.php")


?>