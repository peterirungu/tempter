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
    <div class="col-md-12 signup-bg">
	    <div class="col-md-4 find-single"><img src="images/Findsingles.png" height="20px" width="250px" alt=""></div>
	    <div class="col-md-4 signup-image"><img src="images/lovestamp22.png" class="love-stamp" alt=""></div>  
	    <div class="col-md-4 have-fun"><img src="images/Havefun.png" height="20px" width="250px" alt=""></div>
	    <div class="col-md-4 signup-image2"><img src="images/lovestamp22.png" class="love-stamp" alt=""></div>
	    <div class="col-md-5 signup-form">
	        <div class="col-sm-6"><a href="login.php"><button class="btn-block btn-signup">Sign in</button></a> </div>  
	        <div class="col-sm-6"><button class="btn-block btn-signup">Sign up</button> </div> 
	        <div class="col-md-12"><img src="images/facebooklogincc39866.png" width="180px" height="51px" alt="facebook login">
	        </div>   
	         <div class="col-md-12">
	         <?php
				include 'includes/config.php';
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
	         	<form method="post">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="member_name" class="form-control-signup" id="signup-name" aria-describedby="emailHelp" placeholder="Enter Your Name" required="fill in this field">    
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control-signup" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email Address" required="fill in this field">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="name">Location</label>
				    <input type="text" name="location" class="form-control-signup" id="signup-location" aria-describedby="emailHelp" placeholder="Enter Your Location" required="fill in this field">    
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control-signup" id="exampleInputPassword1" placeholder="Password" required="fill in this field">
				  </div> 
				  <button type="submit" name="signup" class="btn btn-signup" style="width:200px">Sign Up</button>			  
				  <a href="https://www.facebook.com/dialog/oauth?client_id=108626559628699&redirect_uri=http://localhost/tempter/index.php&scope=publish_stream,email" title="Signup with facebook"><img src="images/signupwithfacebookbu.png" width="180px" height="51px" alt="facebook login"></a> 
				</form>
	        </div>      	   
        </div>
    </div>
</div>
<?php include 'footer.php' ?>