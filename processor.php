<?php
require_once('includes/config.php');
session_start();

$user = "";
$pass = "";
$errors = array();

if( isset($_POST['username']) && 
	isset($_POST['password']) ){
	
	$user = trim(strtolower($_POST['username']));
	$pass = trim($_POST['password']);
	
	if( empty($user) ){
		$errors[] = "<p>Username cannot be empty.</p>";		
	}

    if (defined('REGISTERED_USERS')){
        if($user != in_array($user, REGISTERED_USERS)){
            $errors[] = "<p>Not registered user.</p>";		
        }
    } else {
		$errors[] = "<p>Registered users not set</p>";
	}

	if (defined('SECRET_PASSWORD')){
		if( $pass != SECRET_PASSWORD ){
			$errors[] = "<p>Password NOT accepted.</p>";		
		}
	} else {
		$errors[] = "<p>Secret password not set</p>";
	}

}else{
	$errors[] =  "<p>Please fill in the form</p>";
}

if(isset($errors)){
	if( count($errors) > 0){
		$_SESSION['errors'] = $errors;
		header("location: login.php");
		exit();
	}else{
		$_SESSION['username'] = $user;
		header("location: page.php");
		exit();
	}
} else {
		header("location: login.php");
		exit();
}

?>