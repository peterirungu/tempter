<?php
	include 'config.php';
	if (isset($_POST['signup'])){
	    $member_name = $_POST['member_name'];
	    $email = $_POST['email'];
	    $location = $_POST['location'];    
	    $password= $_POST['password'];
        $hash_password = md5($_POST['password']);		    

	$sql_ins=mysqli_query($con, "insert into members(member_name, email, location, password, role) values ('$member_name','$email', '$location', '$hash_password', 'member' ) ")or die(mysqli_error());
	if($sql_ins==true)
			header('Location: login.php');
	else
		$msg="Insert Error:".mysqli_error();
	}
?>