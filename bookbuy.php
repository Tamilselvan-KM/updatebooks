<?php
session_start();
//connection
$con = mysqli_connect('localhost', 'u724913348_ajGYc', 'Computirasoft@2020', 'u724913348_WfDJf'); 
//fetch book name
if(isset($_GET['bookname'])){
    $bookname = $_GET['bookname'];
}
$sql = "select * from movies where movie_name='$bookname'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $bname = $row['movie_bio'];
        echo $bname;
    }
}else{
    echo "error".mysqli_error($con);
}

// echo "<br>".$bname;
// echo $_SESSION['login'];
// echo $_SESSION['name']; 
// echo $_SESSION['email']; 

$username = $_SESSION['login'];
$name =  $_SESSION['name']; 
$email = $_SESSION['email'];

//send mail to the admin
$to = "thiruvalluvarmalaiyandi@gmail.com";
$subject="Thanks for  giving your info";
$message="Hi,". "\r\n" . "\r\n" .
        "Hello, there from test mail..." ."\r\n"."\r\n".
        "Thanks & Regards,". "\r\n" .
        "Web Admin"."\r\n" ;
$message .= "UserName:  ".$username."\r\n"."Name:   ".$name."\r\n"."Book Name:  ".$bname;
$from = $email;
$headers = "From:".$from."";

if(mail($to,$subject, $message, $headers)){
	//echo "sucess";
	echo '<script>
	        alert("Your Mail has been Sent");
	        location.href = "books.php";
	      </script>
	';
}else{
echo "error";
}

?>