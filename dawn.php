<?php 
require_once __DIR__ .'/../configs/database_mysql.php';
 
	//receive post data and sanitize them
	$username = htmlentities($_POST['_username']);
	$email = htmlentities($_POST['_email']);
	$password = htmlentities($_POST['_password']);
 
	// Check for username
	if ( !isset($username) || !empty($username) ) {
		echo 'Username is mandatory!';
		return;
	}
 if ( !isset($email) || !empty($email) ) {
		echo 'Username is mandatory!';
		return;
	}
	// Check for password
	if ( !isset($password) || !empty($password) ) {
		echo 'Password is mandatory!';
		return;
	}
 
	// escape data
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
 
	// insert to database
	$sql   = "insert into table (`username`, `email`,`password`) values ('". $username ."', '". $email ."','". $password ."')";
	$query = mysql_query($sql) or die('Error occurd : '. mysql_error(). '. Number : '.mysql_errno());
 
	// Check Query is ok
	if ( $query ) {
		echo 'Your data have been inserted well!'.
	
	?>