<?php
	session_start();
	require 'dbh.inc.php';
	//ini_set ( 'display_errors', 'On' );
?>

<div class="nav">
  <a id="home" href="/" class="navbarButton">Home</a>
  <div class="navbarDivider"></div>
  <a id="join" href="/join.php" class="navbarButton">Join</a>
  <div class="navbarDivider"></div>
  <a id="about" href="/about.php" class="navbarButton">About</a>
	<div class="navbarDivider"></div>
  <a id="about" href="/projects.php" class="navbarButton">Projects</a>
</div>
<?php
	if (isset($_SESSION['userId'])) {


		$userId = $_SESSION['userId'];
		$sql = "SELECT * FROM users WHERE idUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $userId);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){
				echo '
					<img src="'.$row['imgUsers'].'" width="28px" height="28px" style="margin: 2px 1px; float: right; border-radius: 20px;" onclick="location.href=`/user/home`;"><img>
					<form style="float: right;" action="/include/logout.inc.php" method="post">
						<button class="navbarButton" name="logout-submit">Logout</button>
					</form>';
			}
			else{
				header("Location: ../?error=noimg");
				exit();
			}
		}
	}
	else{
		echo '
      <form class="navbarForm" action="/include/login.inc.php" method="post">
        <div class="navbarInputWrapper">
          <input class="navbarInput" type="text" name="mailuid" placeholder="Email/Username">
        </div>
        <div class="navbarInputWrapper">
          <input class="navbarInput" type="password" name="pwd" placeholder="Password">
        </div>
        <button class="navbarButton" type="submit" name="login-submit">Login</button>
        <div class="navbarDivider"></div>
        <a id="signup" href="signup.php" class="navbarButton">Signup</a>
      </form>';
  }?>
