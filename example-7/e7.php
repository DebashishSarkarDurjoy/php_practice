<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <title>Example 7 PHP</title>
  </head>
  <body>
    <?php

        if (empty($_POST["pizza"])) {
            echo "<p> No pizza selected </p>";
            exit;
        }
        if(count($_POST["pizza"]) > 3) {
            echo "<p> " . count($_POST["pizza"]) . " selected </p>";
        }

        $total = 0;
        foreach($_POST["pizza"] as $val) {
            $total = $total + $val;
        }
        echo "<p> total price of pizza is $total </p>";


     ?>

  </body>
</html>
