<html>
<a href="http://localhost/zenith/e%20Learning/">HOME</a>


<?php
include('db1.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="select name from videos where id='$id'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	echo "<h1>u are watching".$name."</h1>";
	?>
	<video width="615" height="315" controls>
	<source src="http://localhost/zenith/<?php echo $name;?>" type="video/mp4">
	</video>
	<?php
}
	?>
	</html>