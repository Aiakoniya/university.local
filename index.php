<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Naz Sheber</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="fix.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <?php include 'includes/navbar-transparent.php'; ?>
            <div class="vid-background">
                <div class="vid-wrap">
                    <div id="video>">
                        <video id="bgvideo" autoplay loop muted playsinline>
                            <source src="optional.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="caption text-center">
                <p>@naz_sheber</p>
                <h3 data-customstyle="yes"><b>"Seven times measure cut once"</b></h3>
                <em style="font-size:28px; ">To find out the seamstress, you need to order her product</em>
            </div>
        </header>
        <p>You visited the site <?php
        $counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
        $counter++;
        setCookie("counter", $counter);
        echo $counter;
            ?> times</p>
        <div class="container" id="chronic">
            <div class="row" style="padding-bottom: 150px;">
                <div class="col-md-6">
                    <img class="my-lg-5" style=" box-shadow: 0 0 5px 2px;" src="images/45497316_1743041149133831_3205075705847129938_n.jpg " width="520" alt="" >
                </div>
                <div class="col-md-6">
                    <div class="context">
                        <div class="title">
                            Nazym Khamzina
                        </div>
                        <span>kh_nazym@gmail.com</span>
                        <ul>
                            <li>Teaches art to children at school</li>
                            <li>Born and now live in West Kazakhstan</li>
                            <li>Actively lead Instagram and accept orders</li>
                        </ul>
                        <a href="products.php" class="btn-success">
                        Order here
                        </a>
                    </div>
                </div>
            </div>
        </div>
<div class="container my-sm-4" style="box-shadow: 5px 5px 5px 5px rgba(0, 0, 255, .2);" >
    <div class="row">
        <div class="col-md-6">
            <img src="images/pict.jpg" width="560">
        </div>
        <div class="col-md-6">
            <img src="images/panel.jpg" width="560">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="images/iim.jpg" width="560">
        </div>
        <div class="col-md-6">
            <img src="images/zakolk.jpg" width="560" height="560">
        </div>
    </div>
</div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>