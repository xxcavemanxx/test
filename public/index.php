<?php
//	Controller
		
	require_once("../classes/class.Authentication.php");
	require_once("../classes/class.Session.php");

	$Session	= new TSession();
	$Authentication = new TAuthentication();

	if($_GET['logout'] == 1) {
		$_SESSION['loggedin'] = 0;
	}

	if($Authentication->isAuthorized()) {
		echo "You are logged in.<br />";
	}
	else {
		echo "You are not logged in.<br />";

		if($_POST['submit'] == 'Submit') {
			if($_POST['username'] == 'Tyler' && $_POST['password'] == '123') {
				echo "Logged in!";
				$_SESSION['loggedin'] = 1;
			}
			else {
				echo "Login failed!";
				$_SESSION['loggedin'] = 0;
			}
			print_r($_POST);
		}
		$content = file_get_contents("../templates/loginform.html");
		echo $content;
	}
