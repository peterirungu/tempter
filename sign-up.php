<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<div class="row-rl-margin">
    <div class="col-md-12 signup-bg">
    <div class="col-md-4 signup-label"><img src="images/Findsingles.png" height="50px" width="280px" alt=""></div>
    <div class="col-md-4 signup-image"><img src="images/lovestamp22.png" height="180px" width="200px" alt=""></div>
       <div class="col-md-6 signup-form">
         <div class="col-sm-6"><button class="btn-block btn-signup">Sign in</button></div>  
         <div class="col-sm-6"><button class="btn-block btn-signup">Sign up</button> </div> 
         <div class="col-md-12"><img src="images/facebooklogincc39866.png" width="180px" height="51px" alt="facebook login"></div>   
         <div class="col-md-12">
         <?php
			include 'includes/config.php';
			if (isset($_POST['signup'])){
			    $member_name = $_POST['member_name'];
			    $email = $_POST['email'];
			    $location = $_POST['location'];    
			    $password= $_POST['password'];
	            $hash_password = md5($_POST['password']);		    

			$sql_ins=mysql_query("insert into members(member_name, email, location, password, role) values ('$member_name','$email', '$location', '$hash_password', 'member' ) ")or die(mysql_error());
			if($sql_ins==true)
					header('Location: login.php');
			else
				$msg="Insert Error:".mysql_error();
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
			  <button type="submit" name="signup" class="btn btn-signup" style="width:150px">Sign Up</button>
			</form>
         </div>      	   
       </div>
    </div>
</div>
<?php include 'footer.php' ?>