<?php 
    include_once 'connect.php';
    include_once 'header.php';
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }else{
        $name = "error";
    }
    $b_id = $_GET['id'];

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
    <h1 class="text-center">Welcome <?php echo $name; ?></h1>
    <h1 class="text-center">Add Review</h1>
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-6 m-auto">
                <form action="userreview.php?book_id=<?php echo $b_id;?>" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Add Rating</label>
                        <select class="form-select" aria-label="Default select example" name="review_rating" required>
                            <option selected>Add Review Rate</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Your Feedback</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="review_content"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-warning" name="reviewBtn">Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php';?>
    <script src="../js/url.js"></script>
</body>