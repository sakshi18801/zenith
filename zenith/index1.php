<!DOCTYPE html>
<html>
<head>
<title>VIDEO UPLOADS</title>
</head>
<body>
<h1><a href="video.php">Upload your video here</a></h1>
<form method = "POST" action="index1.php" enctype="multipart/form-data">

<input type="file" name="file">
<input type="submit" name="upload" value="upload">
</form>
<a href="http://localhost/zenith/e%20Learning/">HOME</a>
</body>
</html>

<?php
include('db1.php');
if(isset($_POST['upload']))
{
	$name=$_FILES['file']['name'];
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp,"videos".$name);
	$sql="INSERT INTO videos (name)  values ('$name')";
	$res=mysqli_query($con,$sql);
	if($res==1){
		echo "<h1>inserted successfully</h1>";
	}
}
?>