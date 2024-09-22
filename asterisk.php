<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asterisk Pattern Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 ">
    <?php
     for($i=1; $i<=5; $i++){
        for($j=1; $j<=$i; $j++){ echo "* ";}
        echo " ","<br>";};

    echo"<hr>";

    for($i=1; $i<=5; $i++){
        for($j=1; $j<=$i; $j++){ echo " *";}
        echo " ","<br>";};
    for($i=1; $i<=5; $i++){
        for($j=5; $j>=$i; $j--){ echo " *";}
        echo " ","<br>";};

    echo"<hr>";
    ?>
    </div>

</body>
</html>