<!DOCTYPE html>
<html>
<head>
	<title>data view</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>




<?php
$email = $_GET['Email'];
$conn = mysqli_connect('localhost', 'root', '', 'test');
$sql = "SELECT * FROM `register` WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);


$std = mysqli_fetch_assoc($result);


?>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">AL-MAHMUD SAGOR</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">GALLERY</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container well">
	<a class="btn btn-info" href="index.php">All Member</a>
</div>


<div> <h2 style="text-align: center;">Personal Information view</h2></div>



<div class="container">
	<table class="table table-striped">
					

					<tr>
						<th> Name</th>
						<td><?php echo $std['Name'];?></td>
					</tr>

					<tr>
						<th> Email</th>
						<td><?php echo $std['Email'];?></td>
					</tr>

					<tr>
						<th> Age</th>
						<td><?php echo $std['Age'];?></td>
					</tr>

					<tr>
						<th> Department</th>
						<td><?php echo $std['Department'];?></td>
					</tr>

					<tr>
						<th> Address</th>
						<td><?php echo $std['Address'];?></td>
					</tr>
	</table>
</div>



</body>
</html>