<?php
session_start();
if ($_SESSION['user']) {
  header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Pet Aspire</title>
  <link rel="shortcut icon" href="img/pngwing.com.png">
  <link rel="apple-touch-icon" href="img/pngwing.com.png">
</head>

<header class="header">
  <a href="index.html" class="logo">Pet Aspire</a>
  <div class="icons" style="margin-right: 50px;">

    <a href="ads.html" <span id="paw-btn" class="fas fa-paw icon"></span></a>
    <a href="submit.php" <span id="plus-btn" class="fas fa-plus icon"></span></a>
    <a href="auth.php" <span id="login-btn" class="fas fa-user icon"></span></a>
    <a href="info.html" <span id="login-btn" class="fas fa-info-circle icon"></span></a>

  </div>


</header>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .bg-text {
    background-color: rgb(135, 206, 235);
    background-color: rgba(135, 206, 235, 0.3);
    color: black;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 70%;
    padding: 30px;
    text-align: center;
  }

  .button {
    height: 100%;
    border-radius: 35px;
    font-weight: bold;
    display: inline-block;
    vertical-align: top;
    background-color: #99CEEB;
  }
</style>
</head>

<body>


  <div class="bg-text">


    <body>
      <h2 style="color: black"><strong>Register</strong></h2>
      <section id="login">
        <form action="signup.php" class="" method="post">
          <div class="books">
            <label style="margin-right: 15px; padding-left: 101px" for="name">Name</label>
            <input style="border: 1px solid #808080; " name="name" type="text" class="reg" placeholder="" required
              onkeypress="return ValidateAlpha(event);"><br>
            <label style="margin-right: 15px;padding-left: 76px" for="surname">Surname</label>
            <input style="border: 1px solid #808080;" name="surname" type="text" class="reg" placeholder="" required
              onkeypress="return ValidateAlpha(event);"><br>
            <label style="margin-right: 15px;padding-left: 30px" for="phone">Phone number</label>
            <input style="border: 1px solid #808080;" name="phone" type="text" class="reg" placeholder=""
              data-inputmask="'mask': '+7 (999) 999-99-99'" required onkeypress="return isNumberKey(event)"><br>
            <label style="margin-right: 15px;padding-left: 105px" for="">Email</label>
            <input style="border: 1px solid #808080;" name="email" type="email" class="reg" placeholder="" required><br>
            <label style="margin-right: 15px;padding-left: 72px " for="password">Password</label>
            <input style="border: 1px solid #808080;" name="password" type="password" class="reg" minlength="8"
              placeholder="" required><br>
              <label style="margin-right: 15px;padding-left: 3px " for="password">Confirm password</label>
              <input style="border: 1px solid #808080;" name="password_confirm" type="password" class="reg" minlength="8"
                placeholder="" required><br>
            <input type="submit" class="button" value="Register" />
            <div class="">
              <a href="auth.php">You already have an account? Log in</a>
            </div>
            <p class="msg" style="font-weight: bold">
              <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);
              ?>
            </p>
          </div>
        </form>
      </section>
      <script src="index.js"></script>
    </body>

</html>
