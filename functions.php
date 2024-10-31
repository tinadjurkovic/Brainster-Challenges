<?php

require_once 'constant.php';

function checkRequestMethod(): void
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        redirect(INDEX);
    }
}

function redirect($url, $queryString = '')
{
    if ($queryString != '') {
        $url .= "?$queryString";
    }

    header("Location: " . $url);
    exit();
}

function errorMessages()
{
    $errorMessages = [
        'shortusername' => 'Username must contain at least 4 characters.',
        'shortpassword' => 'Password must contain at least 6 characters.',
        'invalidpassword' => 'Password must contain at least 1 lowercase, uppercase, number, and special character.',
        'usernametaken' => 'Username taken, choose another one.',
        'required' => 'All fields are required.'
    ];
    if (isset($_GET['error']) && isset($errorMessages[$_GET['error']])) {
        echo '<p class="alert alert-danger">' . $errorMessages[$_GET['error']] . '</p>';
    }
}

function successMessage()
{
    $successMessage = [
        'submit' => 'Welcome to our page.',
    ];
    if (isset($_GET['success']) && isset($successMessage[$_GET['success']])) {
        echo '<p class="alert alert-success">' . $successMessage[$_GET['success']] . '</p>';
    }
}


function checkUsernameMinLength($username, $minLenght = 4)
{
    if (strlen($username) < $minLenght) {
        redirect(INDEX, 'error=shortusername');
    }
}

function checkPasswordMinLength($password, $minLenght = 6)
{
    if (strlen($password) < $minLenght) {
        redirect(INDEX, 'error=shortpassword');
    }
}

function checkPasswordStrength($password)
{
    if (
        !preg_match('/[a-z]+/', $password)
        || !preg_match('/[A-Z]+/', $password)
        || !preg_match('/[0-9]+/', $password)
        || !preg_match('/[!@#\$%\^&\*]+/', $password)
    ) {
        redirect(INDEX, 'error=invalidpassword');
    }
}

function checkUsernameUnique($username)
{
    $data = file_get_contents('Users/users.txt');
    $users = explode(PHP_EOL, $data);

    foreach ($users as $user) {
        if (strtolower(trim($user)) == strtolower(trim($username))) {
            redirect(INDEX, 'error=usernametaken');
        }
    }
}

function createUsersFolder(): void
{
    if (!is_dir('Users')) {
        mkdir('Users');
    }
}

function addUsernameToFile($username): void
{
    $filePath = 'Users/users.txt';
    if (!file_exists($filePath)) {
        file_put_contents($filePath, $username . PHP_EOL);
    } else {
        file_put_contents($filePath, $username . PHP_EOL, FILE_APPEND);
    }
}

function createUserFolderAndFile($firstName, $lastName, $data): void
{
    $folderName = "Users/{$firstName}_{$lastName}";
    if (!is_dir($folderName)) {
        mkdir($folderName);
    }

    $filePath = "$folderName/{$firstName}.txt";
    file_put_contents($filePath, implode(',', $data));
}
