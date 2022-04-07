<?php     
    include_once 'connect.php';
    include_once 'header.php';
    
    //retrieve movie id
    $id = $_GET['id'];
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }else{
        $name = "error";
    }

    //select statement
    $query_str = "SELECT * FROM $tblMovies WHERE movie_id = '" . $id . "'";
    $review_str = "SELECT * FROM $tblReviews WHERE reviews.review_movie_id=" . $id . "";


    //execute the query
    $result = $conn->query($query_str);
    $review_result = $conn->query($review_str);

    //Handle selection errors
    if (!$result || !$review_result) {
        $errno = $conn->errno;
        $errmsg = $conn->error;
        echo "Selection failed with: ($errno) $errmsg<br/>\n";
        $conn->close();
        exit;
    } else{
        //display results in a table
	    //insert a row into the table for each row of data
	    $result_row = $result->fetch_assoc();
        $_SESSION['book_name'] = $result_row['movie_bio'];

?>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/button.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <button class="nav-link text-light mx-2" id="prevurl"
                            style="width:25px;border:2px solid blue;background:blue">
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
    <h1 class="text-center">Books</h1>
    <div class="container ">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div>
                    <img src=".<?php echo $result_row['movie_img']; ?>" alt="" class="img-fluid my-2">
                </div>
            </div>
            <div class="col-lg-8 col-md-8" style="background:#f1f1f1">
                <h2><?php echo $result_row['movie_name'] ?></h2>
                <div>
                    <p class="fs-4">Year:<?php echo $result_row['movie_year'] ?></p>
                    <p class="fs-4">Book_Rating:<?php echo $result_row['movie_rating'] ?></p>
                    <p class="fs-4">Book_name:<br><?php echo $result_row['movie_bio'] ?></p>
                    <div class="row">
                        <p class="text-center fs-2 fs-bold">User Reviews</p>
                        <?php for ($i = 0; $i < 5; $i++ ) :
						    while ( $review_result_row = $review_result->fetch_assoc() ) : 
                            echo '<div class="col-3">';
                        ?>
                        <h3 class="<?php
                            if ($review_result_row['review_rating'] > 4 ){
                                echo 'text-success';
                            } elseif ( $review_result_row['review_rating'] < 2 ) {
                                echo 'text-danger';
                            }
					        ?>">Rating: <?php echo $review_result_row['review_rating'] ?>
                        </h3>
                        <p class="fs-4">Feedback: <br /><?php echo $review_result_row['review_content'] ?></p>
                        <p class="fs-4">User Name: <br /><?php echo $name; ?></p>
                        <p class="fs-4">Date: <br /><?php echo $review_result_row['review_date'] ?></p>
                        <?php echo '</div>';
                        endwhile; endfor;  ?>
                    </div>
                </div>
            </div>
            <?php if (empty($login)) { ?>
            <p class="lead"><a class="text-danger" href="loginform.php">Sign in</a> or <a class="text-danger"
                    href="registration.php">register</a> to leave a review or read or make this a favorite Books!</p>
            <?php	
            }else{
            ?>
            <div class="actions my-3">
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary me-1 fs-5" href="addreview.php?id=<?php echo $result_row['movie_id'] ?>"
                        role="button">Add Review
                        <i class="fa-solid fa-plus icons"></i>
                    </a>
                    <a class="btn btn-success me-1 fs-5"
                        href="favorite.php?id=<?php echo $result_row['movie_id']?>&title=<?php echo $result_row['movie_bio']?>"
                        role="button">Add To Favorite
                        <i class="fa-solid fa-star icons"></i>
                    </a>
                    <!--<a class="btn btn-warning me-1 actBtnOne fs-5"-->
                    <!--    href=".<?php echo $result_row['movie_pdf'];?>#toolbar=0" role="button" target="_blank">Read-->
                    <!--    Book-->
                    <!--    <i class="fa-solid fa-book-open-reader icn"></i>-->
                    <!--</a>-->
                    <a class="btn btn-warning me-1 fs-5" href="../bookpdf<?php echo $result_row['mobile_pdf'];?>#toolbar=0"
                        role="button" target="_blank">Read Book
                        <i class="fa-solid fa-book-open-reader icn"></i>
                    </a>
                    <?php if ($role == 1) : ?>
                    <a class="btn btn-danger" href="deleteMovie.php?id=<?php echo $result_row['movie_id']; ?>"
                        rolerole="button">DELETE BOOKS <i class="fa fa-close"></i></a>
                    <?php
				        endif;?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php';
    // close the connection.
    $conn->close();
    }
    ?>
    <script src="../js/url.js"></script>
</body>