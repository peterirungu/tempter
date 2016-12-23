<?php
include('config.php');

if (isset($_POST['btn-login'])){

$email=$_POST['email'];
$password=$_POST['password'];
$hashPassword = md5($password);


$login_query=mysqli_query($con, "select * from profile_tbl where email='$email' and password='$hashPassword'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$name=$row['name'];

if ($count > 0){
session_start();
$_SESSION['id']=$row['member_id'];
$user=$row['name'];
$mem_id=$row['member_id'];

mysqli_query($con, "INSERT INTO history (date,action,member_id,data)VALUES(NOW(),'Login','$mem_id','$user')")or die(mysqli_error());

echo "<script>alert('Successfully Login!'); window.location='profile-view.php'</script>";
}else{
	echo "<script>alert('Invalid Username or Password !'); window.location='login.php'</script>";
?>
<?php } 
}
?>