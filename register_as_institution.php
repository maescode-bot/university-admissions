<!DOCTYPE html>
<html lang="en">
  <head>
	 <?php include('inc/link.inc.php');?>
	 <title>University Admission | Register as Institution</title>
  </head>
  <body>
  <!---------------Nav Starts Here------------------->
   <?php include('inc/nav.inc.php');?>
<!---------------Nav ends Here-------------------->
<div id="register_page_content">
<div class="row no-gutters">
	<div class="col-lg-6 col-md-6 col-sm-12 " id="register_info">
	 <div class="p-5" id="information">
		 <h3 class="font-weight-bolder py-2">Register as Institution</h3>
		 <p class="text-justify pl-1">
			 For universities and any advanced certificate awarding institution, there will be an opportunity to announce the number of candidates desired per courses, advertise their brand and projecting their better image using the CEO Africa platform, fill-in their profile for reviews and announce their events for publicity. 
		 </p>
		 <p id="register_links">
			 <span class="m-1">Already have account? <a type="button" data-toggle="modal" data-target="#loginModal" class="btn-primary px-2 py-1 text-white" > Login</a>
			 &nbsp;&nbsp;
			</span>
			<span class="m-1">
			 Student? <a href="register_as_student.php" class="btn-primary px-2 py-1"> Register</a>
			</span>
		 </p>
	</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12" id="register">
		<div class="row mt-4">
			<div class="col-12">
				<p class="badge-light font-weight-bolder w-75 py-2 mx-auto mt-2 pl-2">
					Kindly supply the required information
				</p>
				<form action="#" method="#" enctype="#" class="w-75 mx-auto">
					<div class="form-group">
						<label for="#">Surname</label>
						<input type="text" class="form-control" placeholder="surname" id="surname">
					</div>
					<div class="form-group">
						<label for="#">First name</label>
						<input type="text" class="form-control" placeholder="first name" id="first_name">
					</div>
					<div class="form-group">
						<label for="#">Middle name</label>
						<input type="text" class="form-control" placeholder="Middle name" id="middlename">
					</div>
					<div class="form-group">
						<label for="#">Email</label>
						<input type="text" class="form-control" placeholder="example@gmail.com" id="email">
					</div>
					<div class="form-group">
						<label for="#">Username</label>
						<input type="text" class="form-control" placeholder="Username" id="username">
					</div>
					<div class="form-group">
						<label for="#">Password</label>
						<input type="password" class="form-control" placeholder="password" id="password">
					</div>
					<div class="form-group">
						<label for="#">Confirm password</label>
						<input type="password" class="form-control" placeholder="confirm password" id="confirm_password">
					</div>
					<div class="form-group">
	
						<input type="submit" class="form-control btn-primary" id="submit" value="Register">
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
</div>
<!-----------Login Modal Starts here------------->
<?php include('inc/loginmodal.inc.php');?> 
	  
<!-------------- copyright starts Here----------->
  <?php include('inc/copyright.inc.php');?>
	  
 
<!-------------- including script asset----------->
 <?php include('inc/script.inc.php');?> 
  </body>
</html>