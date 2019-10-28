
<html>
	<head>
		<title>Home Page</title>
		<link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo BASEURL ;?>css/style.css" rel="stylesheet">
		<script src="<?php echo BASEURL; ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo BASEURL;?>assets/js/bootstrap.js"></script>
		<script src="<?php echo BASEURL; ?>assets/js/myajax.js"></script>
	<script>
	$(document).ready(function () {
		$('.leftpanel ul li').click(function(e) {
			$('.leftpanel ul li').removeClass('active1');

			$this = $(this);
			if (!$this.hasClass('active1')) {
				$this.addClass('active1');
			}
			//e.preventDefault();
		});
	});
	</script>
	</head>
	<body>
	<nav class="nav navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">MY PANEL</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a>Welcome!<?php echo $this->session->userdata("name");?> </a></li>
				<li><a href="logout.php">Signout</a></li>
			</ul>
		</div>
	</nav>
				
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2 leftpanel">
					<ul class="list-group">
						<li class="list-group-item active">DASHBOARD</li>
						
						<li class="list-group-item dropdown"><a href="contactlist.php" class="dropdown-toggle list">Contact List</a></span>
							
						</li>
						<li class="list-group-item dropdown"><a href="signuplist.php" class="dropdown-toggle list">SignUp List</a></span>
							
						</li>
						<li class="list-group-item dropdown"><a href="addblog.php" class="dropdown-toggle list">Add Blogs</a></span>
							
						</li>
						<li class="list-group-item dropdown"><a href="logout.php" class="dropdown-toggle list">Logout</a></span>
							
						</li>
						<li class="list-group-item dropdown"><a href="addcontactajax.php" class="dropdown-toggle list">Add contact through Ajax</a></span>
							
						</li>
						<li class="list-group-item dropdown"><a href="contactlist2.php" class="dropdown-toggle list">Contact list through Ajax</a></span>
							
						</li>
								
						
					</ul>
				</div>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-12"><h1 class="bgh1">Admin Panel</h1></div>
					</div>
					
		