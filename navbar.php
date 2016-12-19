<?php require ('header.php'); ?>
<?php require ('session.php'); ?>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
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
            <a href="online-members.php" class="brand-logo"><img src="images/logo.png" height="100px" alt="Tempter"></a> 
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="near-you.php">Near You</a></li>
                <li><a href="view-match.php">Matches</a></li>
                <li><a href="#">Get Escort</a></li>
                <li><a href="#">Recent Activity</a></li> 
                <?php
                  include('includes/config.php');
                  $user_query=mysqli_query($con, "select *  from members where member_id='$id_session'")or die(mysqli_error());
                  $row=mysqli_fetch_array($user_query); {
                ?>
                <li class="nav navbar-right dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="login.php"><img src="images/g1.png" height="31px" alt="Tempter"><span class="caret"></span><?php echo $row['member_name']; ?></a>
                <?php } ?>                
                  <ul class="dropdown-menu">                            
                    <li><a href='profile-view.php'>Profile</a></li>
                    <li><a href='my-profile.php'>Edit Profile</a></li>
                    <!--<li><a href='#'>Chat</a></li>-->
                    <li class='text-center'>--------------------------</li>
                    <li><a href='logout.php'>Logout</a></li>                      
                  </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
    <?php } ?>
</nav>