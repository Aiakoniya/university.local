<a class="navbar-brand " href="index.php"><img src="images/horizontal_on_white_by_logaster.png" width="100px" alt=""></a>
<button class="navbar-toggler" type="button">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"> Home </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="index.php#chronic">About me</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contacts</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">

            <?php if (empty($_SESSION['user'])): ?>
                <li class="nav-item active">
                    <a href="signin.php" class="nav-link">Sign in</a>
                </li>
                <li class="nav-item active">
                    <a href="signup.php" class="nav-link">Sign up</a>
                </li>
            <?php else: ?>
                <li class="nav-link active">
                    <a href="user_profile.php" class="nav-link">Profile</a>
                </li>
                <li class="nav-link active">
                    <a href="signout.php" class="nav-link">Logout</a>
                </li>
            <?php endif ?>
        </ul>
    </form>
</div>
