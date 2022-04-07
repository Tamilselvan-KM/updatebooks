<?php 
include_once 'includes/header.php';
?>

<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    include_once 'includes/mainNav.php';
        function artPage($src, $bklink){
            echo '
            <div class="col-lg-4 col-md-4 ">
                <div>
                    <img src="'.$src.'" class="img-fluid" />
                </div>
                <div class="content text-center">
                    <div class="fs-2 mb-4">
                        <a href="'.$bklink.'" class="btn btn-primary fs-5 my-1">View Article</a>
                    </div>
                </div>
            </div>
            ';
        }
    ?>
    <div class="container">
        <div class="row my-3">
            <h2 class="text-center">Article</h2>
            <?php 
                artPage("./images/art1.jpeg", "includes/serious.php?img=art1&serious=4");
                artPage("./images/art2.jpeg", "includes/serious.php?img=art2&serious=11");
                artPage("./images/art3.jpeg", "includes/serious.php?img=art3&serious=7");
                artPage("./images/art4.jpeg", "includes/serious.php?img=art4&serious=8");
                artPage("./images/art5.jpeg", "includes/serious.php?img=art5&serious=12");
                artPage("./images/art6.jpeg", "includes/serious.php?img=art6&serious=9");
                artPage("./images/art7.jpeg", "includes/serious.php?img=art7&serious=15");
                artPage("./images/art8.jpeg", "includes/serious.php?img=art8&serious=1");
                artPage("./images/art9.jpeg", "includes/serious.php?img=art9&serious=1");
                artPage("./images/art10.jpeg", "includes/serious.php?img=art10&serious=6");
                artPage("./images/art11.jpeg", "includes/serious.php?img=art11&serious=1");
            ?>
        </div>
    </div>
    <?php
     include_once 'includes/footer.php';
    ?>
    <script src="./js/url.js"></script>

</body>