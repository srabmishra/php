<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd Numbers</title>
</head>
<body>
    <h1>Even Numbers</h1>

    <h2>Using While Loop</h2>
    <?php
    $i = 0;
    while ($i <= 20) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i++;
    }
    ?>

    <h2>Using Do-While Loop</h2>
    <?php
    $j = 0;
    do {
        if ($j % 2 == 0) {
            echo $j . " ";
        }
        $j++;
    } while ($j <= 20);
    ?>

    <h2>Using For Loop</h2>
    <?php
    for ($k = 0; $k <= 20; $k++) {
        if ($k % 2 == 0) {
            echo $k . " ";
        }
    }
    ?>

    <h1>Odd Numbers</h1>

    <h2>Using Foreach Loop</h2>
    <?php
    $numbers = range(1, 20);
    foreach ($numbers as $num) {
        if ($num % 2 != 0) {
            echo $num . " ";
        }
    }
    ?>
</body>
</html>