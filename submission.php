<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}

// connect to database
require_once("conn.php");

// get data from $_POST and clear data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

// validate data if required

$path = 'uploads/' . time() . $_FILES['img']['name'];
if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
  $_SESSION['message'] = 'Error. Try again.';
  header('Location: /submit.php');
}
// insert record to database
$sql = "INSERT INTO ads (name, phone_number, email, title, description, img) VALUES ('$name', '$phone', '$email', '$title', '$description', '$path')";

if (mysqli_query($conn, $sql)) {
    // redirect back
    $_SESSION['message'] = 'You posted an ad succesfully!';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
