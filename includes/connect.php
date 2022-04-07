<?php
	//define parameters
	$host = "localhost";
	$port;
	$login = "u724913348_ajGYc";
	$password = 'Computirasoft@2020';
	$database = "u724913348_WfDJf";
	$tblMovies = "movies";
	$tblUsers = "users";
	$tblReviews = "reviews";
	$tblFavorite = "favorite";
  
	//Connect to the mysql server
	$conn = @new mysqli($host, $login, $password, $database, $port);

	//Handle connection errors 
	if (mysqli_connect_errno() != 0) {
	    $errno = mysqli_connect_errno();
	    $errmsg = mysqli_connect_error();
	    die("Connect Failed with: ($errno) $errmsg<br/>\n");
	}
?>