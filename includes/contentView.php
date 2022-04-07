<?php 
include_once 'header.php';
?>
<head>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body style="background-color:orange">
        <?php 
            include_once 'adminNav.php';
        ?>
    <div class="container my-5">
        <h3 class="text-center mb-3 text-primary">Daily Poetry</h3>
        <?php
            include_once 'connect.php';    
            $sql = "SELECT * FROM content";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="row">
                        <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Title</h3>
                                        <h5>'.$row["title"] .'</h5>
                                        <h3 class="card-title">Content</h3>
                                        <p class="card-text">'.$row["content"].'</p>
                                        <h3 class="card-title">Added Date</h3>
                                        <p class="card-text">'.$row["date"].'</p>
                                        <a href="contentDel.php?id='.$row['id'].'" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                        </div>
                    </div>

                ';
                        }
            } else {
                echo "<script>
                alert('No Content Found');
                location.href = '../content.php';
            </script>";
            }
        ?>
    </div>
        <?php 
            include_once 'footer.php';
        ?>
</body>
</html>



