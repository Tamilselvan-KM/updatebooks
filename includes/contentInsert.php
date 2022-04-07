<?php
include_once 'connect.php';

// if(isset($_POST['button'])){
  $title = $_POST['title'];
  $content = $_POST['contents'];
  $date = $_POST['date'];
  $contentLen = strlen($content);
  //echo $contentLen;

  if($contentLen < 10){
    echo "<script> alert('Please Enter minimum 6 characters');
        location.href = '../content.php';
    </script>";
  }
  else if($contentLen > 5000){
    echo "<script>
    alert('Please Enter maximum characters as 5000');
    location.href = '../content.php';

    </script>".$contentLen;
  }
  else{
    $sql = "INSERT INTO content (title, content, date) VALUES('$title', '$content', '$date')";

    $result = mysqli_query($conn, $sql);


    if($result){
      echo "<script>
              alert('Content added');
              location.href = 'contentView.php';
      </script>";
    }
    else{
      echo "error".mysqli_error($conn);
            echo "<script>
              alert('Content not added');
              location.href = '../content.php';
      </script>";
    }

  }

?>