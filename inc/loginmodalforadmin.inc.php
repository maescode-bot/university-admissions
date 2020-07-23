<!-- The Modal -->
<div class="modal" id="loginModalforAdmin">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Administrator login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       	<div class="col-12" id="login">
				<div class="px-3 py-2">
					<div class="">
						<p class="text-muted">Admin, Please enter your login details?</p>
					</div>
					<div class="#">
						<form action="admin_home.php" method="post" enctype="">
							<div class="form-group">
								<label for="username">username</label>
								<input type="text" class="form-control" placeholder="username or email">
							</div>
							<div class="form-group">
								<label for="username">password</label>
								<input type="password" class="form-control" placeholder="password">
							</div>
							<div class="form-group">
								<input type="submit" class="form-control btn-primary" value="log In">
							</div>
						</form>
					</div>
				</div>
			</div>
      </div>

    </div>
  </div>
</div>