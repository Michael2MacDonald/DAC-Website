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

    <div class="commentSection">
      <form class="navbarForm" action="../comment.php" method="post">
        <textarea class="navbarInput" name="message" rows="3" cols="55" placeholder="Message"></textarea>
        <div class="">
          <button class="signupButton" type="submit" name="login-submit">Comment</button>
        </div>
      </form>

      <?php
        ini_set ( 'display_errors', 'On' );
        require('../include/dbh.inc.php');
        $sql = "SELECT * FROM comments_test";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          foreach ($row as $key => $value) {
            if ($key == "message") {
              $message = $value;
            }
            if ($key == "uidUsers") {
              $user = $value;
            }
            if ($key == "time") {
              $time = $value;
            }
          }
          echo '<div class="comment">';
          echo '<p>' . $message . '</p>';
          echo '<p>' . $user . '  ' . $time . '</p>';
          echo '</div>';
  			}

        // echo $result;
        // for ($i=0; $i < $result; $i++) {
        //
        // }

        // foreach ($result as $key => $value) {
        //   echo $key + "  " + $value + "|||";
        //   echo `
        //   <div class="comment">
        //     <p>` + "mesage" + `</p>
        //   </div>
        //   `;
        // }

      ?>

      <div class="comment">
        <p>test</p>
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
