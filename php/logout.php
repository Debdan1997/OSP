<?php

	session_start();
	unset($_SESSION["userst"]);
	unset($_SESSION["passst"]);
	session_destroy();
	header("location:login_sess.php");

?>
