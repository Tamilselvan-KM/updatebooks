<?php
session_start();

//destroy the session data on disk
session_destroy();

//delete the session cookie
setcookie(session_name(), '', time()-3600);

//destroy the $_SESSION array
$_SESSION = array();
echo '<script>
alert("You have logout successfully!");
</script>';
header( "Refresh:1; url=../index.php", true, 303);

?>