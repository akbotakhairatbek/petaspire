<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}
session_start();

// connect to database
require_once("conn.php");

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$hash = md5($password);


$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$hash'");
if (mysqli_num_rows($check_user) > 0) {
  $user = mysqli_fetch_assoc($check_user);

  $_SESSION['user'] = [
    "id" => $user['id'],
    "name" => $user['name'],
    "surname" => $user['surname'],
    "email" => $user['email'],
    "phone_number" => $user['phone']
  ];
  header('Location: profile.php');

} else {
  $_SESSION['message'] = 'Incorrect login or password';
  header('Location: auth.php');
}
?>
