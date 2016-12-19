<?php

// 	 $DBhost = "localhost";
// 	 $DBuser = "root";
// 	 $DBpass = "root";
// 	 $DBname = "tempter";
	 
// 	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
//      if ($DBcon->connect_errno) {
//          die("ERROR : -> ".$DBcon->connect_error);
//      }
// 
// mysql_select_db('tempter',  mysql_connect('localhost','root','root'))or die(mysql_error());



// Create connection
$con=mysqli_connect("localhost","root","root","tempter");// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>