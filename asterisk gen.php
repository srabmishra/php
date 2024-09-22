<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asterisk Pattern Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Asterisk Pattern Generator</h2>
    <form method="POST" class="mt-3">
        <div class="form-group">
            <label for="rows">Enter number of rows:</label>
            <input type="number" name="rows" id="rows" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Pattern</button>
    </form>
    <div class="mt-4">
        <?php
        if(isset($_POST['rows'])){
            $rows=$_POST['rows'];
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "</br>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>