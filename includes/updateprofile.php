<?php
include_once ('connect.php');
include_once 'header.php';

//retrieve user id
$user_id = $session_id;
// echo $user_id;
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/button.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
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
    <?php
//define the select statement
$query_str = "SELECT * FROM users WHERE user_id=" . $user_id;
$review_str = "select review_content, review_id, review_rating, movie_name, movie_id from reviews join movies on reviews.review_movie_id=movies.movie_id where reviews.review_user_id=" . $user_id;

//execute the query
$result = $conn->query($query_str);
$review_result = $conn->query($review_str);

//retrieve the results
$result_row = $result->fetch_assoc();



//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}        else{
?>
    <div class="container">
        <h1 class="text-center">Update Profile</h1>
        <div class="row">
            <div class="col-lg-6 col-md-6 m-auto py-5">
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $result_row['user_id']; ?>" />
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username"
                            name="user_name" value="<?php echo $result_row['user_name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name"
                            name="user_full_name" value="<?php echo $result_row['user_full_name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"
                            name="user_email" value="<?php echo $result_row['user_email']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password"
                            name="user_password" value="<?php echo $result_row['user_password']; ?>" required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                        <button class="btn btn-outline-success me-2" type="submit" name="updbtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 m-auto py-2">
                <h1>Your Favorite</h1>
                <a href="fav.php" class="btn btn-success">View Favorite</a>

                <?php
                //$query_str = "SELECT * FROM favorite WHERE userid=" .$user_id;
                //execute the query
                //$result = $conn->query($query_str);
                //$result_row = $result->fetch_assoc();
                //$fav = array();
                //$id = $result_row['movie_id'];
                //$img = $result_row['movie_img'];
                //if($result_row){
                    // echo "<h3 class='text-center'>".$result_row['fav_title']."</h3><br/>";
                    // for ($title=0; $title < count($fav); $title++) { 
                    //     echo "<h3 class='text-center'>".$fav[$title]."</h3><br/>";
                    // }
                    // while($favrow = $result->fetch_assoc()){
                    //     echo "<h3 class='text-center'>".$favrow['fav_title']."</h3><br/>";
                    // }

                //if (isset($items)) {
					//$items_count_value = array_count_values($items);

					//display the favorites content
					//foreach ($items_count_value as $id => $qty) {
						//select statement
						// $query_str = "SELECT * FROM favorite WHERE userid=" .$user_id;
						// //execute the query
						// $result = $conn->query($query_str);
						// $result_row = $result->fetch_assoc();

						// //$id = $result_row['movie_id'];
						// //$img = $result_row['movie_img'];
                        // echo  $result_row['fav_title'];
						//$title = "<a href='bookdetails.php?id= " . $result_row['movie_id'] . "'>" . $result_row['fav_title'] . "</a>";
                ?>
            </div>
            <?php
				// }else {
				// 	echo "<p class='lead text-center'>You don't have any favorite books!</p>";
				// }
				?>
        </div>
        <div class="row">
            <!-- <div class="col-lg-6 col-md-6 m-auto py-2"> -->
            <h1 class="text-center">Your Reviews</h1>
            <?php
					while ($review_row = $review_result->fetch_assoc()) { 
            ?>
            <div class="col-lg-6 col-md-6 m-auto py-2">
                <h3>
                    <a href="bookdetails.php?id=<?= $review_row['movie_id'] ?>"><?= $review_row['movie_name'] ?></a>
                </h3>
                <h4>Rating: <span class="<?php
									if ($review_row['review_rating'] >= 4) {
										echo 'text-success';
									} elseif ($review_row['review_rating'] < 2) {
										echo 'text-danger';
									}
									?>"> <?= $review_row['review_rating'] ?></span></h4>

                <p class="lead"><?= $review_row['review_content'] ?></p>
                <a class="btn btn-danger" href="deletereview.php?id=<?= $review_row['review_id'] ?>">DELETE</a>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    <?php 
    }
    include_once 'footer.php'
    ?>
</body>