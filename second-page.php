<?php
session_start();

$errors = [
    'empty_fields' => 'All fields are required.',
    'username_taken' => 'This username is taken.',
    'write_failed' => 'Sign up failed.',
    'email_taken' => 'A user with this email already exists'
];

$error_message = '';
if (isset($_GET['error']) && array_key_exists($_GET['error'], $errors)) {
    $error_message = $errors[$_GET['error']];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f2f0f3;
        }

        .yellow-text {
            color: yellow;
            background-color: black;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
        <h3 class="fw-bold text-underline text-center" style="font-style: italic; text-decoration: underline;">
            Sign Up Form
        </h3>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="signup.php" method="POST" class="p-4 border rounded d-flex flex-column align-items-center"
            style="width: 300px; background-color:white;">

            <?php if ($error_message): ?>
                <div
                    class="alert <?php echo ($_GET['error'] === 'username_taken' || $_GET['error'] === 'email_taken') ? 'yellow-text' : 'alert-danger'; ?> mb-3">
                    <?php echo htmlspecialchars($error_message); ?>
                </div>
            <?php endif; ?>

            <label for="username" class="form-label"></label>
            <input id="username" name="username" type="text" class="form-control mb-3"
                placeholder="Enter your username">

            <label for="password" class="form-label"></label>
            <input id="password" name="password" type="password" class="form-control mb-3"
                placeholder="Enter your password">

            <label for="email" class="form-label"></label>
            <input id="email" name="email" type="email" class="form-control mb-3" placeholder="Enter your email">

            <button class="btn btn-dark">Sign Up</button>
        </form>
    </div>
</body>

</html>