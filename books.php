<?php 
include_once 'includes/connect.php';
include_once 'includes/header.php';
if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
}else{
    $name = "error";
}

//select statement
$query_str = "SELECT * FROM movies";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}
else{
?>

<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include_once './includes/mainNav.php';?>
    <h1 class="text-center">Welcome <?php echo $name ?></h1>
    <h1 class="text-center">Books</h1>
    <div class="container">
        <form action="">
            <div class="row mb-3">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-8 col-md-8 mb-2">
                    <input type="text" name="" id="" class="form-control" placeholder="Search">
                </div>
                <div class="col-lg-2 col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Search </button>
                </div>
            </div>
        </form>
        <?php
			$i = 0;
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
		?>
        <div class="row">
            <?php endif; ?>

            <div class="col-lg-4 col-md-4 ">
                <div>
                    <a href="./includes/bookdetails.php?id=<?php echo $result_row['movie_id']; ?>">
                        <img src="<?php echo $result_row['movie_img'] ?>" class="img-fluid" />
                    </a>
                </div>
                <div class="content text-center">
                    <div class="fs-2 mb-4">
                        <?php
							echo "<a href='./includes/bookdetails.php?id=" . $result_row['movie_id'] . "'>", $result_row['movie_name'], "</a>";
						?>
                    </div>
                </div>
            </div>
            <?php if ($i == 3) : ?>
        </div>
        <?php $i=0; endif; endwhile; ?>
    </div>
    <?php include_once 'includes/footer.php';
    }
    ?>
    <script src="./js/url.js"></script>
</body>