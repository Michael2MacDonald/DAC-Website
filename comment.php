<?php
  session_start();
  //ini_set ( 'display_errors', 'On' );

  if (isset($_SESSION['userId'])) {
    require('include/dbh.inc.php');

		$userId = $_SESSION['userUid'];
    $message = $_POST['message'];
		$sql = "INSERT INTO comments_test (uidUsers, message) VALUES (?, ?)";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: /projects/osab.php?error=sqlerror");
			exit();
		}
		else{
      mysqli_stmt_bind_param($stmt, "ss", $userId, $message);
      mysqli_stmt_execute($stmt);
      header("Location: /projects/osab.php?success=true");
      exit();
    }

	}
	else{
    header("Location: /projects/osab.php?error=notLoggedIn");
    exit();
  }
?>
