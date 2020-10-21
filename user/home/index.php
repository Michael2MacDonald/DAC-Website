<?php
  session_start();
  if(!isset($_SESSION['userId'])){
     header("Location:/");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Home | DAC</title>
    <link rel="shortcut icon" href="/img/dacLogoEditedForWebLogo.png"/>
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/include.js"></script>
  </head>
  <body>
    <div class="header">
      <div w3-include-html="/include/header.php" class="navbar"></div>
    </div>
    <!-- <div w3-include-html="/user/userMenu.php" class="userMenuWrapper"></div> -->
    <div class="main">

    </div>

    <div w3-include-html="/include/footer.php"></div>
    <script>includeHTML();</script>
  </body>
</html>
