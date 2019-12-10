<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Tadas Semionovas">

		<title>SB Admin 2 - Dashboard</title>

		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		  
		  
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex">
		<link rel="stylesheet" type="text/css" href="scripts/datetimepicker/jquery.datetimepicker.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/main.css" media="screen" />
		<script type="text/javascript" src="scripts/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="scripts/datetimepicker/jquery.datetimepicker.full.min.js"></script>
		<script type="text/javascript" src="scripts/main.js"></script>
	</head>
	<?php 
	

	
		
			if(true)//)
			{
			?>		
				<body class="bg-gradient-primary">

				  <div class="container">

					<!-- Outer Row -->
					<div class="row justify-content-center">

					  <div class="col-xl-10 col-lg-12 col-md-9">

						<div class="card o-hidden border-0 shadow-lg my-5">
						  <div class="card-body p-0">
							<!-- Nested Row within Card Body -->
							<div class="row">
							  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							  <div class="col-lg-6">
								<div class="p-5">
								  <div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Stebėjimo sistema</h1>
									<h2 class="h5 text-red-900">Prašome prisijungti</h2>
								  </div>
								  <form class="user">
									<div class="form-group">
									  <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
									</div>
									<div class="form-group">
									  <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
									</div>
									<div class="form-group">
									  <!-- <div class="custom-control custom-checkbox small">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck">Remember Me</label>
									  </div> -->
									</div>
									<a href="index.html" class="btn btn-primary btn-user btn-block">
									  Prisijungti
									</a>
									<hr>
									
								  </form>
								  <hr>
								  <div class="text-center">
									<a class="small" href="forgot-password.html">Pamiršau slaptažodį</a>
								  </div>
								  <div class="text-center">
									<a class="small" href="register.html">Prašyti prieeigos</a>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>

					  </div>

					</div>

				  </div>

				  <!-- Bootstrap core JavaScript-->
				  <script src="vendor/jquery/jquery.min.js"></script>
				  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

				  <!-- Core plugin JavaScript-->
				  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

				  <!-- Custom scripts for all pages-->
				  <script src="js/sb-admin-2.min.js"></script>
						<?php
			}
			else
			{
				
			}
			
		?>
		<!-- <div id="body">
			<div id="header">
				<h3 id="slogan"><a href="index.php">Automobilių nuomos IS</a></h3>
			</div>
			<div id="content">
				<div id="topMenu">
					<ul class="float-left">
						<li><a href="index.php?module=contract&action=list" title="Sutartys"<?php if($module == 'contract') { echo 'class="active"'; } ?>>Sutartys</a></li>
						<li><a href="index.php?module=service&action=list" title="Paslaugos"<?php if($module == 'service') { echo 'class="active"'; } ?>>Paslaugos</a></li>
						<li><a href="index.php?module=customer&action=list" title="Klientai"<?php if($module == 'customer') { echo 'class="active"'; } ?>>Klientai</a></li>
						<li><a href="index.php?module=employee&action=list" title="Darbuotojai"<?php if($module == 'employee') { echo 'class="active"'; } ?>>Darbuotojai</a></li>
						<li><a href="index.php?module=car&action=list" title="Automobiliai"<?php if($module == 'car') { echo 'class="active"'; } ?>>Automobiliai</a></li>
						<li><a href="index.php?module=brand&action=list" title="Markės"<?php if($module == 'brand') { echo 'class="active"'; } ?>>Markės</a></li>
						<li><a href="index.php?module=model&action=list" title="Modeliai"<?php if($module == 'model') { echo 'class="active"'; } ?>>Modeliai</a></li>
					</ul>
					<ul class="float-right">
						<li><a href="index.php?module=report&action=list" title="Ataskaitos"<?php if($module == 'report') { echo 'class="active"'; } ?>>Ataskaitos</a></li>
					</ul>
				</div> -->
				<div id="contentMain">
					<?php
						// įtraukiame veiksmų failą
						if(file_exists($actionFile)) {
							include $actionFile;
						}
					?>
					<div class="float-clear"></div>
				</div>
			</div>
			<div id="footer">

			</div>
		</div>
	</body>
</html>