<?php
session_start();

$errors = [
    'invalid_credentials' => 'Wrong username/password combination.'
];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: first-page.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $filename = 'users.txt';

    if (!file_exists($filename) || !is_readable($filename)) {
        header('Location: second-page.php?error=invalid_credentials');
        exit;
    }

    $users = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        $user_data = explode('=', $user);
        $stored_username = $user_data[0];
        $hashed_password = $user_data[1];

        if ($stored_username === $username && password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;

            header('Location: third-page.php?username=' . $username);
            exit;
        }
    }

    header('Location: fourth-page.php?error=invalid_credentials');
    exit;
}
