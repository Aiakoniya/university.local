<?php
    session_start();
    $page_title = 'Sign up';
    if (isset($_SESSION['user'])) {
        header("Location: user_profile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="layout"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center" id="registration">
                <h3 class="my-lg-5">registration</h3>
                <form>
                    <span id="checkname"></span>
                    <div class="form-group">
                        <label for="emailInput">Email address</label>
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="nameInput">First Name</label>
                        <input type="text" name="fname" class="form-control" id="nameInput" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="surnameInput">Second Name</label>
                        <input type="text" name="lname" class="form-control" id="surnameInput1" placeholder="Second Name" required>
                    </div>
                    <div class="form-group">
                        <label for="quoteInput" style="">Quote</label>
                        <input type="text" name="quote" class="form-control" id="quoteInput" placeholder="Status" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordInput">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="avatarInput">URL Avatar</label>
                        <input type="text" nama="avatar" class=" form-control " id="avatarInput" placeholder="Avatar">
                    </div>
                    <div class="form-group">
                        <label for="birthdayInput">Birthday Date</label>
                        <input type="text" name="birthday" class="form-control" id="birthdayInput1" placeholder="yyyy-mm-dd" required>
                    </div>
                    <div class="form-group">
                        <label for="addressInput">Address</label>
                        <input type="text" name="address" class="form-control" id="addressInput" placeholder="Address" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Registrate</button>
                </form>
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php'; ?>

    <script>
        $("form").submit(function(event){
            event.preventDefault();
            $.ajax({
                url: 'auth/registration.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (data) {
                    console.log('Success', data);
                    if (data.message == 'success') {
                        $('#checkname').removeClass('text-danger');
                        $('#checkname').addClass('text-success');
                        $('#checkname').text('A user was successfully created!');
                        $("#registration-form").trigger('reset');
                    }
                },
                error: function (errorData, textStatus, errorMessage) {
                    console.log(errorData);
                    var msg = (errorData.responseJSON != null) ? errorData.responseJSON.errorMessage : '';
                    $('#checkname').addClass('text-danger');
                    $('#checkname').removeClass('text-success');
                    $("#checkname").text('Error: ' + msg + ', ' + errorData.status);
                }
            });
        });
    </script>
</body>
</html>