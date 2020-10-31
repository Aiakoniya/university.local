<?php

session_start();

header('Content-Type: application/json');

set_error_handler(function($errno, $errstr, $errfile, $errline, $errcontext) {
	if (0 === error_reporting()) { return false; }
	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

if(!empty($_POST['form'])){
	if($_POST['form'] === 'signin'){
		include_once('signin.php');
	} else if($_POST['form'] === 'signup'){
		include_once('signup.php');
	} else if($_POST['form'] === 'check_email'){
		include_once('check_email.php');
	} else if($_POST['form'] === 'signin_cookie'){
		include_once('signin_cookie.php');
	} else {
		$response = array(
			'error' => 'Something went wrong.'
		);
		http_response_code(400);
	}
} else {
	$response = array(
		'error' => 'Something went wrong.'
	);
	http_response_code(400);
}
echo json_encode($response);