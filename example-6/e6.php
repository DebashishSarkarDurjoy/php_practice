<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h1> Your favourite sports </h1>";

            if (empty($_GET["sport"])) {
                echo "you didnt answer the question";
            }
            else {
                echo "<p> You selected " . count($_GET["sport"]) . " sports that you like: </p>";

                foreach($_GET["sport"] as $sport) {
                    echo "<p> $sport </p>";
                }
            }


         ?>
    </body>
</html>
