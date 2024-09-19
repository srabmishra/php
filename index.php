<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Driving License Eligibility Check</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Check Your Driving License Eligibility</h1>
        <form method="POST" class="mt-4">
            <div class="form-group">
                <label for="age">Enter your age:</label>
                <input type="number" name="age" id="age" class="form-control my-4" placeholder="Enter your age" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if(isset($_POST['age'])){
            $age=$_POST['age'];
            if ($age < 18) {
                echo '<div class="alert alert-danger mt-4">You are not eligible for a driving license.</div>';
            } elseif ($age >= 18 && $age <= 70) {
                echo '<div class="alert alert-success mt-4">You are eligible for a driving license.</div>';
            } else {
                echo '<div class="alert alert-warning mt-4">You are too old for taking a license.</div>';
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
