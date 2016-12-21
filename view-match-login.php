<?php include 'header.php' ?>
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="index.php">Tempter</a> -->
            <a href="" class="brand-logo"><img src="images/logo.png" height="100px" alt="Tempter"></a> 
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="">Tempter</a></li>                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="row-rl-margin">
    <div class="col-md-8 login-bg-l">        
        <div class="col-md-12">
	        <div class="col-md-12">
	            <div class="login-label text-center">
				    <h3><u>Login first to view matches</u></h3>				    
				</div>
	        </div>	        
	    </div>   
        <div class="col-md-12">
		         <?php if(isset($msg)) { echo $msg; } ?>
         	<form method="post">
				<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control-signup" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email Address">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control-signup" id="InputPassword1" placeholder="Password">
				</div> 
				<div class="login-label pull-right" style="margin-bottom:50px;">
				    <a href=""><p>Forgot Password<p></a>				    
				</div>
				<button type="submit" name="btn-login" class="btn btn-signup" style="width:150px">Sign in</button>
			</form>	
			<div class="login-label-bottom text-center">		 
			    <a href="index.php"><p class="text-center login-label-bottom"><u>Create an account if you dont have one</u><p></a>
			</div>	
        </div>        
    </div>
</div>
<?php
include('includes/config.php');

if (isset($_POST['btn-login'])){

$email=$_POST['email'];
$password=$_POST['password'];
$hashPassword = md5($password);


$login_query=mysqli_query($con, "select * from members where email='$email' and password='$hashPassword'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$member_name=$row['member_name'];

if ($count > 0){
session_start();
$_SESSION['id']=$row['member_id'];
$user=$row['member_name'];
$mem_id=$row['member_id'];

mysqli_query($con, "INSERT INTO history (date,action,member_id,data)VALUES(NOW(),'Login','$mem_id','$user')")or die(mysqli_error());

echo "<script>alert('Successfully Login!'); window.location='online-members.php'</script>";
}else{
	echo "<script>alert('Invalid Username or Password !'); window.location='login1.php'</script>";
	// $msg = "<div class='alert alert-danger'>
	// 				<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
	// 			</div>";
?>
<?php } 
}
?>
<?php include 'footer.php' ?>