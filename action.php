<?php

require_once 'functions.php';
require_once 'constant.php';

checkRequestMethod();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];

if (empty($firstName) || empty($lastName) || empty($username) || empty($telephone) || empty($password)) {
    redirect(INDEX, "error=required");
}

checkUsernameMinLength($username);
checkPasswordMinLength($password);
checkPasswordStrength($password);
checkUsernameUnique($username);

createUsersFolder();
addUsernameToFile($username);

$userData = [$firstName, $lastName, $username, $telephone, $password];
createUserFolderAndFile($firstName, $lastName, $userData);

redirect(INDEX, "success=submit");
