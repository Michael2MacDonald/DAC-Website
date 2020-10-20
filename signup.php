<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup | DAC</title>
    <link rel="shortcut icon" href="../img/dacLogoEditedForWebLogo.png"/>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/include.js"></script>
  </head>
  <body>
    <div class="header">
      <div w3-include-html="../include/header.php" class="navbar"></div>
    </div>

    <div class="main">

      <form class="signupForm" action="../include/signup.inc.php" method="post">
        <h1>Signup</h1>
        <p>Creating an account allows you to chat with other members of the club, share and view projects, and exchange ideas!</p>
        <?php
				if (isset($_GET['uid'])) {
				  $uid = $_GET['uid'];
				  echo '
          <div class="signupInputWrapper">
            <input class="signupInput" type="text" name="uid" value="'.$uid.'" placeholder="Username">
          </div>';
				}
				else {
				  echo '
          <div class="signupInputWrapper">
            <input class="signupInput" type="text" name="uid" placeholder="Username" autofocus>
          </div>';
				}
				if (isset($_GET['mail'])) {
				  $mail = $_GET['mail'];
				  echo '
          <div class="signupInputWrapper">
            <input class="signupInput" type="text" name="mail" value="'.$mail.'" placeholder="Email">
          </div>';
				}
				else {
				  echo '
          <div class="signupInputWrapper">
            <input class="signupInput" type="text" name="mail" placeholder="Email" autofocus>
          </div>';
        }?>
        <div class="signupInputWrapper">
          <input class="signupInput" type="text" name="unid" placeholder="Full Name">
        </div>
        <div class="signupInputWrapper">
          <input class="signupInput" type="password" name="pwd" placeholder="Password">
        </div>
        <div class="signupInputWrapper">
          <input class="signupInput" type="password" name="pwd-repeat" placeholder="Repeat Password">
        </div>
        <button class="signupButton" type="submit" name="signup-submit" style="color: white;">Signup</button>
      </form>

    </div>

    <div w3-include-html="../include/footer.php"></div>

    <script>includeHTML();</script>
    <script type="text/javascript">
      window.onload = function () {
        var d = document.getElementById("signup");
        d.className += " navbarButtonCurrent";
      };
    </script>
  </body>
</html>
