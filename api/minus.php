<?php 
session_start();
$user = $_SESSION["user"];
// Параметр  в колонке Timestemp  переделан с "Date" на "Datetime"
$x = $_REQUEST["x"];
$y = $_REQUEST["y"];


$LogTime = date("Y-m-d h:i:sa");
//echo $LogTime;


$conn = mysqli_connect("localhost:3306","billing","admin","billing");

$sql = "INSERT INTO calcs(Number1, Number2, Operation, User, Timestamp) VALUES($x,$y,'minus', '$user', '$LogTime' )";
//echo $sql;

mysqli_query($conn, $sql);

mysqli_close($conn);
$z = $x - $y;
echo $z;
