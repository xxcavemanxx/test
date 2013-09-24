<?php
//	Controller
	require_once("../classes/class.Authentication.php");
	require_once("../classes/class.Session.php");

	$Session	= new TSession();
	$Authentication = new TAuthentication();

	if($Authentication->isAuthorized()) {
		echo "You are logged in.<br />";
	}
	else {
		if($_POST['submit'] == 'Submit') {
			if($Authentication->checkUserPass()) {
				echo "Logged in!";
				$Authentication->successfulLogin();
			}
			else {
				echo "Login failed!";
				$Authentication->failedLogin();
			}
		}
		else {
			echo "You are not logged in.<br />";
		}

		$content = file_get_contents("../templates/loginform.html");
		echo $content;
	}
