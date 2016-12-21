<?php include 'header.php' ?>
    <?php include 'navbar.php'; ?> 
    <!-- Page Content -->
    <div class="container signup-page">
        <div class="row">
            <div class="col-lg-12 signupbg">
                <div class="col-lg-4">
                    <h1 class="text-center" style="color:#fff; padding-top:80px;">FIND SINGLES</h1>       
                    <a href=""><img class="lovestamp" src="images/lovestamp22.png" height="150px" width="250px" alt="FIND SINGLES"></a>
                </div>
                <div class="col-lg-4 signup-form">
                    <button class="btn btn-signin-login" style="width:150px">Sign in</button></a> 
                    <a href="index.php"><button class="btn btn-signup-login" style="width:150px">Sign up</button> </a>
                    <a href="#"><img src="images/facebooklogincc39866.png" width="170px" height="51px" alt="facebook login" style="padding-left:0px"></a> 

                    <form class="login-form" method="post">
                       <?php if(isset($msg)) { echo $msg; } ?>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control-signup" aria-describedby="emailHelp" placeholder="Enter Your email Address" required="Enter registered email address to login">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control-signup" placeholder="Password" required="Enter your password to login">
                        </div> 
                        <div class="form-group">
                           <a href=""><label for="name">Forgot Password</label></a>                               
                        </div> 
                          <button type="submit" name="btn-login" class="btn btn-signup" style="width:150px">Sign in</button>                        
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
    <?php include 'includes/login.php' ?>
<?php include 'footer.php' ?>