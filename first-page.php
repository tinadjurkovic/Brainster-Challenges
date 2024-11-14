<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sign Up/Login Page</title>
    <style>
        body {
            background-image: url('./Assets/img.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
        }

        .buttons {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .buttons a {
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center buttons">
        <a href='second-page.php' class="btn btn-dark mb-3">Sign Up</a>
        <a href='fourth-page.php' class="btn btn-dark">Login</a>
    </div>

</body>

</html>