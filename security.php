<?php
require_once('includes/config.php');
session_start();
	
if(!isset($_SESSION['username'])){
	$_SESSION['errors'] = array("<p>Please log in to view content.</p>");
	header("location: login.php");
	exit();
}

if(isset($_SESSION['timeLastActive'])){
	$timeLastActiveInSeconds = time() - $_SESSION['timeLastActive'];
	if ($timeLastActiveInSeconds > TIMEOUT_IN_SECONDS) {
		$_SESSION['errors'] = array("<p>Logged out due to inactivity.</p>");
		header("location: logout.php");
		exit();
	} else {
		$_SESSION['timeLastActive'] = time();
	}
} else {
	$_SESSION['errors'] = array("<p>Please log in.</p>");
	header("location: login.php");
	exit();
}

?>