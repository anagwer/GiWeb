<?php
	$conn = new mysqli('sql12.freesqldatabase.com', 'sql12752389', 'At5XKnZMJa', 'sql12752389');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	
<?php

// Database configuration 	
$hostname = "sql12.freesqldatabase.com"; 
$username = "sql12752389"; 
$password = "At5XKnZMJa"; 
$dbname   = "sql12752389";
 
// Create database connection 
$con = new mysqli($hostname, $username, $password, $dbname); 
 
// Check connection 
if ($con->connect_error) { 
	die("Connection failed: " . $con->connect_error); 
}

?>
