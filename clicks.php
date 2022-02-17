<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="widht=device-widht, initial-scale=1.0" >

    <title>Clicks</title>
</head>
<body>
  <h1>Clicks </h1>
  <form>
    <button>click here</button>
   </form>
   
   <?php


        if (isset ($_COOKIE["clicks"]))
        $_i =  $_COOKIE["clicks"];
            else
                 $i = 0;
                 $i += 1;
   // if (isset($_SESSION['clicks']))
    //$i = $_SESSION['clicks'];
               

    echo "число щелчков $i";
    //$_SESSION['clicks'] = $i;
    setcookie("clicks", $i, time() + 20);


    ?>
   



</body>

</html>