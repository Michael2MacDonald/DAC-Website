<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projects | DAC</title>
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
    			<p><strong>Community Projects</strong></p>
          <p style="font-size: 15px;">Open source projects worked on by the community</p>
    		</div>
    	</div>
    </div>

    <div class="main">

      <div class="container grid"><!--container grid-->
        <div class="row"><!--row-->

          <div class="column">
            <div class="columnContainer zoom" onclick="location.href='/projects/osab.php';">
              <p class="primaryHeader">OSAB</p>
              <img src="/img/cad.png" alt="screenshot of a geneva drive in a CAD software" width="200" height="200"> <!--Add pic of us-->
              <p>An open source, autonomous, 3d printed, seagoing, solar powered, boat that will collect data on the ocean</p>
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
          var d = document.getElementById("projects");
          d.className += " navbarButtonCurrent";
        }, 100);
      };
    </script>
  </body>
</html>
