<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include('inc/link.inc.php');?>
	<title>University Admission | Administrator Home</title>
  </head>
  <body>
  <!---------------Nav Starts Here------------------->
   <?php include('inc/nav.inc.php');?>
  <!---------------Nav ends Here-------------------->
	  
	  
  	<!------------Page Content starts here---------->
			<div class="container page_content">
				<div class="row">
					<div class="col-12">
						<div class="pageheader mt-3">
							 <h1 class="badge-light text-primary p-1 pl-3">Admin Home</h1> 
				 		</div>
					</div>
					<div class="col-12 mt-5">
						<div class="row">
						  <div class="col-3">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Post Admission</a>
							  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Post School info</a>
							  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Registered Students</a>
							  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Registered Institutes</a>
							</div>
						  </div>
						  <div class="col-9">
							<div class="tab-content" id="v-pills-tabContent">
							  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
								 <div class="text-right">
									  <h2 class="text-primary font-weight-bolder">Post Admission</h2>
									  <hr>
								 </div>
							  </div>
							  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
								  <div class="text-right">
									  <h2 class="text-primary font-weight-bolder">Post School info</h2>
									  <hr>
								 </div>
							  </div>
							  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
								   <div class="text-right">
									  <h2 class="text-primary font-weight-bolder">Registered Students</h2>
									  <hr>
								 </div>
							  </div>
							  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
								   <div class="text-right">
									  <h2 class="text-primary font-weight-bolder">Registered institutes</h2>
									  <hr>
								 </div>
							  </div>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
	<!-----------Login Modal Starts here------------->
	<?php include('inc/loginmodal.inc.php');?> 

	<!-------------- Footer starts Here------------->
	<?php include('inc/footer.inc.php');?> 
	<!-------------- Footer Ends Here--------------->

	<!-------------- including script asset----------->
	<?php include('inc/script.inc.php');?> 
 </body>
</html>