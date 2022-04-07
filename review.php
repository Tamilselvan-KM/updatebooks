<?php 
include_once 'includes/connect.php';
include_once 'includes/header.php';
if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
}else{
    $name = "error";
}
?>

<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include_once './includes/mainNav.php';?>
    <h1 class="text-center">Our Book Reviews</h1>
    <div class="container">
        <div class="row">
            <?php 
            $query_str = "SELECT * FROM movies";
            $result = $conn->query($query_str);
            while ($movie_row = $result->fetch_assoc()):
            $movie_id = $movie_row['movie_id'];
            $review_str = "SELECT * FROM reviews WHERE review_movie_id='$movie_id'";
            $review_result = $conn->query($review_str);
            $review_row = $review_result->fetch_assoc();
            if ($review_row) {
            ?>
            <div class="col-lg-4 col-md-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">
                            <a
                                href="./includes/bookdetails.php?id=<?= $movie_row['movie_id'] ?>"><?= $movie_row['movie_name'] ?></a>
                        </h2>
                        <?php
								$review_result = $conn->query($review_str);
								while ($review_row = $review_result->fetch_assoc()) :
									?>
                        <h4>Rating: <span class="<?php
										if ($review_row['review_rating'] >= 4 ){
											echo 'text-success';
										} elseif ( $review_row['review_rating'] < 2 ) {
											echo 'text-danger';
										}
										?>"> <?=$review_row['review_rating'] ?></span>
                        </h4>
                        <p><?= $review_row['review_content'] ?></p>
                        <hr>
                        <?php endwhile ?>
                    </div>
                </div>
            </div>

        </div>
        <?php
            } endwhile?>
    </div>
    <?php 
        include_once 'includes/footer.php';
    ?>
    <script src="./js/url.js"></script>
</body>