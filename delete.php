<?php
$id = $_GET['Id'];
$conn = mysqli_connect('localhost', 'root', '', 'test');
$sql = "DELETE FROM `register` WHERE Id = $id";
$result = mysqli_query($conn, $sql);


if ($result) {
	header("location:index.php");
}


?>