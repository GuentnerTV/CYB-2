<html>
    <head>
        <title>PHP</title>
        

    </head>
    <body>
    <a href="index.html">Index</a>
        <h1>Привет PHP</h1>
        <link rel="stylesheet" href="css/main.css" >

        <?php
            $x = 2;
            $y = 2;
            $z = $x + $y;
            echo "Результат: $z";

            $now = date("H:i:s");
            echo "<h2>Время $now</h2>"

        ?>
    </body>     
</html>