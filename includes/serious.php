<?php 
    include_once 'header.php';
    if (isset($_GET['img'])) {
        $img = $_GET['img'];
    }
    if (isset($_GET['serious'])) {
        $serious = $_GET['serious'];
    }
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/button.css">
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <button class="btn text-light mx-2" id="prevurl"
                            style="width:25px;border:2px solid blue;background:blue;">
                            <i class="fa-solid fa-arrow-left"></i>
            </button>
            <a class="navbar-brand text-light fs-3" href="../home.php">E-Book</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-5" id="navbarTogglerDemo02">
                <div class="me-auto"></div>
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="../home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../books.php">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../review.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light actBtnOne" href="logout.php"
                            style="border:2px solid blue;background:blue">
                            <i class="fa-solid fa-power-off"></i>
                        </a>
                        <a class="nav-link text-light actBtn" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center">Article series</h1>
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-5 col-md-5">
                <img src="../images/<?php echo $img;?>.jpeg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <?php
                            for ($i=1; $i <= $serious; $i++) { 
                                echo '
                                <div class="col-lg-4 col-md-4">
                                    <div class="fs-2 mb-4">
                                        <a href="../bookpdf/articles/'.$img.'-s-'.$i.'.pdf#toolbar=0" class="btn btn-primary" target="_blank">View Series '.$i.'</a>
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                </div>
            </div>

        </div>

    </div>

    <?php include_once 'footer.php';?>
    <script src="../js/url.js"></script>
</body>