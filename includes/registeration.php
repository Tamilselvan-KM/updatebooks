<?php

//start a new session
session_start();
require_once 'connect.php';
?>
<?php
if(isset($_POST['regbtn'])){
    $user_name = $_POST['user_name'];
    $full_name = $_POST['user_full_name'];
    $user_email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $role = 2;
}
//define sql statement
$query_str = "SELECT * FROM users WHERE user_name='$user_name' && user_password='$password'";

//execute the query
$result = @$conn->query($query_str);

//handle error
if(!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}

if($result -> num_rows == 0) {
  //Insert statement
  $query_stry = "INSERT INTO users VALUES (NULL, '$user_name', '$full_name', '$user_email', '$password', '$role')";
  //Execute the query
  $insert_result = @$conn->query($query_stry);

  $new_result = @$conn->query($query_str);
  //It is a valid user. Need to store the user in Session Variables
  $_SESSION['login'] = $user_name;
  $result_row = $new_result->fetch_assoc();
  $_SESSION['role'] = $role;
  $_SESSION['name'] = $full_name;
  $_SESSION['email'] = $user_email;
  $_SESSION['id'] = $result_row['user_id'];
//update the login status
  $login_status = 3;
    echo '<script>
    alert("You have successfully registered!");
    </script>';
    header( "Refresh:1; url=../home.php", true, 303);
?>
<?php 
        } 
        else {
            echo '<script>
                    alert("This username is already registered!");
                </script>';
            header( "Refresh:2; url=../index.php", true, 303);
        }
?>