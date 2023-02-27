<h1>Se connecter </h1>

<!-- <form action="" method="POST">

</form> -->
<div class="col-md-4 col-md-offset-4 " style="margin-top:150px;">
	<div class='row'>
		<div class="col-md-12 text-center">
			<h3> Dashboard</h3>
		</div>
		<div class="box box-info col-md-12">
			<div class="box-header with-border">
				<h3 class="box-title">Administrator Login</h3>
			</div>
			<form method="POST" enctype="multipart/form-data">
				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Username :</label>
						<input type="text" name="username" class="form-control" value="<?=  'username' ?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Password :</label>
						<input type="password" class="form-control" name="password" value="<?=  '****' ?>" required>
					</div>
					<div class="box-footer">
						<button type="submit" name="btnLogin" class="btn btn-info pull-left">Login</button>
						<a href="forgot-password.php" class="pull-right">Forgot Password?</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>