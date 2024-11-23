<?php
session_start();

require_once 'functions.php';

$errors = [
    'required' => 'All inputs are required! (no empty fields are allowed)',
    'invalidUsername' => 'Username cannot contain empty spaces or special signs!',
    'emailChars' => 'Email must have at least 5 characters before @',
    'invalidEmail' => 'Email must be a valid email.',
    'invalidPassword' => 'Password must have at least one number, special sign and uppercase letter.',
    'invalidPhoneNumber' => 'Phone number needs to be a number.',
    'notAdult' => 'The user needs to be an adult'
];

$formErrors = [];
$data = [
    'name' => $_POST['name'] ?? '',
    'surname' => $_POST['surname'] ?? '',
    'email' => $_POST['email'] ?? '',
    'username' => $_POST['username'] ?? '',
    'phone' => $_POST['phone'] ?? '',
    'dob' => $_POST['dob'] ?? '',
    'password' => $_POST['password'] ?? ''
];

if (!isEmpty($data['name'], $data['surname'], $data['email'], $data['username'], $data['phone'], $data['dob'], $data['password'])) {
    $formErrors['required'] = $errors['required'];
}

if (!isValidUsername($data['username'])) {
    $formErrors['username'] = $errors['invalidUsername'];
}

$emailValidation = isValidEmail($data['email']);
if ($emailValidation !== true) {
    $formErrors['email'] = $errors[$emailValidation];
}

if (!isValidPassword($data['password'])) {
    $formErrors['password'] = $errors['invalidPassword'];
}

if (!isValidPhoneNumber($data['phone'])) {
    $formErrors['phone'] = $errors['invalidPhoneNumber'];
}

if (!isAdult($data['dob'])) {
    $formErrors['dob'] = $errors['notAdult'];
}

if (count($formErrors) > 0) {
    $_SESSION['formErrors'] = $formErrors;
    $_SESSION['data'] = $data;
    header('Location: index.php');
    exit();
}

$_SESSION['success_message'] = 'Form submitted successfully!';
unset($_SESSION['data']);
unset($_SESSION['formErrors']);

header('Location: index.php');
exit();
