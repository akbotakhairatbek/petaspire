<?php
    // check if request if post
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
    session_start();

    // connect to database
    require_once("conn.php");

    // get data from $_POST and clear data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($conn, $_POST['password_confirm']);

    if ($password === $password_confirm) {
      //con..
    } else {
      $_SESSION['message'] = 'Passwords do not match';
      header('Location: /register.php');
    }

    if (mb_strlen($phone) != 11) {
      $_SESSION['message'] = 'Phone number should be 11 characters';
      header('Location: /register.php');
    }

    // validate data if required

    // hash password
    $hash = md5($password);

    // insert record to database
    $sql = "INSERT INTO users (name, surname, phone_number, email, password) VALUES ('$name', '$surname', '$phone', '$email', '$hash')";

    if (mysqli_query($conn, $sql)) {
        // redirect back
        header('refresh:5;url=/');
        echo "Success. Redirect back after 5 seconds";
        die();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
