<?php
require_once('connect.php');
$username = '';
$password = '';
$login_status = 2;
if(isset($_POST['adminlogbtn'])){
    if ( isset($_POST['admin_user_name']) )
        $admin_user_name = trim($_POST['admin_user_name']);
    if ( isset($_POST['admin_password ']) )
        $admin_password  = trim($_POST['admin_password ']);
}

if (!empty($admin_user_name)) {
    //The SQL select statement
    $query_stry = "SELECT * FROM users WHERE user_name='$admin_user_name' AND user_password='$admin_password '";

    //Execute the query
    $result = @$conn->query($query_stry);
    if($result){
        echo '<script>
            alert("login Successfull!");
          </script>';
        header( "Refresh:1; url=../content.php", true, 303);
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