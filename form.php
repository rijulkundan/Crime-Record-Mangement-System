<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My signup Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-signup.css">
<a href = "index.php">
</head>

<body class="my-signup-page">
	<nav class="navbar navbar-dark bg-dark">
  <div class ="container">
    <div class="navbar-header">
      
<a href ="#" class="navbar-brand"> <b>CRIMINAL RECORD MANAGEMENT SYSTEM</b>  </a>

</div>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a href ="dashboard.php"class="navbar-header" >HOME</a>
  </li>

</div>
</nav>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/GUN.jpg" alt="logo" >
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title"><i><u>FILE FIR</u></h4>
							<form action ="fir.php" method="POST" class="my-signup-validation" novalidate="">
                                <h4 class="card-title"> APPLICANT'S DETAIL(VICTIM)</h4>
								<div class="form-group">
									<label for="email">E-MAIL ADDRESS  OF THE APPPLICANT</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
																</div>
                                     


                                     <div class="form-group">
									<label for="username">NAME OF THE APPLICANT</label>
									<input id="username" type="username" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

                                    <div class="form-group">
									<label for="password">PASSWORD</label>
									<input id="password" type="password" class="form-control" name="password" value="" required autofocus>
							
								</div>

								<div class="form-group">
									<label for="phone">PHONE NUMBER OF THE APPLICANT</label>
									<input id="" type="phone" class="form-control" name="phone" required autofocus placeholder="91+">
								    <div class="invalid-feedback">
								    	 phone number is required
							    	</div>
								</div>

							

								<div class="form-group">
									<label for="address">ADDRESS OF THE APPLICANT</label>
									<input id="address" type="address" class="form-control" name="address" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="relation">RELATION WITH THE ACCUSED PERSON</label>
									<input id="relation" type="relation" class="form-control" name="relation" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>
                                      <h4 class="card-title">CRIMINAL DETAILS</h4>
									 <div class="form-group">
									<label for="accused">NAME OF THE ACCUSED PERSON</label>
									<input id="accused" type="accused" class="form-control" name="accused" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								 <div class="form-group">
									<label for="crime">CRIME TYPE</label>
									<input id="crime" type="crime" class="form-control" name="crime" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>  

	                                 <div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										submit
									</button>
								</div>
								</div>
								
							</form>

						</div>
				    <div class="footer">
						Copyright &copy; 2020 &mdash; CRIMINAL RECORD MANAGEMENT SYSTEM
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>


