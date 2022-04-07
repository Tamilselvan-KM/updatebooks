<?php
session_start();
//connection
$con = mysqli_connect('localhost', 'u724913348_ajGYc', 'Computirasoft@2020', 'u724913348_WfDJf'); 
//fetch book name
if(isset($_GET['id'])){
    $favid = $_GET['id'];
}
if(isset($_GET['title'])){
    $favtitle = $_GET['title'];
}
if (isset($_SESSION['id'])) {
    $session_id = $_SESSION['id'];
}
 
$sql_sel = "select * from favorite where userid='$session_id'";
$result_sel = mysqli_query($con, $sql_sel);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result_sel)){
        $bktitle = $row['fav_title'];
        //echo $bktitle;
    }
}
//echo $favtitle;
if($bktitle != $favtitle){
    $sql = "INSERT INTO favorite (userid, fav_movie, fav_title) VALUES ('$session_id', '$favid', '$favtitle')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo '<script>
            alert("This Book has been add as a Favorite");
             location.href = "../books.php";
      </script>
    ';
    }else{
        echo "error".mysqli_error($con);
    }    
}else{
        echo '<script>
            alert("This Book has been already in your Favorite");
             location.href = "../books.php";
      </script>
    ';
}

?>
