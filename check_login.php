<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="widht=device-widht, initial-scale=1.0" >

    <title>Check login</title>

    <body>
    <a href="index.html">Index</a>
        <?php
            $user = $_REQUEST['user'];
            
            $pwd = $_REQUEST['pwd'];
            $hash = hash("sha256", $pwd);
            include("../../params//billing.php");

            $conn = mysqli_connect($db_server,$db_user,$db_pwd,"billing");

            
           // $sql = "SELECT * FROM users WHERE login = '$user' AND Pwdhash='$hash'  " ;

           // $query = mysqli_query($conn,$sql);
            //$result = mysqli_fetch_all($query);
            //использование параметрического запроса защищает нас от sql injection 
                $sql = "SELECT * FROM users WHERE login=? AND Pwdhash=?" ;
                $statement = mysqli_prepare($conn,$sql);
                mysqli_stmt_bind_param($statement, "ss", $user, $hash);
                mysqli_stmt_execute($statement);
                $cursor = mysqli_stmt_get_result($statement);
                $result= mysqli_fetch_all($cursor);
        

            mysqli_close($conn);
            //var_dump($result);
            if (count($result) == 0)
                echo ("Bad login!");

            else {
                echo "<h1> Welcome, $user! </h1>";
                echo "Перенаправление...";
               
                $_SESSION["user"] = $user;
                echo '<meta http-equiv="refresh" content="2; URL=calc.php"> ';
            }


        ?>

    </body>
</html>