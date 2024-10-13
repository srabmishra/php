<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Runner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/stylesheet.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Code Runner</h1>
        <form method="post">
            <div class="form-group">
                <label for="code">Enter your HTML/JS code:</label>
                <textarea class="form-control bg-black font-color-light" id="code" name="code" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Run Code</button>
        </form>
    </div>


<?php
if(isset ($_POST["code"])){
    $userCode = $_POST['code'];

    file_put_contents('output.html', $userCode);
    
    header('Location: output.php');

}
?>
</body>
</html>