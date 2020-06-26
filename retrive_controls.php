<!DOCTYPE html>
<html>
<head>
	<title>retrive</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body class="container">
	<div class="col-12">
		<h1 class="text-center">SCROLL DOWN & RIGHT</h1>
<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Action</th>
		<th>Action</th>
	</tr>
<?php


$connect=mysqli_connect("localhost","root","","collage");
$query="SELECT * FROM students";
if ($res=mysqli_query($connect,$query)) {
	if (mysqli_num_rows($res)>0) {
		while ($rows=mysqli_fetch_array($res)) {
			echo "<tr>";
			echo "<td>".$rows['id']."</td>";
			echo "<td>".$rows['name']."</td>";
			echo "<td>".$rows['email']."</td>";
			echo "<td>".$rows['password']."</td>";
			
			echo "<td><a href='update.php?id=".$rows['id']."' class='btn btn-warning btn-block'>UPDATE</a></td>";
			echo "<td><a href='delete.php?id=".$rows['id']."' class='btn btn-danger btn-block'>DELETE</a></td>";			

			echo "</tr>";

		}
		echo "</table>";
	}
}
echo "<a href='create_insert.php' class='btn btn-dark btn-lg btn-block'>Back To Data Insertion Form</a>";
?>

</div>
</body>
</html>