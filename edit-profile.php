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
			<a href="#"><button class="btn btn-edit-profile-nav"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Profile</button></a>
			<a href="#"><button class="btn btn-edit-profile-gallery-nav"><span class="glyphicon glyphicon-camera ico-camera" aria-hidden="true"></span>  Gallery</button></a>
			<a href="profile-view.php"><button class="btn btn-edit-profile-nav pull-right"> View Profile</button></a>
			<!-- profile photo upload -->
			<div class="clearfix" style="padding:3px;"></div>
		    <!-- Widget: user widget style 1 -->
		    <div id="edit-profile" class="box1 box-widget widget-user">
		        <!-- Add the bg color to the header using any of the bg-* classes -->
		            <div class="widget-user-header">              
		            </div>
		            <div class="widget-user-image">
		              <img class="img-circle" src="images/g2.png" alt="User Avatar" width="130px" height="130px">
		            </div>
		            <div class="box-footer">
		                <div class="row">
		                    <div class="col-md-12 text-center">
		                       <a href="#"><button class="btn btn-edit-profile-nav"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>  Upload Profile Picture</button></a>
		                    </div>
		                    <!-- /.description-block -->                                      
		                    <br>
		                    <div class="col-md-12">
		                        <div class="col-md-12">
		                        	<!-- <div class="col-lg-6">
								   		<h4 style="color:#e20025"><strong>Basic Information </strong></h4>
								   </div> -->
								   <hr class="edit-profile-divider"> 
								   <div class="col-lg-12">
								   		<a href="#"><button class="btn btn-edit-profile-nav pull-right" style="margin-right:0px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button></a>
								   </div>
								   
		                        </div>		                        
		                        <div class="col-md-12">
		                            <div class="box-body no-padding">                                
		                            </div>
		                        </div>                                           
		                    </div>
		                    <div class="col-md-12">
		                        <h4 style="color:#e20025"><strong>Basic Information</strong></h4>
		                        <hr>
		                        <table class="table table-condensed">                
                                    <tr>
                                      <td>Name:</td><td><input type="text" name="name" size="40" placeholder="Enter Your name here..." /></td>
                                    </tr>
                                    <tr>
                                      <td>Date of Birth:</td>
                                      <td>
	                                    <select type="text" name="month" placeholder="Please Select..." style="width:180px; height:20px;">
	                                      	<option selected>Month</option>
	                                      	<option>January</option>
	                                      	<option>February</option>
	                                      	<option>March</option>
	                                      	<option>April</option>
	                                      	<option>May</option>
	                                      	<option>June</option>
	                                      	<option>July</option>
	                                      	<option>August</option>
	                                      	<option>September</option>
	                                      	<option>October</option>
	                                      	<option>November</option>
	                                      	<option>December</option>
                                        </select> - 
	                                    <select type="text" name="year" placeholder="Please Select..." style="width:150px; height:20px;">
	                                      	<option selected>Year</option>
	                                      	<option>1998</option>
	                                      	<option>1997</option>
	                                      	<option>1996</option>
	                                      	<option>1995</option>
	                                      	<option>1994</option>
	                                      	<option>1993</option>
	                                      	<option>1992</option>
	                                      	<option>1991</option>
	                                      	<option>1990</option>
	                                      	<option>1989</option>
	                                      	<option>1988</option>
	                                      	<option>1987</option>
	                                      	<option>1986</option>
	                                      	<option>1985</option>
	                                      	<option>1984</option>
	                                      	<option>1983</option>
	                                      	<option>1982</option>
	                                      	<option>1981</option>
	                                      	<option>1980</option>
	                                      	<option>1979</option>
	                                      	<option>1978</option>
	                                      	<option>1977</option>
	                                      	<option>1976</option>
	                                      	<option>1975</option>
	                                      	<option>1974</option>
	                                      	<option>1973</option>
	                                      	<option>1972</option>
	                                      	<option>1971</option>
	                                      	<option>1970</option>
	                                      	<option>1969</option>
	                                      	<option>1968</option>
	                                      	<option>1967</option>
	                                      	<option>1966</option>
	                                      	<option>1965</option>
	                                      	<option>1964</option>
	                                      	<option>1963</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Gender:</td>
                                      <td><select type="text" name="gender" style="width:300px; height:20px;">
                                      	<option>Female</option>
                                      	<option>Male</option>
                                      	<option>Other</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td>Marital Status:</td> <td><select type="text" name="maritalstatus" style="width:300px; height:20px;">
                                      	<option>Single</option>
                                      	<option>Married</option>
                                      	<option>Divorced</option>
                                      	<option>Windowed</option>
                                      	<option>Complicated</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td>Country:</td> <td><select type="text" name="country" style="width:300px; height:20px;">
                                      	<option>Kenya</option>
                                      	<!-- <option>Married</option>
                                      	<option>Divorced</option>
                                      	<option>Windowed</option>
                                      	<option>Complicated</option> -->
                                      </select></td>
                                    </tr> 
                                    <tr>
                                      <td>City:</td> <td><input type="text" name="city" size="40" placeholder="Enter your city" /></td>
                                    </tr>  
                                    <tr>
                                      <td>Interested in:</td> <td><select type="text" name="interest" placeholder="Please Select..." style="width:270px; height:20px;">
                                      	<option selected>Please Select...</option>
                                      	<option>Female</option>
                                      	<option>Male</option>
                                      	<option>Both</option>
                                      </select></td>
                                    </tr>                                      
                                </table>
		                    </div>
		                    <div class="col-md-12">
		                        <h4 style="color:#e20025"><strong>Appearance</strong></h4>
		                        <hr>
		                        <table class="table table-condensed">                
                                    <tr>
                                      <td>Height:</td>  <td><input type="text" name="height" size="40" placeholder="Height(ft/metres)" /></td>
                                    </tr>
                                    <tr>
                                      <td>Complexion:</td>   <td><select type="text" name="complexion" placeholder="Please Select..." style="width:270px; height:20px;">
                                      	<option selected>Please Select...</option>
                                      	<option>Brown Skin</option>
                                      	<option>Light Skin</option>
                                      	<option>Black Skin</option>
                                      	<option>Chocolate</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td>Body Type:</td>  <td><select type="text" name="bodytype" placeholder="Please Select..." style="width:270px; height:20px;">
                                      	<option selected>Please Select...</option>
                                      	<option>Slim</option>
                                      	<option>Plus size</option>
                                      	<option>Average</option>
                                      	<option>Model</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td>Facial Hair</td> <td><select type="text" name="complexion" placeholder="Please Select..." style="width:270px; height:20px;">
                                      	<option selected>Please Select...</option>
                                      	<option>Brown Skin</option>
                                      	<option>Light Skin</option>
                                      	<option>Black Skin</option>
                                      	<option>Chocolate</option>
                                      </select></td>
                                    </tr>                                      
                                </table>
		                    </div>
		                    <div class="col-md-12">
		                        <h4 style="color:#e20025"><strong>Lifestyle</strong></h4>
		                        <hr>
		                        <table class="table table-condensed">                
                                    <tr>
                                      <td>Do you Drink?</td>  <td><select type="text" name="drunk" placeholder="Please Select..." style="width:270px; height:20px;">
                                      	<option selected>Please Select...</option>
                                      	<option>No</option>
                                      	<option>Yes</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td>Do you Smoke?</td>   <td><select type="text" name="smoke" placeholder="Please Select..." style="width:270px; height:20px;">
                                      	<option selected>Please Select...</option>
                                      	<option>No</option>
                                      	<option>Yes</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td>Occupation:</td> <td><input type="text" name="occupation" size="40" placeholder="What is your occupation" /></td>
                                    </tr>
                                    <tr>
                                      <td>Employement Status:</td> <td><select type="text" name="employmentstatus" style="width:270px; height:20px;">
                                      	<option selected>Please Select...</option>
                                      	<option>Employed</option>
                                      	<option>Unemployed</option>
                                      	<option>Self Employed</option>
                                      	<option>None</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                      <td>Living Situation</td> 
                                      <td><select type="text" name="living" style="width:270px; height:20px;">
                                      	<option selected>Please Select...</option>
                                      	<option>Stable</option>
                                      	<option>Average</option>
                                      </select></td>
                                    </tr> 
                                    <tr>
                                      <td>Do you Have Children?</td>
                                      <td><select type="text" name="children" style="width:270px; height:20px;">
                                        <option selected>Please Select...</option>
                                      	<option>No</option>
                                      	<option>Yes</option>
                                      </select></td>
                                    </tr>                                      
                                </table>
		                    </div>
		                    <div class="col-md-12">
		                        <h4 style="color:#e20025"><strong>Your Profile</strong></h4>
		                        <hr>
		                        <table class="table table-condensed">                
                                    <tr>
                                      <td>Profile Heading:</td><td><input type="text" name="profileheading" size="40"/></td>
                                    </tr>
                                    <tr>
                                      <td>About Yourself:</td><td><textarea name="aboutme" cols="40" rows="5" > </textarea></td>
                                    </tr>
                                    <tr>
                                      <td>What are you looking for in a partner:</td>  <td><textarea name="interest" cols="40" rows="5" ></textarea></td>
                                    </tr>
                                    <tr>
                                      <td></td> <td></td>
                                    </tr>
                                                                       
                                </table>
		                    </div>                                      
		                </div>                 
		            <!-- /.col -->
		            </div>
		            <!-- /.row -->
		    </div>
		     
		</div> 
   <!--  </div>  -->
<!-- /.row -->
</div>
<?php include 'footer.php' ?>