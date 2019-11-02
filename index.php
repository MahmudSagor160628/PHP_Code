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
$conn = mysqli_connect('localhost', 'root', '', 'test');
$sql = "SELECT * FROM `register`";
$rslt = mysqli_query($conn,$sql);

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
	<a class="btn btn-info" href="insert.php">Add Member</a>
</div>


<div> <h2 style="text-align: center;">Member view</h2></div>



<div class="container">
	<table class="table table-striped">
					<tr>
						<th width="5%">serial</th>
						<th width="25%">Name</th>
						<th width="30%">Email</th>
						<th width="40%">Actions</th>
					</tr>
					<tr>
						<?php
							$i=0;
							while ($row = mysqli_fetch_assoc($rslt)) {
								$i++;

						 ?>

					</tr>

					<tr>
						<td> <?php echo "$i";  ?></td>
						<td><?php echo $row['Name'];?></td>
						<td><?php echo $row['Email'];?></td>
						<td>
							<a class="btn btn-primary" href="view.php?Email=<?php echo $row['Email'];?>">view</a>
							<a class="btn btn-success" href="#">Update</a>
							<a class="btn btn-danger" onclick="return confirm('ARE YOU SURE!!!')" href="delete.php?Id=<?php echo $row['Id'];?>">Delete</a>
						</td>
					</tr>
<?php }  ?>
	</table>
</div>



</body>
</html>