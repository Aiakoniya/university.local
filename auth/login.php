<?php

require '../connection/link.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if($email && $password){
	$stmt = $link->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
	$stmt->bind_param('ss', $email, $password);
	$stmt->execute();

	$result = $stmt->get_result();

	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
		$_SESSION['user'] = $row;
		http_response_code(200);
		$response = [
			'message' => $_SESSION
		];
	} else {
		http_response_code(401);
		$response = [
			'message' => 'Invalid credentials'
		];
	}
} else {
	http_response_code(400);
	$response = [
		'message' => 'Bad requset'
	];
}


echo json_encode($response);