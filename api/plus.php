<?php 

session_start();
$user = $_SESSION["user"];

$x = $_REQUEST["x"];
$y = $_REQUEST["y"];

//include("C:\\params\\billing.php");
include("../../../params//billing.php");

$conn = mysqli_connect($db_server,$db_user,$db_pwd,"billing");

$sql = "INSERT INTO calcs(Number1, Number2, Operation, User) VALUES($x,$y,'plus', '$user')";
//echo $sql;

mysqli_query($conn, $sql);

mysqli_close($conn);
$z = $x + $y;
echo $z;
