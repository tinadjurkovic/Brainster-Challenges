<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            text-align: center;
            color: white;
        }

        .form-label {
            display: inline-block;
            width: 100%;
        }

        .form-control {
            border: 2px solid;
            border-color: lightpink;
            width: 100%;
        }

        .btn {
            background-color: pink;
            color: white;
        }

        .form-group {
            position: relative;
            margin-bottom: 2.5rem;
        }

        .form-error {
            position: absolute;
            top: 100%;
            left: 0;
            font-size: 0.8rem;
            color: red;
            white-space: nowrap;
            line-height: 1.35;
            width: 150%;
            text-align: left;
        }
    </style>
</head>

<body>
    <div>
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['success_message'];
                unset($_SESSION['success_message']);
                ?>
            </div>
        <?php endif; ?>


        <form action="action.php" method="POST" class="d-flex flex-column justify-content-center align-items-center">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Enter your name: </label>
                <input type="text" class="form-control" id="name" name="name"
                    value="<?= $_SESSION['data']['name'] ?? '' ?>">
                <?php if (isset($_SESSION['formErrors']['required'])): ?>
                    <div class="text-danger form-error"><?= $_SESSION['formErrors']['required'] ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group mt-2 mb-3">
                <label for="surname" class="form-label">Enter your surname: </label>
                <input type="text" class="form-control" id="surname" name="surname"
                    value="<?= $_SESSION['data']['surname'] ?? '' ?>">
                <?php if (isset($_SESSION['formErrors']['required'])): ?>
                    <div class="text-danger form-error"><?= $_SESSION['formErrors']['required'] ?></div>
                <?php endif; ?>
            </div>
            <div class=" form-group mt-2 mb-3">
                <label for="email" class="form-label">Enter your email: </label>
                <input type="email" class="form-control" id="email" name="email"
                    value="<?= $_SESSION['data']['email'] ?? '' ?>">
                <?php if (isset($_SESSION['formErrors']['email'])): ?>
                    <div class="text-danger form-error"><?= $_SESSION['formErrors']['email'] ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group mt-2 mb-3">
                <label for="username" class="form-label">Enter your username: </label>
                <input type="text" class="form-control" id="username" name="username"
                    value="<?= $_SESSION['data']['username'] ?? '' ?>">
                <?php if (isset($_SESSION['formErrors']['username'])): ?>
                    <div class="text-danger form-error"><?= $_SESSION['formErrors']['username'] ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group mt-2 mb-3">
                <label for="phone" class="form-label">Enter your phone number: </label>
                <input type="tel" class="form-control" id="phone" name="phone"
                    value="<?= $_SESSION['data']['phone'] ?? '' ?>">
                <?php if (isset($_SESSION['formErrors']['phone'])): ?>
                    <div class="text-danger form-error"><?= $_SESSION['formErrors']['phone'] ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group mt-2 mb-3">
                <label for="password" class="form-label">Enter your password: </label>
                <input type="password" class="form-control" id="password" name="password"
                    value="<?= $_SESSION['data']['password'] ?? '' ?>">
                <?php if (isset($_SESSION['formErrors']['password'])): ?>
                    <div class="text-danger form-error"><?= $_SESSION['formErrors']['password'] ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group mt-2 mb-3">
                <label for="dob" class="form-label">Enter your date of birth: </label>
                <input type="date" class="form-control" id="dob" name="dob"
                    value="<?= $_SESSION['data']['dob'] ?? '' ?>">
                <?php if (isset($_SESSION['formErrors']['dob'])): ?>
                    <div class="text-danger form-error"><?= $_SESSION['formErrors']['dob'] ?></div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>

</html>