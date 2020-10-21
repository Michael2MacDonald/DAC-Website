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
          <p><strong>Open Source Autonomous Boat</strong></p>
        </div>
      </div>
    </div>

    <div class="main">
      <div class="container">
        <h1>Overview Of The Project:</h1>
        <p>A short answer is: it is an open source, autonomous, 3d printed, sea-going, solar powered, boat that will collect data on the ocean for scientific research. But there is a lot more than that. The goal of this project was to design an autonomous boat that could be printed on most mid-sized 3D printers and that would require little skill to make unlike other similar boats that are make from carbon fiber or fiberglass.</p>
      </div>
      <div class="container">
        <h1>Contributors:</h1>
        <p>So far only really me =(</p>
      </div>
    </div>

    <div w3-include-html="../include/footer.php"></div>
    <script>includeHTML();</script>
    <script type="text/javascript">
      window.onload = function () {
        setTimeout(() => {
          var d = document.getElementById("projects");
          d.className += " navbarButtonCurrent";
        }, 100);
      };
    </script>
  </body>
</html>
