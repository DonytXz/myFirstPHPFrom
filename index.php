<?php
$errors = '';
$sended = 'false';
$success = 'Sended Form';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $msg = $_POST['msg'];
    if (!empty($name) && !empty($email) && !empty($pass) && !empty($msg)) {
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors = 'Email invalid';
        }
        $pass = trim($pass);
        $pass = filter_var($pass, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $msg = trim($msg);
        $msg = htmlspecialchars($msg);
        $msg = stripslashes($msg);
    } else {
        $errors .= 'Please enter all the fields<br>';
    }
    if (!$errors) {
        $destinationAddress = 'firstphpform@yopmail.com';
        $subject = 'Learning PHP';
        $msgProcess = "From . $name \n";
        $msgProcess .= "Email: $email \n";
        $msgProcess .= "`Message: $msg \n";

        mail((string)$destinationAddress, (string)$subject, (string)$msgProcess);
        $sended = 'true';
    }
}
require 'index.view.php';
