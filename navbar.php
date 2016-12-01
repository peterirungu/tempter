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
                <?php
                  if (!isset($_SESSION['role'])){
                  ?>
                    <li class="nav navbar-right"><a href="login.php"><span class="fa fa-user"></span> Login</a></li>
                  <?php         
                  } elseif (isset($_SESSION['role'])) {
                ?>                                    
                <li class="nav navbar-right dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="login.php"><img src="images/g1.png" height="31px" alt="Tempter"><span class="caret"></span><?php echo"{$_SESSION['member_id']} {$_SESSION['member_name']}" ?></a>
                    <ul class="dropdown-menu">
                    <?php
                        if ($_SESSION['role']=='member'){
                            echo "        
                                  <li><a href='profile-view.php'>Profile</a></li>
                                  <li><a href='my-profile.php'>Edit Profile</a></li>
                                  <li><a href='#'>Chat</a></li>
                                  <li class='text-center'>--------------------------</li>
                                  <li><a href='logout.php'>Logout</a></li>
                                 ";
                        }
                    ?>
                    <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>