<?php 
// Параметр  в колонке Timestemp  переделан с "Date" на "Datetime"
session_start();
$user = $_SESSION["user"];

$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
$LogTime = date("Y-m-d h:i:sa");
//include("C:\\params\\billing.php");
include("../../../params//billing.php");

$conn = mysqli_connect($db_server,$db_user,$db_pwd,"billing");

$sql = "INSERT INTO calcs(Number1, Number2, Operation, User, Timestamp) VALUES($x,$y,'plus', '$user','$LogTime' )";
//echo $sql;

mysqli_query($conn, $sql);

mysqli_close($conn);
$z = $x + $y;
echo $z;
