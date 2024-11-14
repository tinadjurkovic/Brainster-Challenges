<?php
session_start();

$errors = [
    'empty_fields' => 'All fields are required.',
    'username_taken' => 'This username is taken.',
    'write_failed' => 'Sign up failed.',
    'email_taken' => 'A user with this email already exists.'
];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: first-page.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $filename = 'users.txt';

    if (empty($username) || empty($password) || empty($email)) {
        header('Location: second-page.php?error=empty_fields');
        exit;
    }

    if (!file_exists($filename)) {
        touch($filename);
    }

    $users = file($filename, FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        $parts = explode(',', $user);
        $existing_email = $parts[0];
        $existing_user_info = isset($parts[1]) ? $parts[1] : '';

        $user_info_parts = explode('=', $existing_user_info);
        $existing_username = isset($user_info_parts[0]) ? $user_info_parts[0] : '';

        if ($existing_username === $username) {
            header('Location: second-page.php?error=username_taken');
            exit;
        }

        if ($existing_email === $email) {
            header('Location: second-page.php?error=email_taken');
            exit;
        }
    }


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (file_put_contents($filename, "$email,$username=$hashed_password" . PHP_EOL, FILE_APPEND) !== false) {
        $_SESSION['username'] = $username;
        header('Location: third-page.php?username=');
        exit;
    } else {
        header('Location: second-page.php?error=write_failed');
        exit;
    }
}