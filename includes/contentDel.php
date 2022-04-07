<?php
    require_once('connect.php');
    if(isset($_GET['id']))
    {
        $content_id = $_GET['id'];
    }

    $content_del = "DELETE FROM content WHERE 	id= '$content_id'";
    $result_del = mysqli_query($conn, $content_del);

    if($result_del){
        echo "<script>
                alert('Content Deleted');
                location.href = 'contentView.php';
            </script>";
    }
    else{
    echo "error".mysqli_error($conn);
    }