<?php
    include_once 'includes/header.php';
?>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    body {
        overflow-x: hidden;
    }
    </style>
</head>

<body>
    <?php 
    include_once 'includes/mainNav.php';
    ?>

    <div class="container my-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-3">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/blog1.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/blog2.jpeg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="text-center">
                <h2>
                    Blog Link
                </h2>
                <a href="http://puthiyaulagammtv.blogspot.com/" class="btn btn-success fs-5 my-1" target="_blank">
                    View Blog
                </a>
            </div>
        </div>
    </div>
    <script src="./js/url.js"></script>

</body>
<?php
    include_once 'includes/footer.php';
?>