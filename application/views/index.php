<html>
	<head>
	<title>Login Page</title>
		<link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
		<script src="<?php echo BASEURL;?>assets/js/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<h4 class="text-center"><?php echo $this->session->flashdata("msg");?></h4>
					<form action="logincheck.php" method="Post">
						<div class="row form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-envelope"></i>
								</span>
								<input type="text" name="email" class="form-control"
								placeholder="Enter Email">
							</div>
						</div><!----1st inner row form group closes--->
						<div class="row form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</span>
								<input type="password" name="pass" class="form-control"
								placeholder="Enter password">
							</div>
						</div><!----2nd inner row form group closes--->
						<div class="row form-group">
							<div class="col-sm-12 text-center">
								<button type="submit"class="btn btn-primary">Login</button>
								<button type="reset"class="btn btn-danger">Clear</button>
							</div> 
						</div><!----3rd inner row form group closes--->
						<hr color = "blue"/>
						<div class="row form-group">
							<div class="col-sm-12 text-center">
								<a  href="signup.php">Signup</a>
							</div>
						</div><!----4th row form group closes--->
					</form><!---form closes--->
				</div><!---col-sm-6 closes---->
				<div class="col-sm-3"></div>
				
			</div><!----1st outer row closes----->
		</div><!---container closes---->
	</body>
</html>