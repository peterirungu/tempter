<?php
	include 'config.php';
	if (isset($_POST['signup'])){
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $city = $_POST['city'];    
	    $password= $_POST['password'];
        $hash_password = md5($_POST['password']);		    

	$sql_ins=mysqli_query($con, "insert into profile_tbl(name, email, city, password, role) values ('$name','$email', '$city', '$hash_password', 'member' ) ")or die(mysqli_error());
	if($sql_ins==true)
			// header('Location: login.php');
		echo "<script>alert('Successfully registered proceed to login!'); window.location='login.php'</script>";
	else
		$msg="Insert Error:".mysqli_error();
	}
?>