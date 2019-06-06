<html>
<head>

<title>User login and Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Find Your Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6" id="login-left">
		<h2> Login Here </h2>
		<form action="validation.php" method="post">
			<div class="form-group">
			<label>Username</label>
			<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
	<div class="col-md-6" id="login-right">
		<h2> Register Here </h2>
		<form action="registration.php" method="post">
			<div class="form-group">
			<label>Username</label>
			<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
	</div>
	</div>
</body>
</html>

