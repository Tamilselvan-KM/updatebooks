<?php
session_start();
include_once ('connect.php');

if(isset($_POST['updbtn'])){
    //retrieve all fields from the previous page
    $user_id = $_POST['id'];
    $user_name = $_POST['user_name'];
    $full_name = $_POST['user_full_name'];
    $user_email = $_POST['user_email'];
    $password = $_POST['user_password'];

    //update statement
    $query_str = "UPDATE users SET
        user_name='$user_name',
        user_full_name='$full_name',
        user_email='$user_email',
        user_password='$password'
        WHERE user_id='$user_id'";

    //execute the query
    $result = @$conn->query($query_str);

    //Handle selection errors
    if (!$result) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Connection Failed with: $errno, $errmsg<br/>\n";
    exit;
    }else{
            //The SQL select statement
            $query = "SELECT * FROM users WHERE user_name='$user_name' AND user_password='$password'";

            //Execute the query
            $result_sel = @$conn->query($query);
            if($result_sel -> num_rows){
                session_destroy();
                //It is a valid user. Need to store the user in Session Variables
                session_start();
                $_SESSION['login'] = $user_name;
                $result_row = $result_sel->fetch_assoc();
                $_SESSION['role'] = $result_row['user_role'];
                $_SESSION['name'] = $result_row['user_full_name'];
                $_SESSION['id'] = $result_row['user_id'];
                //update the login status
                $login_status = 1;
            }
        echo '<script>
            alert("Your account has been updated!");
        </script>';
    }
    header( "Refresh:2; url=updateprofile.php", true, 303);
}
?>