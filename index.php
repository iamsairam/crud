<!DOCTYPE html>
<html>
<head>
	<title>create/insert</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
	<div class="container bg-light">
<form method="post">
	<h1 class="text-center">Plaese Enter Your Details</h1>
	<label for="name">Enter Name</label>
	<input type="text" name="name" class="form-control"><br>
	<label for="name">Enter Email</label>
	<input type="email" name="email" class="form-control"><br>
	<label for="name">Enter Password</label>
	<input type="password" name="pwd" class="form-control"><br>
	<input type="submit" name="btn" class="btn btn-success btn-lg">
</form>
</div>
<?php
if (isset($_POST['btn'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];

$conn=mysqli_connect("localhost","root","","collage");
$query="INSERT INTO students(name,email,password)VALUES('$name','$email','$pwd')";

if (mysqli_query($conn,$query)) {
	echo "<div class='container mt-5'>";
	echo "<h1 class='text-success'>YOUR VALUES SUBMITED SECCESSFULLY</h1>";
	echo "<a href='retrive_controls.php' class='btn btn-info btn-lg btn-block'>Please CLICK HERE TO MODIFY Your Details</a>";
	echo "</div>";
}
else{echo "failed";}
}
?>
</body>
</html>