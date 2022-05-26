<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <header class="header">
         <a href="index.html" class="logo">Pet Aspire</a>
         <div class="icons">

             <a href="ads.html" <span id="paw-btn"  class="fas fa-paw icon"></span></a>
               <a href="submit.html" <span id="plus-btn" class="fas fa-plus icon"></span></a>
             <a href="auth.html" <span id="login-btn" class="fas fa-user icon"></span></a>
             <span id="favorite-btn" class="fas fa-heart icon"></span>
             <input style="font-size: 17px;   padding-left: 4px; margin-left: 20px; " type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
             <span  style="font-size: 18px;  margin-left: 5px; margin-right: 30px; " class="input-group-text border-0" id="search-addon">
             <i class="fas fa-search"></i>
             </span>
         </div>

         <div class="favorite-container">
             <h2 class="favorite-title">your favorite list</h2>
             <div id="favorite-list-container">
             </div>
         </div>
     </header>
   </body>
 </html>
