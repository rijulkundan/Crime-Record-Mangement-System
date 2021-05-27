<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My signup Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-reviewpanel.css">
<a href = "index.php ">
</head>


<body class="my-reviewpanel-page">

	<nav class="navbar navbar-dark bg-dark">
  <div class ="container">
    <div class="navbar-header">
      
<a href ="#" class="navbar-brand"> <b>CRIME RECORD MANAGEMENT SYSTEM</b>  </a>

</div>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a href ="index.php"class="navbar-header" >HOME</a>
  </li>

</div>
</nav>	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/hack.jpg" alt="logo" >
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">REVIEW PANEL LOGIN</h4>
							<form action="connectttt.php" method ="POST" class="my-admin-validation" novalidate="">
								
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								
								<div class="form-group">
									<label for="username">USERNAME</label>
									<input id="username" type="username" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.php" class="float-right">
											   Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	 Password is required
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										                                Login 
									
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="signup.php">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2020 &mdash; CRIME RECORD MANAGEMENT SYSTEM
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</a>
</head>
</html>