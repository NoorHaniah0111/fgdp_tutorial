<div class="col-md-12" style="padding:12px">
	<h3> Tambah User Baru </h3>
</div>

<div class="col-md-6" style="padding: 15px">
	<form action="add_process" method="post">
		<div class="form-group row">
			<label for="username" class="col-md-2 col-form-label"> Username</label>
		
			<div class="col-sm-10">
			<input type="text" name="username" id="username" style="width: 100%">
			</div>
		</div>

		<div class="form-group row">
			<label for="password" class="col-md-2 col-form-label"> Password </label>
		
			<div class="col-sm-10">
			<input type="text" name="password" id="password" style="width: 100%">
			</div>
		</div>

		<div class="form-group row">
			<label for="email" class="col-md-2 col-form-label"> Email </label>
		
			<div class="col-sm-10">
			<input type="text" name="email" id="email" style="width: 100%">
			</div>
		</div>

		<div class="form-group row">
			<label for="userrole" class="col-md-2 col-form-label"> Userrole </label>
		
			<div class="col-sm-1">
			<input type="text" name="userrole" id="userrole" style="width: 100%">
			</div>
		</div>

		<button class="btn btn-primary" type="submit" name="submit"> Add User </button>
		<a class="btn btn-success" href='<?php echo site_url('home'); ?>'> Back </a>

	</form>
</div>