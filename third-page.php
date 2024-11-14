<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2a4e18524e.js" crossorigin="anonymous"></script>
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

        .go-back {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <a href="first-page.php" class="go-back"><i class="fa-solid fa-arrow-left"></i> Go back
        to first page</a>


    <?php
    session_start();

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<h2 class='d-flex justify-content-center'>WELCOME " . htmlspecialchars($username) . "</h2>";
    }
    ?>

</body>

</html>