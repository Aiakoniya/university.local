<?php
    session_start();

    if (empty($_SESSION['user'])) {
        header("Location: signin.php");
    }
    $page_title = 'Profile';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <header>
        <?php include 'includes/navbar.php'; ?>
        <div class="card card-image" style="background-image: url('https://keyfilms.ru/wp-content/uploads/sites/21/2019/06/Banner2.jpg');">
            <div class=" text-center rgba-stylish-strong py-5 px-4" style="color: darkslategrey;">
                <div class="py-5">
                    <!-- Content -->
                    <h2 class="card-title h2 my-4 py-2" style="letter-spacing: .3rem; font-family: 'Montaga', serif;
                    text-transform: uppercase ;text-shadow: .1rem .1rem .2rem midnightblue; font-weight: bold;">profile page</h2>
                    <div style="background-color: #7b7f83; width: 100%;">
                        <p class="mb-4 pb-2 px-md-5 mx-md-5" style="color: whitesmoke; font-size:25px; font-family: 'Montaga', serif;"><?= $_SESSION['user']['quote'] ?? '';?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="user_info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="user_data">
                        <div class="card bg-white">
                            <div class="card-title my-5">
                                <div class="media">
                                    <img src="<?= $_SESSION['user']['img']; ?>" width="250" height="250" class="img-fluid rounded-top mx-5">
                                    <div class="media-body">
                                        <h3 class="display-4">I'm <?= $_SESSION['user']['name']. ' ' . $_SESSION['user']['surname']; ?></h3>
                                        <p class="text-muted"><?= $_SESSION['user']['address']; ?></p>
                                        <div class="container">
                                            <table class="table table-responsive ml-5">
                                                <tr>
                                                    <td>Email</td>
                                                    <td>:</td>
                                                    <td><?= $_SESSION['user']['email']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Birthday</td>
                                                    <td>:</td>
                                                    <td><?= $_SESSION['user']['birthday']; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>