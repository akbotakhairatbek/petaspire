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

  <title>Authorization</title>
  <link rel="shortcut icon" href="img/pngwing.com.png">
  <link rel="apple-touch-icon" href="img/pngwing.com.png">
</head>
<body>
      <header class="header">
          <a href="index.html" class="logo">Pet Aspire</a>
        <div class="icons" style="margin-right: 50px;">

              <a href="ads.html" <span id="paw-btn"  class="fas fa-paw icon"></span></a>
                <a href="submit.php" <span id="plus-btn" class="fas fa-plus icon"></span></a>
              <a href="auth.php" <span id="login-btn" class="fas fa-user icon"></span></a>
              <a href="info.html" <span id="login-btn" class="fas fa-info-circle icon"></span></a>

          </div>


      </header>

</body>

<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
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
    <h2 style="color: black"><strong>Log in</strong></h2>
    <form action="signin.php" method="post">
                      <div class="books">
                        <label style="padding-left: 29px" for="">Email</label>
                          <input style="border: 1px solid #808080;" name="email" type="email" class="form" placeholder="" required><br>
                          <label style="padding-left: 1px" for="password">Password</label>
                          <input style="border: 1px solid #808080;" name="password" type="password" class="form" minlength="8" placeholder="" required><br>
                          <input type="submit" class="button" value="Log in"/>
                      <div class="">
                          <a href="register.php" class="">Don't have an account? Register</a>
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
</div>
</body>
</html>
