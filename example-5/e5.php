<?php $max = $_POST["number"]; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>example 5</title>
    </head>
    <body>
        <h1>I can count to: <?php echo $max; ?></h1>
        <?php for($i = 1; $i <= $max; $i++): ?>
            <?php echo $i ?> <br>
        <?php endfor; ?>
    </body>
</html>
