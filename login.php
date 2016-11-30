<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tempter</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/tempter.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>
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
                    <li><a href="near-you.php">Near You</a></li>
                    <li><a href="view-match.php">Matches</a></li>
                    <li><a href="#">Get Escort</a></li>
                    <li><a href="#">Recent Activity</a></li>
                    <li class="nav  navbar-right"><a href="login.php"><img src="images/g1.png" height="31px" alt="Tempter"></a>
                        <!-- <ul>
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                        </ul> -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="row-rl-margin">
        <div class="col-md-8 login-bg">        
           <div class="col-md-12">
             <div class="col-md-12">
                <div class="login-label text-center">
				    <h3><u>Login first to view matches</u></h3>				    
				</div>
             </div>   
             <div class="col-md-12">
             	<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control-signup" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email Address">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control-signup" id="exampleInputPassword1" placeholder="Password">
				  </div> 
				  <div class="login-label pull-right" style="margin-bottom:50px;">
				    <a href=""><p>Forgot Password<p></a>				    
				</div>
				  <button type="submit" class="btn btn-signup" style="width:150px">Sign Up</button>
				</form>	
				<div class="login-label-bottom text-center">		 
				    <a href="sign-up.php"><p class="text-center login-label-bottom"><u>Create an account if you dont have one</u><p></a>
				    </div>	
             </div>      	   
           </div>
        </div>
    </div>
    <!-- /.row -->                
   <!--  <footer>
        <div class="row text-center">
            <div class="col-lg-12">
               <p>Copyright &copy; Tempter 2016 | Terms &amp Condations</p>
            </div>
        </div>
    </footer> -->

    <!-- </div> -->
    <!-- /container -->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>