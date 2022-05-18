<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <title>example 3 php</title>
    </head>
    <body>
        <?php

            $first = $_GET["fname"];
            $last = $_GET["sname"];
            $petPreference = $_GET["pet"];

            echo "<p> Welcome $first $last,
                    you told us that you prefer $petPreference as pets</p>";

         ?>
    </body>
</html>
