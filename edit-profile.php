<?php include 'header.php' ?>
<?php include 'navbar-auth.php' ?>
<div class="row-rl-margin" style="margin-top: -56px;">  
  <!-- Page Features -->
  <div class="col-lg-12" >
    <div class="col-lg-6">
   		<h4 style="color:#7f0001"><span class="glyphicon glyphicon-user"></span><strong> Edit Profile </strong></h4>
    </div>
    <div class="col-lg-6">
   		<a href="#"><button class="btn-premium pull-right"><span class="fa fa-asterisk"></span> Become a Premium Member</button></a>
    </div>                
  </div>
	<div class="col-lg-12">
		<a href="edit-profile.php"><button class="btn btn-edit-profile-nav"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Profile</button></a>

		<a href="my-gallery.php"><button class="btn btn-edit-profile-gallery-nav"><span class="glyphicon glyphicon-camera ico-camera" aria-hidden="true"></span>  Gallery</button></a>

		<a href="profile-view.php"><button class="btn btn-edit-profile-nav pull-right"> View Profile</button></a>
		<!-- profile photo upload -->
    <?php
      include('includes/config.php');
      $profile_query=mysqli_query($con, "select *  from profile_tbl where member_id='$id_session'")or die(mysqli_error());
      $row=mysqli_fetch_array($profile_query); 
      $id=$row['member_id'];
      // var_dump($id);
    ?>            
		  <div class="clearfix" style="padding:3px;"></div>
		  <!-- Widget: user widget style 1 -->
		  <div id="edit-profile" class="box1 box-widget widget-user">
		    <div class="widget-user-header"></div>
        <div class="widget-user-image">
          <img class="img-circle" id='img-upload' src="uploads/<?php echo $row['ppicture']; ?>" onerror="this.src='images/default.jpeg';" width="130px" height="130px">
        </div>		            
        <div class="box-footer">         
		      <div class="row">
	          <div class="col-md-12 text-center">
              <span class="input-group-btn">
	              <span class="btn btn-edit-profile-nav btn-file">
                  <span class="glyphicon glyphicon-upload"></span>
	                  Upload profile picture<input type="file" name="ppicture" id="imgInp">
	              </span>
	            </span>
            </div>		                                                
		        <br>
            <div class="col-md-12">
              <div class="col-md-12">
	              <!-- <div class="col-lg-6">
							  <h4 style="color:#e20025"><strong>Basic Information </strong></h4>
							  </div> -->
							  <hr class="edit-profile-divider">           								   
              </div>		                        
              <div class="col-md-12">
                <div class="box-body no-padding"></div>
              </div>                                           
            </div>
            <form method="post" action="">
  		        <div class="col-md-12">          
  		          <h4 style="color:#e20025"><strong>Basic Information</strong></h4>
  		          <hr>
  		          <table class="table table-condensed">                
                  <tr>
                    <td>Name:</td><td><input type="text" name="name" size="40" placeholder="Enter Your name here..." value="<?php echo $row['name']; ?>" /></td>
                  </tr>
                  <tr>
                    <td>Date of Birth:</td>
                    <td>
                      <select type="text" name="month" placeholder="Please Select..." style="width:180px; height:20px; " value="<?php echo $row['month']; ?>">
                        <option selected>Month</option><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option>
                      </select> - 

                      <select type="text" name="year" placeholder="Please Select..." style="width:150px; height:20px;" value="<?php echo $row['year']; ?>">
                        <option selected>Year</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Gender:</td>
                    <td>
                      <select type="text" name="gender" style="width:300px; height:20px;" value="<?php echo $row['gender']; ?>">
                        <option>Female</option><option>Male</option><option>Other</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Marital Status:</td> 
                    <td>
                      <select type="text" name="maritalstatus" style="width:300px; height:20px;" value="<?php echo $row['maritalstatus']; ?>">
                        <option>Single</option><option>Married</option><option>Divorced</option><option>Windowed</option><option>Complicated</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Country:</td> 
                    <td>
                      <select type="text" name="country" style="width:300px; height:20px;" value="<?php echo $row['country']; ?>">
                        <option>Kenya</option>
                      </select>
                    </td>
                  </tr> 
                  <tr>
                    <td>City:</td> 
                    <td><input type="text" name="city" size="40" placeholder="Enter your city" value="<?php echo $row['city']; ?>" /></td>
                  </tr>  
                  <tr>
                    <td>Interested in:</td> 
                    <td>
                      <select type="text" name="interest" placeholder="Please Select..." style="width:270px; height:20px;" value="<?php echo $row['interest']; ?>">
                        <option selected>Please Select...</option><option>Female</option><option>Male</option><option>Both</option>
                      </select>
                    </td>
                  </tr>                                      
                </table>
  		        </div>

  	          <div class="col-md-12">
  	            <h4 style="color:#e20025"><strong>Appearance</strong></h4>
  	            <hr>
  	            <table class="table table-condensed">                
                  <tr>
                    <td>Height:</td>  
                    <td><input type="text" name="height" size="40" placeholder="Height(ft/metres)" value="<?php echo $row['height']; ?>" /></td>
                  </tr>
                  <tr>
                    <td>Complexion:</td>   
                    <td>
                      <select type="text" name="complexion" placeholder="Please Select..." style="width:270px; height:20px;" value="<?php echo $row['complexion']; ?>">
                        <option selected>Please Select...</option><option>Brown Skin</option><option>Light Skin</option><option>Black Skin</option><option>Chocolate</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Body Type:</td>  
                    <td>
                      <select type="text" name="bodytype" placeholder="Please Select..." style="width:270px; height:20px;"  value="<?php echo $row['bodytype']; ?>">
                        <option selected>Please Select...</option><option>Slim</option><option>Plus size</option><option>Average</option><option>Model</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Facial Hair</td> 
                    <td>
                      <select type="text" name="facialhair" placeholder="Please Select..." style="width:270px; height:20px;"  value="<?php echo $row['facialhair']; ?>">
                        <option selected>Please Select...</option><option>Brown</option><option>Light</option><option>Black</option>
                      </select></td>
                  </tr>                                      
                </table>
  	          </div>

  	          <div class="col-md-12">
  	            <h4 style="color:#e20025"><strong>Lifestyle</strong></h4>
  	            <hr>
  	            <table class="table table-condensed">                
                  <tr>
                    <td>Do you Drink?</td>  
                    <td>
                      <select type="text" name="drunk" placeholder="Please Select..." style="width:270px; height:20px;" value="<?php echo $row['drunk']; ?>">
                        <option selected>Please Select...</option><option>No</option><option>Yes</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Do you Smoke?</td>   
                    <td>
                      <select type="text" name="smoke" placeholder="Please Select..." style="width:270px; height:20px;" value="<?php echo $row['smoke']; ?>">
                        <option selected>Please Select...</option><option>No</option><option>Yes</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Occupation:</td> 
                    <td><input type="text" name="occupation" size="40" placeholder="What is your occupation" value="<?php echo $row['occupation']; ?>" /></td>
                  </tr>
                  <tr>
                    <td>Employement Status:</td>
                    <td>
                      <select type="text" name="employmentstatus" style="width:270px; height:20px;" value="<?php echo $row['employmentstatus']; ?>">
                        <option selected>Please Select...</option><option>Employed</option><option>Unemployed</option><option>Self Employed</option><option>None</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Living Situation</td> 
                    <td>
                      <select type="text" name="living" style="width:270px; height:20px;" value="<?php echo $row['living']; ?>">
                        <option selected>Please Select...</option><option>Stable</option><option>Average</option>
                      </select>
                    </td>
                  </tr> 
                  <tr>
                    <td>Do you Have Children?</td>
                    <td>
                      <select type="text" name="children" style="width:270px; height:20px;" value="<?php echo $row['children']; ?>">
                        <option selected>Please Select...</option><option>No</option><option>Yes</option>
                      </select>
                    </td>
                  </tr>                                      
                </table>
  	          </div>

  	          <div class="col-md-12">
  	            <h4 style="color:#e20025"><strong>Your Profile</strong></h4>
  	            <hr>
  	            <table class="table table-condensed">                
                  <tr>
                    <td>Profile Heading:</td>
                    <td><input type="text" name="profileheading" size="40" value="<?php echo $row['profileheading']; ?>" />
                    </td>
                  </tr>
                  <tr>
                    <td>About Yourself:</td>
                    <td>
                      <textarea name="aboutme" cols="40" rows="5" ><?php echo $row['profileheading']; ?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>What are you looking for in a partner:</td>  
                    <td>
                      <textarea name="lookingfor" cols="40" rows="5" ><?php echo $row['profileheading']; ?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td></td> <td></td>
                  </tr>
                </table>
  	          </div> 

  	          <div class="col-lg-12 text-center">
                <button type="submit" name="update" class="btn btn-edit-profile-nav" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Save Changes </button>
              </div>
            </form>
            <?php include 'profile-management.php'; ?>
          </div>	            
		      <!-- /.row -->
        </div>      
	</div>
</div>
<?php
      include('includes/config.php');
      $id =$_GET['id_session'];
      if (isset($_POST['update'])) {

                  $name = $_POST['name'];
                  $month = $_POST['month'];
                  $year = $_POST['year'];
                  $gender = $_POST['gender'];
                  $maritalstatus = $_POST['maritalstatus'];
                  $country = $_POST['country'];
                  $city = $_POST['city'];
                  $interest = $_POST['interest'];
                  $height = $_POST['height'];
                  $complexion = $_POST['complexion'];
                  $bodytype = $_POST['bodytype'];
                  $facialhair = $_POST['facialhair'];
                  $drunk = $_POST['drunk'];
                  $smoke = $_POST['smoke'];
                  $occupation = $_POST['occupation'];
                  $employmentstatus = $_POST['employmentstatus'];
                  $living = $_POST['living'];
                  $children = $_POST['children'];
                  $profileheading = $_POST['profileheading'];
                  $aboutme = $_POST['aboutme'];
                  $lookingfor = $_POST['lookingfor'];

      // $history_record=mysql_query("select * from profile_tbl where member_id=$id_session");
      // $row=mysql_fetch_array($history_record);
      // $user=$row['name'];
      // mysql_query("INSERT INTO history (date,action,data) VALUES (NOW(),'Edit User profile','$user')")or die(mysql_error());

      {
      mysql_query(" UPDATE user SET name='$name', month='$month', year='$year ', gender='$gender', maritalstatus='$maritalstatus', country='$country', city='$city', interest='$interest', height='$height', complexion='$complexion', bodytype='$bodytype', facialhair='$facialhair', drunk='$drunk', smoke='$smoke', occupation='$occupation', employmentstatus='$employmentstatus', living='$living', children='$children', profileheading='$profileheading', aboutme='$aboutme', lookingfor='$lookingfor' WHERE member_id = '$id' ")or die(mysql_error());
      echo "<script>alert('Successfully Updated User Info!'); window.location='profile-view.php'</script>";
      }

      }

      ?>
<div class="col-md-12 text-center" style="color:#e20025; margin-bottom:30px;"> <strong>Terms &amp; Conditions</strong></div>
<?php include 'footer.php' ?>