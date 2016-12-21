<?php include 'header.php'; ?>
    <?php include 'navbar.php'; ?>
    <div class="container signup-page">
        <div class="row">
            <div class="col-lg-12 signupbg">
                <div class="col-lg-4">
                    <h1 class="text-center" style="color:#fff; padding-top:80px;">FIND SINGLES</h1>       
                    <a href=""><img class="lovestamp" src="images/lovestamp22.png" height="150px" width="250px" alt="FIND SINGLES"></a>
                </div>
                <div class="col-lg-4 signup-form">
                    <a href="login.php"><button class="btn btn-signin" style="width:150px">Sign in</button></a> 
                    <button class="btn btn-signup" style="width:150px">Sign up</button> 
                    <form method="post">                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="member_name" class="form-control-signup" id="signup-name" aria-describedby="emailHelp" placeholder="Enter Your Name" required="fill in this field">    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control-signup" aria-describedby="emailHelp" placeholder="Enter Your email Address" required="fill in this field">
                        </div>
                        <div class="form-group">
                            <label for="name">Location</label>
                            <input type="text" name="location" class="form-control-signup" placeholder="Enter Your Location" required="fill in this field">    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control-signup"  placeholder="Password" required="fill in this field">
                        </div> 
                          <button type="submit" name="signup" class="btn btn-signup" style="width:150px">Sign Up</button>             
                          <a href="#"><img src="images/signupwithfacebookbu.png" width="170px" height="51px" alt="facebook login" style="padding-left:0px"></a> 
                    </form>
                </div>
                <div class="col-lg-4">
                    <h1 class="text-center" style="color:#fff; padding-top:80px;">HAVE FUN</h1>                    
                    <a href=""><img class="lovestamp" src="images/lovestamp22.png" height="150px" width="250px" alt="HAVE FUN"></a>
                </div>                
            </div>
        </div>
        <!-- /.row -->        
    </div>
    <?php include 'includes/signup.php'; ?>
<?php include 'footer.php' ?>