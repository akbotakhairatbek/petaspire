<?php
session_start();
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

  <title>Submit an ad</title>
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

          <div class="favorite-container">
              <h2 class="favorite-title">your favorite list</h2>
              <div id="favorite-list-container">
              </div>
          </div>
      </header>
</body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
height: 100%;
margin: 0;
}


.bg-image {
  background-image: url(" img/1.jpeg");
  filter: blur(2px);
  -webkit-filter: blur(2px);
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

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
height: 75%;
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

.form-control {
  height: 50%;
    border: 0.1px solid black;
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
    font-size: 15px;
    min-height: 100px;
    outline: 0;
}
</style>


    <div class="bg-text">
  <section id="ad">

      <h2 style="color: black"><strong>Post an ad</strong></h2>
    <form action="submission.php" class="" method="post" enctype="multipart/form-data">
                      <div class="books">
                          <label  for="title">Title</label>
                          <input style="border: 1px solid #808080;" name="title" type="text" class="form" placeholder=" " required><br>
                          <label  style="vertical-align: 140px; "for="title">Description</label>
                          <textarea style="height: 150px; width: 250px; border: 1px solid #808080;margin-right: 25px;  " name="description" type="text-area" class="form" placeholder=" " required></textarea><br>
                          <input type="file" id="img" name="img"><br><br>
                          <label  for="">Full name</label>
                          <input style="margin-right: 40px; padding-left: 3px; border: 1px solid #808080;" name="name" type="text" class="form" placeholder=" " required><br>
                          <label  for="">Email</label>
                          <input style="margin-right: 9px; border: 1px solid #808080;" name="email" type="email" class="form" placeholder=" " required><br>
                          <label  for="">Phone number</label>
                          <input style="margin-right: 85px; padding-left: 0px; border: 1px solid #808080;" name="phone" type="text" class="form" placeholder=" " data-inputmask="'mask': '+7 (999) 999-99-99'" required onkeypress="return isNumberKey(event)"><br>
                          <input type="submit" class="button" value="Submit" onclick="goHome()"/>
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
