<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="widht=device-widht, initial-scale=1.0" >

    <title>create_acc</title>

    <body>
    <a href="index.html">Index</a>
        <?php
            $user = $_REQUEST['user'];
            $Address = $_REQUEST['Address'];
            $pwd = $_REQUEST['pwd'];
            $hash = hash("sha256", $pwd);
           //echo $hash;
            include("../../params//billing.php");

            $conn = mysqli_connect($db_server,$db_user,$db_pwd,"billing");
            $sql = "INSERT INTO users(Login, Pwdhash, Address) VALUES('$user', '$hash', '$Address')";
           // echo $sql;

          mysqli_query($conn, $sql);

         //$statement = mysqli_prepare($conn,$sql);
         //mysqli_stmt_bind_param($statement, "ss", $user, $hash);
          //mysqli_stmt_execute($statement);
          //$cursor = mysqli_stmt_get_result($statement);
          //$result= mysqli_fetch_all($cursor);
            
            
            mysqli_close($conn);

            if (count($mysqli_result) == 0)
                echo ("Operation fault");

            else {
                echo "<h1> Welcome, $user! </h1>";
                echo "Перенаправление...";
               
                $_SESSION["user"] = $user;
                echo '<meta http-equiv="refresh" content="2; URL=index.html"> ';
            }


        ?>

    </body>
</html>