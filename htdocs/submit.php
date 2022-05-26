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


// insert record to database
$sql = "INSERT INTO ads (name, phone_number, email, title, description) VALUES ('$name', '$phone', '$email', '$title', '$description')";

if (mysqli_query($conn, $sql)) {
    // redirect back
    header('refresh:5;url=/');
    echo "Success. Redirect back after 5 seconds";
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
