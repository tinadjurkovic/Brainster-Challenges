<?php

function isEmpty($name, $surname, $email, $username, $phone, $dob, $password)
{
    return !(empty($name) || empty($surname) || empty($email) || empty($username) || empty($phone) || empty($dob));
}

function isValidUsername($username)
{
    return !preg_match('/[^a-zA-Z0-9]/', $username);
}

function isValidEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'invalidEmail';
    }
    if (strpos($email, '@') <= 5) {
        return 'emailChars';
    }
    return true;
}


function isValidPassword($password)
{
    return preg_match('/[A-Z]/', $password) && preg_match('/\d/', $password) && preg_match('/[^\w]/', $password);
}

function isValidPhoneNumber($phone)
{
    return is_numeric($phone);
}

function isAdult($dob)
{
    $dob = new DateTime($dob);
    $now = new DateTime();
    $age = $now->diff($dob);
    return $age->y >= 18;
}