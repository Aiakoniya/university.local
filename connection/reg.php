<?php


if(!empty($_POST)){
    $fname = !empty($_POST['fname']) ? $_POST['fname'] : null;
    $lname = !empty($_POST['lname']) ? $_POST['lname'] : null;
    $email = !empty($_POST['email']) ? $_POST['email'] : null;
    $password = !empty($_POST['password']) ? $_POST['password'] : null;
    $avatar = !empty($_POST['avatar']) ? $_POST['avatar'] : null;
    $birthday = !empty($_POST['birthday']) ? $_POST['birthday'] : null;
    $address = !empty($_POST['address']) ? $_POST['address'] : null;


//    var_dump($_POST);
//    echo 'send';
//    var_dump([$fname, $lname, $email, $password, $avatar, $birthday, $address]);
    require 'link.php';

    $stmt = $link->prepare("INSERT INTO users (name, surname, email, password, img, birthday, address) values (?, ?, ?, ?, ?, ?, ?)");
//$stmt = $link->prepare("INSERT Into users (name, surname ) values (? , ?)");
    $stmt->bind_param('sssssss',
        $fname,
        $lname,
        $email,
        $password,
        $avatar,
        $birthday,
        $address
    );
    $stmt->execute();
    $response = [
        'success' => $stmt->get_result()
    ];
    $stmt->close();

} else {

    $response = [
        'errorMessage' => 'Something'
    ];
    http_response_code(400);
}

echo json_encode($response);