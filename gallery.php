	<div class="row">	    
	    <div  class="col-sm-12">
	        <hr/>
	        <div class="col-xs-3"> <!-- required for floating -->
	          <!-- Nav tabs -->
	            <ul class="nav nav-tabs tabs-left sideways">
		            <li class="active"><a href="#myprofile-v" data-toggle="tab">My Profile</a></li>
		            <li><a href="#editprofile-v" data-toggle="tab">Edit Profile</a></li>
		            <li><a href="#gallery-v" data-toggle="tab">My Gallery</a></li>
		            <li><a href="#settings-v" data-toggle="tab">Settings</a></li>
	            </ul>
	        </div>

	        <div class="col-xs-9">
	          <!-- Tab panes -->
	            <div class="tab-content">
		            <div class="tab-pane active" id="myprofile-v">
		            	<div class="col-md-12">
						  <!-- Widget: user widget style 1 -->
						    <div class="box box-widget widget-user">
						    <!-- Add the bg color to the header using any of the bg-* classes -->
						        <div class="widget-user-header">
						          
						        </div>
						        <div class="widget-user-image">
						          <img class="img-circle" src="images/g2.png" alt="User Avatar" width="130px" height="130px">
						        </div>
						        <div class="box-footer">
						          <div class="row">
						            <div class="col-md-12 text-center">
						               <p> <strong>My nickname lorem ipsum</strong></p>
						              </div>
						              <!-- /.description-block -->
						              <hr>
						              <br>
						              <div class="col-md-12">
						                  <div class="col-md-8">
						                      <h4><strong>About</strong></h4>
						                      <p>Lorem ipsum dolor sit amet, odio quodsi iudicabit ne pro, dicant postulant eam ex, ei vide persecuti nec. Everti iisque suscipiantur ei ius. Ea sonet tollit facilisi usu, eos ea feugait pericula. Id vel sumo meis ceteros, pro doming praesent ei. Sed enim liber utroque in. Sea te duis aliquid moderatius, at pro harum consetetur. Ei vitae convenire his.

						                      No sale dicit noster ius, tale elitr ne pri, has ad aliquam sensibus neglegentur. Usu ut veniam electram. Quo copiosae urbanitas ut, ut usu facilis accusam forensibus, mei zril moderatius ei. Contentiones definitionem mei ut, rebum augue liberavisse nec id.

						                      No suas oblique meliore ius, mei quod nonumy ut. Ei tale veniam prodesset per, vim lorem novum suscipiantur ut, pri graecis ceteros perfecto cu. Mei dicta noster convenire at. Duo ut sale </p>
						                  </div>
						                  <div class="col-md-4">
						                    <div class="box-body no-padding">
						                        <table class="table table-condensed">                
						                            <tr>
						                              <td>Height </td>                  
						                              <td>5.2</td>
						                            </tr>
						                            <tr>
						                              <td>Age </td>                  
						                              <td>22</td>
						                            </tr>
						                            <tr>
						                              <td>Ethnicity</td>                  
						                              <td>Kenya</td>
						                            </tr>
						                            <tr>
						                              <td>Where I live </td>                  
						                              <td>Nairobi</td>
						                            </tr>
						                            <tr>
						                              <td>Status</td>                  
						                              <td>Single</td>
						                            </tr>                                        
						                        </table>
						                    </div>
						                  </div>
						                </div>						                
						            </div>                 
						        <!-- /.col -->
						        </div>
						        <!-- /.row -->
						    </div>
						</div>
		            </div>
		            <div class="tab-pane" id="editprofile-v">  
		               <?php include('includes/config.php');
		                    if (isset($_POST['save'])) {

		                    //image
		                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		                    $image_name = addslashes($_FILES['image']['name']);
		                    $image_size = getimagesize($_FILES['image']['tmp_name']);
		                    //
		                    move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
		                    $ppic = "uploads/" . $_FILES["image"]["name"];

		                    $nickname = $_POST['nickname'];
		                    $about = $_POST['about'];
		                    $height = $_POST['height'];
		                    $age = $_POST['age'];
		                    $ethnicity = $_POST['ethnicity'];
		                    $residential = $_POST['residential'];
		                    $status = $_POST['status'];

		                    mysqli_query($con,"insert into profile (ppic,nickname,about,height,age,ethnicity,residential,status)
		                    values ('$ppic','$nickname','$about','$height','$age','$ethnicity','$residential','$status')
		                    ") or die(mysqli_error());
		                    // mysqli_query($con, "INSERT INTO history (date,action,member_id,data)VALUES(NOW(),'profile-update','$mem_id','$user')")or die(mysqli_error());
		                    echo "<script>alert('Profile updated successfully..'); window.location='my-profile.php'</script>";
							}else{
								$msg = "<div class='alert alert-danger'>
												<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
											</div>";
							?>
							<?php } ?>    	

                        <form role="form" method="post" class="profile-form">
				            <div class="box-body">
				            <?php if(isset($msg)) { echo $msg; } ?>
							    <div class="form-group">
							        <label class="edit-profile-label">Upload Profile Image</label>
							        <div class="input-group">
							            <span class="input-group-btn">
							                <span class="btn btn-default btn-file">
							                    Browse… profile picture<input type="file" name="ppic" id="imgInp">
							                </span>
							            </span>
							            <input type="text" name="ppic" class="form-control" readonly>
							        </div>
							        <img id='img-upload'/>
							    </div>
								
				                <div class="form-group">
				                  <label class="edit-profile-label">Your Name/Nickname</label>
				                  <input type="text" name="nickname" class="form-control" id="nickname" placeholder="Enter Your Nickname Here..">
				                </div>
				                <div class="form-group">
				                  <label class="edit-profile-label">About</label>    
				                  <textarea class="form-control" name="about" rows="5" id="aboutme" placeholder="Enter small description about yourself"></textarea>
				                </div>
				                <div class="col-sm-3">
					                <div class="form-group">
					                  <label class="edit-profile-label">Height</label>
					                  <input type="text" class="form-control" name="height" id="height" placeholder="Height eg. 5.1">
					                </div>
				                </div>
				                <div class="col-sm-3">
					                <div class="form-group">
					                  <label class="edit-profile-label">Age</label>
					                  <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age">
					                </div>
				                </div>
				                <div class="col-sm-5">
					                <div class="form-group">
					                  <label class="edit-profile-label">Ethnicity</label>
					                  <input type="text" class="form-control" name="ethnicity" id="ethnicity" placeholder="Enter Ethnicity. (eg. Kenya)">
					                </div>
				                </div>
				                <div class="col-sm-6">
					                <div class="form-group">
					                  <label class="edit-profile-label">Where I Live</label>
					                  <input type="text" class="form-control" name="residential" id="residential" placeholder="Enter your residential.(eg Nairobi)">
					                </div>
				                </div>
				                <div class="col-sm-6">
					                <div class="form-group">
						                <label>Status</label>
						                <select class="form-control select2" name="status" style="width: 100%;">
						                  <option selected="selected">single</option>
						                  <option>Married</option>
						                  <option>complicated</option>
						                  <option>adventurous</option>
						                </select>
						            </div>
				                </div>
				            </div>
				              <!-- /.box-body -->
				            <div class="box-footer">
				                <button type="submit" name="save" class="btn btn-primary">Save</button>
				            </div>
				        </form>
		            </div>

		            <div class="tab-pane" id="gallery-v">
		            	<div class="col-md-12">
		                  <div class="col-md-3">
		                      <div class="thumbnail">
		                            <img src="images/g2.png" alt="" width="350px" height="200px">                
		                        </div>
		                  </div>
		                  <div class="col-md-3">
		                      <div class="thumbnail">
		                            <img src="images/g2.png" alt="" width="350px" height="200px">                
		                        </div>
		                  </div>
		                  <div class="col-md-3">
		                      <div class="thumbnail">
		                            <img src="images/g2.png" alt="" width="350px" height="200px">                
		                        </div>
		                  </div>
		                  <div class="col-md-3">
		                      <div class="thumbnail">
		                            <img src="images/g2.png" alt="" width="350px" height="200px">                
		                        </div>
		                  </div>
		                </div>
		            </div>
		            <div class="tab-pane" id="settings-v">Settings Tab.</div>
		        </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>
	   <!-- /.row -->
    </div>
    </div>