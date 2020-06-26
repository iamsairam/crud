<!DOCTYPE html>
<html>
<head>
	<title>select</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
	.v{
		color: green;
	}
	.f{
		color: blue;
	}
	.nv{
		color: red;
	}
</style>
</head>
<body>
<form method="post">
	<select name="fv">
		<option value="f">fruits</option>
		<option value="v">vegitables</option>
		<option value="nv">non-veg</option>
	</select>
	<input type="submit" name="btn">
</form>
<?php
if (isset($_POST['btn'])) {
	$type=$_POST['fv'];

	if ($type == 'v') {
		echo "<h1 class='$type'>VEGITABLES</h1>";
	}else if ($type == 'f') {
		echo "<h1 class='$type'>FRUITS</h1>";
	}else{echo "<h1 class='$type'>NON-VEG</h1>";}

	$conn=mysqli_connect('localhost','root','','foods');
	$query="SELECT name FROM items WHERE type='$type' ";
	if($res=mysqli_query($conn,$query)){
		if (mysqli_num_rows($res)) {
			while ($rows=mysqli_fetch_array($res)) {
				echo "<ul>";

				echo "<li>".$rows['name']."</li>";

				echo "</ul>";
			}
		}
	}

}
?>
</body>
</html>