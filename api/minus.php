<?php 
session_start();
$user = $_SESSION["user"];

$x = $_REQUEST["x"];
$y = $_REQUEST["y"];


$conn = mysqli_connect("localhost:3306","billing","admin","billing");

$sql = "INSERT INTO calcs(Number1, Number2, Operation, User) VALUES($x,$y,'minus', '$user')";
//echo $sql;

mysqli_query($conn, $sql);

mysqli_close($conn);
$z = $x - $y;
echo $z;
