<?php 
// include ('config.php');
    if (isset($_POST['editprofile'])) {
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

 
    $sql_update = mysqli_query($con, "UPDATE profile_tbl SET 
    												name = '$name',
								                    month = '$month',
								                    year = '$year',
								                    gender = '$gender',
								                    maritalstatus = '$maritalstatus',
								                    country = '$country',
								                    city = '$city',
								                    interest = '$interest',
								                    height = '$height',
								                    complexion = '$complexion',
								                    bodytype = '$bodytype',
								                    facialhair = '$facialhair',
								                    drunk = '$drunk',
								                    smoke = '$smoke',
								                    occupation = '$occupation',
								                    employmentstatus = '$employmentstatus',
								                    living = '$living',
								                    children = '$children',
								                    profileheading = '$profileheading',
								                    aboutme = '$aboutme'
								                    lookingfor = '$lookingfor'
								                    ppicture = '$ppicture'
								            WHERE member_id = '$id_session'
    	                                              ")or die(mysqli_error());
                       	
    	echo "<script>alert('Successfully updated the profile!'); window.location='profile-view.php'</script>";
    
    else
    	echo "<script>alert('Profile update failed!'); window.location='edit-profile.php'</script>";
    }
?>	