<?php
    include_once 'connect.php';
    if (isset($_SESSION['id'])) {
        $session_id = $_SESSION['id'];
    }
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }else{
        $name = "error";
    }
    //retrieve user id
    $user_id = $session_id;

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
    }
?>
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
        </div>
    </div>
</div>