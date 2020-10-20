<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home | DAC</title>
    <link rel="shortcut icon" href="/img/dacLogoEditedForWebLogo.png"/>
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/include.js"></script>
    <meta name="google-site-verification" content="KHwH-dm7LoCVpjqoePOISqdXHzwuDMknY8R_5DSzIeY" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
  	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138150014-4"></script>
  	<script>
  	  window.dataLayer = window.dataLayer || [];
  	  function gtag(){dataLayer.push(arguments);}
  	  gtag('js', new Date());

  	  gtag('config', 'UA-138150014-4');
  	</script>
  </head>
  <body>
    <div class="header">
      <div w3-include-html="/include/header.php" class="navbar"></div>

      <div class="heroImage" style="background-color: #492f92;">
    		<div class="heroText">
    			<p><strong>DAC</strong></p>
          <p style="font-size: 15px;">Sunset High School's Only After School Club For All Art And Electronics</p>
    		</div>
    	</div>
    </div>

    <div class="main">

      <div class="container grid"><!--container grid-->
        <div class="row"><!--row-->

          <div class="column">
            <div class="columnContainer zoom" onclick="location.href='/about';">
              <p class="primaryHeader">CAD</p>
              <img src="/img/cad.png" alt="screenshot of a geneva drive in a CAD software" width="200" height="200"> <!--Add pic of us-->
              <p>We have access to 3D printers, laser cutters, and vinal cutters that let you design and fabricate any part as well as computers with CAD software so anyone can make stuff.</p>
            </div>

            <div class="columnContainer zoom" onclick="location.href='/about';">
              <p class="primaryHeader">Digital Art</p>
              <img src="/img/cad.png" width="200" height="200"> <!--Add pic of us-->
              <p>Whether you just need a place to work after school away from your siblings, want to chat with others who share our intrests, or just need a computer to work on, DAC is a graet place to make you 21st century art.</p>
            </div>
          </div>

          <div class="column">
            <div class="columnContainer zoom">
              <p class="primaryHeader">Photography</p>
              <img src="/img/photography.jpg" alt="silhouette of two girls with a small dog on the beach with the sunset in the background" width="200" height="200">
              <p>stuff</p>
            </div>
          </div>

          <div class="column">
            <div class="columnContainer zoom">
              <p class="primaryHeader">Engineering & Electronics</p>
              <img src="/img/arduinoDesktopProject.jpg" alt="seven segment display with wires connecting to it, displaying a menu" width="200" height="200">
            </div>
          </div>

          <div class="column">
            <div class="columnContainer zoom">
              <p class="primaryHeader">Programing</p>
              <img src="/img/programing.png" alt="screenshot of some code" width="200" height="200">
              <p>If you want to get into game design, web design, java, or any other programing, we have computers to work on and knowledgable people willing to help you learn.</p>
            </div>
          </div>

        </div><!--row-->
      </div><!--container grid-->

    </div><!--main-->

    <div w3-include-html="/include/footer.php"></div>

    <script>includeHTML();</script>
    <script type="text/javascript">
      window.onload = function () {
        setTimeout(() => {
          var d = document.getElementById("home");
          d.className += " navbarButtonCurrent";
        }, 100);
      };
    </script>
  </body>
</html>
