<?php
require_once('connect.php');
$username = '';
$password = '';
$login_status = 2;
if(isset($_POST['logbtn'])){
    if ( isset($_POST['user_name']) )
        $username = trim($_POST['user_name']);
    if ( isset($_POST['user_password']) )
        $password = trim($_POST['user_password']);
}

if (!empty($username)) {
    //The SQL select statement
    $query_stry = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password'";

    //Execute the query
    $result = @$conn->query($query_stry);
    if($result -> num_rows){
        //It is a valid user. Need to store the user in Session Variables
        session_start();
        $_SESSION['login'] = $username;
        $result_row = $result->fetch_assoc();
        $_SESSION['role'] = $result_row['user_role'];
        $_SESSION['name'] = $result_row['user_full_name'];
        $_SESSION['email'] = $result_row['user_email'];
        $_SESSION['id'] = $result_row['user_id'];

        //update the login status
        $login_status = 1;
        echo '<script>
            alert("login Successfull!");
          </script>';
        header( "Refresh:1; url=../home.php?ls=$login_status", true, 303);
    }else{
        echo '<script>
                alert("Invalid Username or Password!");
            </script>';
        header( "Refresh:1; url=../index.php", true, 303);

    }
}else{
    echo 'error';
}
// header( "Location: loginform.php?ls=$login_status");
// header( "Refresh:1; url=../home.php?ls=$login_status", true, 303);

$conn->close();