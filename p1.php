<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP example </title>
</head>

<body>
    <h1> lets count </h1>
    <p>
        <?php
            $MAX_COUNT = 10;
            echo "I can count to $MAX_COUNT: <br>";
            for ($i = 1; $i <= $MAX_COUNT; $i++) {
                echo "$i<br>";
            }
         ?>
    </p>
</body>

</html>
