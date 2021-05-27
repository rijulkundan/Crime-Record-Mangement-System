<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Kodinger">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>account</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/my-signup.css">
<a href = "index.php">
</head>

<body class="my-signup-page">
  <nav class="navbar navbar-dark bg-dark">
  <div class ="container">
    <div class="navbar-header">
      
<a href ="index.php" class="navbar-brand"> <b>CRIMINAL RECORD MANAGEMENT SYSTEM</b>  </a>

</div>
<ul class="nav justify-content-end">
  <li class="nav-item">
    
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
              <h4 class="card-title">MY ACCOUNT </h4>
              <form action = "connecttttt.php" method="POST" class="my-signup-validation" novalidate="">4

                <div class="form-group">
                  <label for="username">USER NAME</label>
                  <input id="username" type="username" class="form-control" name="username" value="" required autofocus>
                                </div>

                  <div class="form-group">
                  <label for="phone">PHONE NUMBER</label>
                  <input id="phone" type="phone" class="form-control" name="phone" value="" required autofocus placeholder="91+">
                  <div class="invalid-feedback">
                    PHONE NUMBER is invalid
                  </div>
                </div>

                   <div class="form-group">
                  <label for="address">ADDRESS</label>
                  <input id="address" type="address" class="form-control" name="address" value="" required autofocus>
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
                  <label for="email">CITY</label>
                  <input id="city" type="city" class="form-control" name="city" value="" required autofocus>
                                </div>

                 <div class="form-group">
                  <label for="country"> COUNTRY</label>
                  <input id="country" type="country" class="form-control" name="country" value="" required autofocus>
                                </div>


                <div class="form-group">
                  <label for="email">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                  <div class="invalid-feedback">
                    Email is invalid
                  </div>
                </div>

                

                <div class="form-group m-0">
                  <a href="dashboard2.php">
                  <button type="submit" class="btn btn-primary btn-block" >
                    <a href="dashboard2.php">submit</a>

                  </button>
                </div>



                
          <div class="footer">
            <a href="index.php">
            Copyright &copy; 2020 &mdash; CRIME RECORD MANAGEMENT SYSTEM
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>