<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About | DAC</title>
    <link rel="shortcut icon" href="../img/dacLogoEditedForWebLogo.png"/>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/include.js"></script>
  </head>
  <body>
    <div class="header">
      <div w3-include-html="../include/header.php" class="navbar"></div>

      <div class="heroImage" style="background-color: #492f92;">
    		<div class="heroText">
    			<p><strong>About DAC</strong></p>
    		</div>
    	</div>
    </div>

    <div class="main">
      <div class="container">
        <p class="primaryHeader">What Is DAC?</p><br>
        <p>DAC is an after school club at Sunset High School focased on creativity, community, and acceptance. We meet every thursday after school and meet in room F3 and the ajasent rooms. We have access to many tools for you projects such as 3D printers, vinal cutters, shirt press, laser cutter and much more. Come by any time to check it out.</p>
      </div>
      <div class="container">
        <p class="primaryHeader">The People Behind DAC</p><br>
        <p>DAC is an after school club at Sunset High School focased on creativity, community, and acceptance. We meet every thursday after school and meet in room F3 and the ajasent rooms. We have access to many tools for you projects such as 3D printers, vinal cutters, shirt press, laser cutter and much more. Come by any time to check it out.</p>
      </div>
    </div>
    <div w3-include-html="../include/footer.php"></div>
    <script>includeHTML();</script>
    <script type="text/javascript">
      window.onload = function () {
        setTimeout(() => {
          var d = document.getElementById("about");
          d.className += " navbarButtonCurrent";
        }, 100);
      };
    </script>
  </body>
</html>
