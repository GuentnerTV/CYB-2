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
        
        include("../../params/billing.php");

        $hpwd = hash("sha256", $pwd);
    
        include("../../params/billing.php");
        $conn = mysqli_connect($db_server, $db_user, $db_pwd, "billing");
    
        $sql = "SELECT * FROM users WHERE login=?;";
        $statement = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($statement, "s", $user);
        mysqli_stmt_execute($statement);
        $cursor = mysqli_stmt_get_result($statement);
        $result = mysqli_fetch_all ($cursor);
        mysqli_close($conn);
    
        if (count($result) != 0){
            echo("Невозможно, такой пользователь уже существует...");
            die('<meta http-equiv="refresh" content="2; URL=register.php">');
        }
    
        $conn = mysqli_connect($db_server, $db_user, $db_pwd, "billing");
        $sql = "INSERT INTO users (login, Pwdhash, Address) VALUES ( ?, ?, ?);";
        $statement = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($statement, "sss", $user, $hpwd, $Address);
        mysqli_stmt_execute($statement);
        $cursor = mysqli_stmt_get_result($statement);
        // var_dump($statement);
        // var_dump($cursor);
        $result = $cursor;
        mysqli_close($conn);
        var_dump($result);
    
        if ($result==false)
        {
            $_SESSION["user"] = $user;
            echo "<h1>Welcome, $user!</h1>";
            echo "Перенаправление...";
            echo '<meta http-equiv="refresh" content="2; URL=index.html">';
        }
        else{
            echo"$result";
            echo "Oшибка регистрации...";
            die('<meta http-equiv="refresh" content="2; URL=register.php">');
        }
    
      
        ?>

    </body>
</html>