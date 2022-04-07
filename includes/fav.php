<?php
include_once 'header.php';
?>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/button.css">
</head>
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
            //connection
    $con = mysqli_connect('localhost', 'u724913348_ajGYc', 'Computirasoft@2020', 'u724913348_WfDJf'); 
    $sql = "select * from favorite where userid='$session_id'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="container my-5 py-5">
        <h1>Your Favorites</h1>
        <div class="row">
            <div class="col-lg-8 col-md-8 m-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <h3>
                            Book id:<?php echo $row['fav_movie'];?><br>
                            Book Name:<br>
                            <a href="bookdetails.php?id=<?php echo $row['fav_movie']?>" ><?php echo  $row['fav_title']?></a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
}else{
    echo "<p class='lead text-center'>You don't have any favorite books!</p>";
}
include_once 'footer.php';

?>
