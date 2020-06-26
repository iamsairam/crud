<!DOCTYPE html>
<html>
<head>
	<title>retrive</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body class="container">
<table class="table table-striped" border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
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
			echo "</tr>";

		}
		echo "</table>";
	}
}

?>

</body>
</html>