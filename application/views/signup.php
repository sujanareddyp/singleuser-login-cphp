<html>
	<head>
	<title>Login Page</title>
		<link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
		<script src="<?php echo BASEURL;?>assets/js/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
      <div class="row">
	<div class="col-sm-12 well">
		<h3 class="text-center">contact page</h3>
	</div>
			
</div><!----2nd row closes--->
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<h4 class="alert alert-success"><?php echo $this->session->flashdata("msg"); ?></h4>
		<form action="savecontact.php" method="Post" class="form-horizontal">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="fname" class="form-control" placeholder="Enter Name"/>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" placeholder="Enter Email"/>
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile"/>
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="msg" class="form-control" ></textarea>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="pass" class="form-control" />
			</div>
			<div class="row form-group text-center">
				<button type="submit" class="btn btn-primary btn-block">Send</button>
				<button type="reset" class="btn btn-primary btn-block">Clear</button>
			</div>
		</form>
	
	
	</div>
	<div class="col-sm-3"></div>
</div>