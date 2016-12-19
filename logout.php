<?php
include('includes/config.php');
include('session.php');

$logout_query=mysqli_query($con, "select * from members where member_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$user=$row['member_name'];
$mem_id=$row['member_id'];
session_start();
session_destroy();

mysqli_query($con, "INSERT INTO history (date,action,member_id,data)VALUES(NOW(),'Logout','$mem_id','$user')")or die(mysqli_error());

header('location:index.php');

?>