<?php
    session_start();
    $page_title = 'Sign in';
    if(!empty($_SESSION['user'])){
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
            <div class="col-md-8 text-center">
                <h3 class="my-lg-5" style="">Login</h3>
                <form>
                    <span class="error text-danger" id="errormsg"></span>
                    <div class="form-group">
                        <label for="inputEmail1">Email address</label>
                        <input type="text" class="form-control" name="email" id="inputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password">
                    </div>
                    <a href="signup.php">Create new account</a>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                $.ajax({
                    url: 'auth/login.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (data) {
                        window.location.href = "user_profile.php";
                    },
                    error: function (errorData, textStatus, errorMessage) {
                        var msg = (errorData.responseJSON != null) ? errorData.responseJSON.errorMessage : '';
                        $("#errormsg").text('Error: ' + msg + ', ' + errorData.status);
                        $("#errormsg").show();
                    }
                });
            });
        });
    </script>
    <?php include 'includes/footer.php'; ?>
</body>
</html>