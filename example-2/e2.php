<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <title>example 2 php</title>
    </head>
    <body>
        <h1>lets count</h1>
        <?php
            $num = $_GET["number"];
            echo "<p> I can count to $num: <br>";
            for ($i = 1; $i <= $num; $i++) {
                echo "$i <br>";
            }

         ?>
    </body>
</html>
