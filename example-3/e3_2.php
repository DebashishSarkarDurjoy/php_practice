<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <title>example 3 php practice</title>
    </head>
    <body>
        <?php

            $firstName = $_GET["fname"];
            $lastName = $_GET["lname"];
            $petPreference = $_GET["pet"];

            echo "<p> $firstName $lastName likes $petPreference </p>";

         ?>
    </body>
</html>
