<?php

session_start();

if(!empty($_POST)){
    $fname = $_POST['fname'] ?? null;
    $lname = $_POST['lname'] ?? null;
    $email = $_POST['email'] ?? null;
    $quote = $_POST['quote'] ?? null;
    $password = $_POST['password'] ?? null;
    $avatar = $_POST['avatar'] ?? null;
    $birthday = $_POST['birthday'] ?? null;
    $address = $_POST['address'] ?? null;

    require '../connection/link.php';

    $link->query(
        "INSERT INTO users (name, surname, email, quote, password, img, address, birthday)
        VALUES ('$fname', '$lname', '$email', '$quote', '$password', '$avatar', '$address', '$birthday')"
    );

    http_response_code(200);
    $response = [
        'message' => 'success'
    ];

} else {
    http_response_code(400);
    $response = [
        'errorMessage' => 'Something'
    ];
}

echo json_encode($response);