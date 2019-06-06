<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>

<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="home_style.css">
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
        <a class="nav-link" href="map2.html">Map</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="location3.html">Search by location</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="zomato.php">API Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<a href="logout.php">LOGOUT</a>
<h1>Welcome, <?php echo $_SESSION['username'];?></h1><br>
<h2 class="display-4">Zomato Search</h2><br>
<div class="col-xs-4">
                <h2>Search by ratings</h2>
                <p>Find the top rated restaurants around you</p>
                <p><a href="ratings.html" target="_blank" class="btn btn-success">Let's Go &raquo;</a></p>
            </div>
            <div class="col-xs-4">
                <h2>Search by Popularity</h2>
                <p>Find the most popular restaurants around you curated by users.</p>
                <p><a href="popularity.html" target="_blank" class="btn btn-success">Let's Go &raquo;</a></p>
            </div>
	    
        </div>
</div>
<br><br>

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<form action="getInfo.php" method="POST"
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment" name='comments'></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>

</body>
</html>
