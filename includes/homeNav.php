<head>
    <link rel="stylesheet" href="./css/button.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light fs-3 mx-3" href="./home.php">E-Book</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-5" id="navbarTogglerDemo02">
            <div class="me-auto"></div>
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="books.php">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="review.php">Reviews</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-success actBtnOne me-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <button class="btn btn-success actBtn w-100" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profile
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light actBtnOne" href="./includes/logout.php"
                        style="border:2px solid blue;background:blue">
                        <i class="fa-solid fa-power-off"></i>
                    </a>
                    <a class="nav-link text-light actBtn" href="./includes/logout.php">logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Profile</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <h1 class="text-center text-info">Hi <?php echo $name; ?>!</h1>
            <p class="lead">Welcome to your user dashboard! Here you can edit your information, see favorite books, and
                your own reviews!</p>
            <div class="actions my-3">
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary me-1" href="./includes/updateprofile.php" role="button">Update Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php //include_once 'profile.php'?>
<!-- <a class="nav-link text-light actBtnOne me-2" href=""
                            style="border:2px solid green;background:green">
                        </a> -->
<!-- <a class="nav-link text-light actBtn" href="">Profile</a> -->