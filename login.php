<?php include 'header.php' ?>
<?php

include 'includes/config.php';
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$password = $_POST['password'];
//Check If User Exist
$sql = "SELECT * FROM members WHERE email='$email' AND password='$password'";
$result = mysql_query($sql);
$rows=mysql_num_rows($result);
//If Email and Password Match Login Success
if($rows==1)
{
	// Set email session variable
	$_SESSION['email'] = $email;
	while($row = mysql_fetch_assoc($result)) {
	// Set session variables
	$_SESSION['member_id'] = $row["member_id"];
	$_SESSION['role'] = $row["role"];
	$_SESSION['name'] = $row["member_name"];
	}
	// Go To Homepage
	header('Location: index.php');	
}
//If Email and Password Do Not Match Login Fail
elseif($rows==0)
{
	header('Location: login.php?lgnmsg=fail');
}
}
?>
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
            <a href="index.php" class="brand-logo"><img src="images/logo.png" height="100px" alt="Tempter"></a> 
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Tempter</a></li>                
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
	        <?php
				if ($_GET['lgnmsg']=='fail'){
					echo"<div class='errormsg'>Email and Password Do Not Match</div>";
				}elseif ($_GET['lgnmsg']=='required'){
					echo"<div class='errormsg'>Please Login First To Be Granted Access</div>";
				}elseif ($_GET['lgnmsg']=='admin'){
					echo"<div class='errormsg'>Login As Admin To Access This Page</div>";
				}
			?>
	    </div>   
        <div class="col-md-12">
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
				<button type="submit" name="submit" class="btn btn-signup" style="width:150px">Sign in</button>
			</form>	
			<div class="login-label-bottom text-center">		 
			    <a href="sign-up.php"><p class="text-center login-label-bottom"><u>Create an account if you dont have one</u><p></a>
			</div>	
        </div>        
    </div>
</div>
<?php include 'footer.php' ?>