<?php
require_once 'functions.php';
require_once 'constant.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #fff0f3;
        }
    </style>
</head>

<body>
    <div>
        <?php
        successMessage();
        errorMessages();
        ?>
    </div>
    <div class="d-flex justify-content-center">
        <form action="action.php" method="POST">
            <div class="mb-3 mt-5">
                <label for="firstName" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label"> Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label"> Phone number:</label>
                <input type="tel" class="form-control" id="telephone" name="telephone">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</body>

</html>