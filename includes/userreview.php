<?php
    session_start();
    include_once 'connect.php';
    $role = 0;
    if (isset($_SESSION['role'])){
        $role = $_SESSION['role'];
    }
    if (isset($_SESSION['id'])) {
        $session_id = $_SESSION['id'];
    }

    if(isset($_POST['reviewBtn'])){
        $user_id = $session_id;
        $movie_id = $_GET['book_id'];
        $review_rating = $_POST['review_rating'];
        $review_string = $_POST['review_content'];
        $review_content = mysqli_real_escape_string($conn, $review_string);
        $review_date = date("Y/m/d");


        //define statement
        $query_str = "INSERT INTO reviews VALUES (NULL, '$movie_id', '$user_id', '$review_rating', '$review_content', '$review_date')";

        //execute query
        $result =  @$conn->query($query_str);
        //insertion errors
        if (!$result) {
            $errno = $conn->errno;
            $errmsg = $conn->error;
            echo "Insertion failed with $errno $errmsg<br/>\n";
            $conn->close();
            exit;
        } else {
            echo '<script>
                    alert("Your review has been added!");
                </script>';
            header( "Refresh:2; url=bookdetails.php?id=$movie_id", true, 303);
    }
}   
$conn->close();

?>