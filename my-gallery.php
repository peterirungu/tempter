<?php include 'header.php' ?>
<?php include 'navbar-auth.php' ?>
<div class="row-rl-margin">  
	<!--  <div class="row-rl-margin"  > -->
	    <!-- Page Features -->
		<div class="col-lg-12" >
		   <div class="col-lg-6">
		   		<h4 style="color:#7f0001"><span class="glyphicon glyphicon-user"></span><strong> Edit Profile </strong></h4>
		   </div>
		   <div class="col-lg-6">
		   		<a href="#"><button class="btn-premium pull-right" style="margin-right:70px;"><span class="fa fa-asterisk" aria-hidden="true"></span> Become a Premium Member</button></a>
		   </div>                
		</div>
		<div class="col-lg-11">
			<a href="edit-profile.php"><button class="btn btn-my-gallery-profile-nav"><span class="glyphicon glyphicon-user ico-user-gallery" aria-hidden="true"></span>  Profile</button></a>
			<a href="my-gallery.php"><button class="btn btn-my-gallery-nav"><span class="glyphicon glyphicon-camera ico-camera-gallery" aria-hidden="true"></span>  Gallery</button></a>
			<a href="profile-view.php"><button class="btn btn-edit-profile-nav pull-right"> View Profile</button></a>
			<!-- profile photo upload -->
			<div class="clearfix" style="padding:3px;"></div>
		    <?php include 'gallery.php'; ?>
		     
		</div> 
   <!--  </div>  -->
<!-- /.row -->
</div>
<?php include 'footer.php' ?>