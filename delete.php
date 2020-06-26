<!DOCTYPE html>
<html>
<head>
	<title>Delted page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body class="container">
<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","collage");
$query="DELETE FROM students WHERE id=$id";

if(mysqli_query($conn,$query)){
	echo "<h1 class='alert alert-success mt-5'>SUCCESS FULLY DELETED</h1>";
	echo "<a href='create_insert.php' class='btn btn-block btn-dark btn-lg'>Back To HOME PAGE</a>";
}
else{
	echo "error occured!";
}
?>
</body>
</html>
