<?php $page_title = 'Contacts'; ?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/search-form.php'; ?>

    <div class="container mt-5 mb-5">
        <h3>Contact with us</h3>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                <form action="#" method="post">
                    <label>Name</label>
                    <input name="fullname" type="text" class="form-control" id="fullname">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                    <label>Message</label>
                    <textarea name="message" rows="4" class="form-control" id="message"></textarea>
                    <input type="submit" name="ok" class="form-control">
                </form>
                <?php
                if(isset($_POST['ok'])){
                    include_once 'connection/function.php';
                    $obj = new Contact();
                    $res = $obj -> contact_us($_POST['email']);
                    if($res ==true){
                        echo "<script>alert('Your message successfully submitted. Thank you!')</script>";
                    }else{
                        echo "<script>alert('Something went wrong!')</script>";
                    }
                }
                ?>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                <address>
                    <h5>OUR ADDRESS</h5>
                    <span>West Kazakhstan, Uralsk</span>
                    <p><i class="fa fa-phone"></i> +7 707 193 11 78</p>
                    <p><i class="fa fa-envelope-o"></i> nazym_kh@gmail.com</p>
                    <p><i class="fa fa-map-marker"></i> 13/5, Moldagulova Street, Thiruvannamalai - 606 601.</p>
                </address>

            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
