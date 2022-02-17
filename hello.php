<html>
    <head>
        <title>PHP</title>
        

    
   
        <h1>Привет PHP</h1>
        <link rel="stylesheet" href="css/main.css" />
        </head>
        <body>
<a href="index.html">Index</a>

        <?php
            $x = 2;
            $y = 2;
            $z = $x + $y;
            echo "Результат: $z";

            $hour = date("H");
           
            if ($hour < 5)
                echo "<h1> Dobrui nochi </h1>";


                if ($hour >= 5 and $hour < 12)
                echo "<h1> Dobrui utro</h1>";

                if ($hour >= 5 and $hour < 19)
                echo "<h1> Dobrui den</h1>";

                if ($hour >= 19)
                echo "<h1> Dobrui vecher</h1>";




        ?>
    </body>     
</html>