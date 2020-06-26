<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","collage");
$query="SELECT * FROM students where id='$id'";
if ($res=mysqli_query($conn,$query)) {
	if (mysqli_num_rows($res) == 1) {
		while ($rows=mysqli_fetch_array($res)) {
			$upname=$rows['name'];
			$upemail=$rows['email'];
			$uppass=$rows['password'];			
		}
	}
}
?>
<div class="bg-light p-5 container col-sm-12 col-lg-6">
<form method="post">
	<h1>UPDATE YOUR DETAILS HERE</h1>
<label for="name">Update your Name here</label><input type="text" name="name" value="<?php echo $upname ?>" class="form-control">
Update your Email here<input type="email" name="email" value="<?php echo $upemail ?>"class="form-control">
Update your Password here<input type="password" name="pwd" value="<?php echo $uppass ?>"class="form-control">
	<input type="submit" name="btn" class=" btn btn-success mt-2">
</form>
</div>
<?php
if (isset($_POST['btn'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];

	$uquery="UPDATE students SET name='$name',email='$email',password='$password' WHERE id=$id ";

	if (mysqli_query($conn,$uquery)) {
		echo "<div class='container'>";
		echo "<h1  class='alert alert-success'	>successfull updated</h1>";
	echo "<a href='retrive_controls.php' class='btn btn-block btn-info btn-lg'>Back To Datails Page</a>";
	echo "<a href='create_insert.php' class='btn btn-block btn-dark btn-lg'>Back To HOME PAGE</a>";
	echo "</div>";
	}
}
?>
</body>
</html>