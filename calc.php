<?php
    session_start();
    if (!isset ($_SESSION["user"] )){
        echo '<meta http-equiv="refresh" content="2; URL=login.php"> ';
        
        die ("Требуеться логин! Вы будуту перенаправлены");


    }
?>    


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calc</title>
    <link rel="stylesheet" href="css/main.css"/>
    <style>
        input{
            margin-bottom: 10px;
            width: 170px;
            text-align: center;
        }
        button {
            margin-bottom: 10px;
            margin-right: 5px;
            width: 83px;
        }

    </style>
    <script>
        function plus(){
            x = parseInt (document.getElementById("txtX").value);
            y = parseInt (document.getElementById("txtY").value);
           // z = x + y ;
            URL= "api/plus.php?x= " + x + "&y=" + y;
            xhr = new XMLHttpRequest();
            xhr.open("GET", URL, false);
            xhr.send();
            z = xhr.responseText;


            document.getElementById("txtZ").value = z;

        }
        function minus(){
            x = parseInt (document.getElementById("txtX").value);
            y = parseInt (document.getElementById("txtY").value);
            z = x - y ;
            URL= "api/minus.php?x= " + x + "&y=" + y;
            xhr = new XMLHttpRequest();
            xhr.open("GET", URL, false);
            xhr.send();
            z = xhr.responseText;



            document.getElementById("txtZ").value = z;

        }



    </script>
</head>
<body>
    <a href="index.html">Index</a>
    <h1>Калькулятор</h1>
    <input id="txtX" /> </br>
    <input id="txtY" /> </br>
    <button onclick="plus()">+</button>
    <button onclick="minus()">-</button></br>

     
    <input id="txtZ" />
</body>


</html>