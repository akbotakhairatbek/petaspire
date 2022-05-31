<?php
session_start();
if (!$_SESSION['user']) {
  header('Location: auth.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="img/pngwing.com.png">
        <link rel="apple-touch-icon" href="img/pngwing.com.png">
    <title>Pet Aspire</title>



</head>


<body>

  <header class="header">
      <a href="index.html" class="logo">Pet Aspire</a>
      <div class="icons" style="margin-right: 50px;">

          <a href="ads.html" <span id="paw-btn"  class="fas fa-paw icon"></span></a>
            <a href="submit.php" <span id="plus-btn" class="fas fa-plus icon"></span></a>
          <a href="auth.php" <span id="login-btn" class="fas fa-user icon"></span></a>
          </span>
      </div>
    </header><br><br><br><br><br>

    <style>

    .bg-text {
      background-color: rgb(135, 206, 235);
      background-color: rgba(135, 206, 235, 0.3);
    color: black;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 70%;
    padding: 20px;
    text-align: center;
    }

    .button {
    height: 100%;
    border-radius: 35px;
    font-weight: bold;
    display: inline-block;
    vertical-align: top;
    margin-top: 30px;
    background-color: #99CEEB;
    }
    </style>
    <div class="bg-text">
    <section id="login">
      <h2 style="color: black"><strong>Profile</strong></h2>
      <form action="signin.php" method="post">
                        <div class="books">
                          <img src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png"  style="width: 100px; height:100px" alt=""><br>
                          <label style="font-size: 2rem">Name: </label>
                          <h2 style="margin:10px 0; display: inline"><a style="display: inline; font-size: 2rem"><?= $_SESSION['user']['name'] ?></a></h2><br>
                        <label style="font-size: 2rem">Email: </label>
                          <h2 style="margin:10px 0; display: inline; font-size: 2rem"><?= $_SESSION['user']['email'] ?><br><br>
                          <a href="logout.php" class="button" class="logout" style="color: #fff; margin-top: -10px;">Log out</a>
                        </div>




</body>

</html>
