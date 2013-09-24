<?php
	class TAuthentication {
		function __construct() {
			if($_SESSION['loggedin'] == 1) {
				$this->isAuthorized = 1;;
			}
			else {
				$this->isAuthorized = 0;
			}
		}

		function isAuthorized($username, $password) {
			echo "Value is: ".$this->isAuthorized."<br />";
			return $this->isAuthorized;
		}
	}
