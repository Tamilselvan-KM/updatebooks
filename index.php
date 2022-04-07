<?php 
include_once './includes/header.php'
?>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .messagebox{
            position: fixed;
            bottom: 50px;
            right: 20px;
            background: #737d99d2;
            max-width: 400px;
            display: none;
            transition: all 1s ease-in;
        }
        .toast-content{
            position: relative;
            padding: 10px;
            margin: 10px;
        }
        .close-btn{
            position: absolute;
            right: 0;
            top: 0;
        }
        .close-btn > button{
            cursor: pointer;
            outline: none;
            border: none;
            padding: 5px;
            background: none;
            font-size: 20px;
        }
        .toast-message{
            font-size: 18px;
            color: #f3f3f3;
            padding: 5px 0;
        }
    @media only screen and (max-width: 600px){
        .messagebox{
            bottom: 10px;
            right:0px;
        }
    }
    </style>
</head>

<body class="bg-warning">
    <!-- <div id="loader">
        <div class="bookloader">
            <div class="book">
                <div class="book">
                    <img src="./images/loader.jfif" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <?php
        include_once 'includes/indexNav.php'; 
        include 'register.php'
    ?>
    <div class="messagebox" id="messagebox">
        <div class="toast-content">
            <div class="close-btn">
                <button id="messageclose">X</button>
            </div>
            <div class="toast-message">
                <h4>
                    For better View Use google Chrome or Mozilla Firefox
                </h4>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                About Author
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- <a href="" onclick="indexAlert(AuthorInfo)" class="btn btn-primary mx-5">Author info</a> -->
                                <button class="btn btn-primary mx-5" onclick="indexAlert('Author Info')">Author
                                    info</button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Awards/Events
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- <a href="events.php" class="btn btn-primary mx-5">Our Events</a> -->
                                <button class="btn btn-primary mx-5" onclick="indexAlert('Events')">View
                                    Events</button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Blog
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- <a href="blog.php" class="btn btn-primary mx-5">Our Blog</a> -->
                                <button class="btn btn-primary mx-5" onclick="indexAlert('Blog')">View
                                    Blog</button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Essay
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- <a href="essay.php" class="btn btn-primary mx-5">Our Essay</a> -->
                                <button class="btn btn-primary mx-5" onclick="indexAlert('Essay')">View
                                    Essay</button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                Articles
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- <a href="article.php" class="btn btn-primary mx-5">Our Articles</a> -->
                                <button class="btn btn-primary mx-5" onclick="indexAlert('Articles')">View
                                    Articles</button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                Poetry
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- <a href="poetry.php" class="btn btn-primary mx-5">Our Poetry</a> -->
                                <button class="btn btn-primary mx-5" onclick="indexAlert('Poetry')">View
                                    Poetry</button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Daily Potery
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-- <a href="" onclick="indexAlert(AuthorInfo)" class="btn btn-primary mx-5">Author info</a> -->
                                <!--<button class="btn btn-primary mx-5">Add Potery</button>-->
                                <button type="button" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#adminloginForm">Add Potery</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                        <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"-->
                        <!--    aria-label="Slide 8"></button>-->
                        <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"-->
                        <!--    aria-label="Slide 9"></button>-->
                        <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"-->
                        <!--    aria-label="Slide 10"></button>-->
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/index1.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/index2.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/index3.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/index4.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/index5.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/index6.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <!--<div class="carousel-item">-->
                        <!--    <img src="./images/index7.jpeg" class="d-block w-100" alt="...">-->
                        <!--</div>-->
                        <!--<div class="carousel-item">-->
                        <!--    <img src="./images/index8.jpeg" class="d-block w-100" alt="...">-->
                        <!--</div>-->
                        <!--<div class="carousel-item">-->
                        <!--    <img src="./images/index9.jpeg" class="d-block w-100" alt="...">-->
                        <!--</div>-->
                        <div class="carousel-item">
                            <img src="./images/index10.jpeg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mt-3">
                <div class="mb-2 mx-5">
                    <a href="" class="">
                        <img src="./images/col3-1.jpeg" alt="">
                    </a>
                </div>
                <div class="mb-2 mx-5">
                    <a href="" class="">
                        <img src="./images/col3-2.jpeg" alt="">
                    </a>
                </div>
                <div class="mb-2 mx-5">
                    <a href="" class="">
                        <img src="./images/col3-3.jpeg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="bookcategories">
            <div class="small-container">
                <div class="tuple">
                    <div class="tuplecol-3">
                        <img src="./images/c1.jpeg">
                        <h4>Pidichrukka</h4>
                    </div>
                    <div class="tuplecol-3">
                        <img src="./images/c3.jpeg">
                        <h4>Kanavellam Nanavaaga</h4>
                    </div>
                    <div class="tuplecol-3">
                        <img src="./images/c2.jpeg">
                        <h4>Murraththil_Vaanam</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-container">
            <h2 class="titles">Photo gallery</h2>
            <div class="tuple">
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p1.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p2.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p3.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p4.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p5.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p6.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p7.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p8.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p9.jpeg" alt="">
                    </a>
                </div>
                <div class="tuplecol">
                    <a href="">
                        <img src="./images/p10.jpeg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './includes/footer.php'?>
    <script src="./js/main.js"></script>
</body>

</html>