<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Join | DAC</title>
    <link rel="shortcut icon" href="../img/dacLogoEditedForWebLogo.png"/>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/include.js"></script>
  </head>
  <body>
    <div class="header">
      <div w3-include-html="../include/header.php" class="navbar"></div>

      <div class="heroImage" style="background-color: #492f92;">
        <div class="heroText">
          <p><strong>Join DAC</strong></p>
        </div>
      </div>
    </div>

    <div class="main">
      <div class="container">
        <h1>Why Join?</h1>
        <p>stuff</p>
      </div>
      <div class="container">
        <h1>How To Join</h1>
        <p>Do things</p>
        <p>our discord server: <a href="https://discord.gg/uh5qdtG/">https://discord.gg/uh5qdtG/</a></p>
      </div>
    </div>

    <div w3-include-html="../include/footer.php"></div>
    <script>includeHTML();</script>
    <script type="text/javascript">
      window.onload = function () {
        setTimeout(() => {
          var d = document.getElementById("join");
          d.className += " navbarButtonCurrent";
        }, 100);
      };
    </script>
  </body>
</html>
