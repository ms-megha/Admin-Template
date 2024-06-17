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
     <?php
     session_unset();
     session_destroy();
     // echo $_SESSION['email'];die;
     if (!$_SESSION['email']) {
       header('Location: login.php');
     }
      ?>
   </body>
 </html>
