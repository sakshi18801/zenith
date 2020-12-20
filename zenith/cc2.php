<?php
	$uName	=$_POST['uName'];
	$uEmail = $_POST['uEmail'];
	
	$con = mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");
	
	
	
	
	$query="INSERT into certificate (email,uName) 
				values ('$uEmail','$uName')";
		
	mysqli_query($con,$query) or die("Insert query error...");
	
	
	
	echo "congratulations!! please confirm your email adress below to get certificate";
	
	
?>

<html>
<body>
<form action="certi.php" method="post">

<input style="height:35px;width:320px" type="email" id="idEmail" name="uEmail" placeholder="Email" required>

<input type="submit" name="search" value="GET CERTIFICATE">
</form>
</body>
</html>
	
	

