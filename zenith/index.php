<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Display All Videos from database using php</title>
</head>
<body>

	<div class="container mt-3 mb-3">
		<h1><b>Display All Videos from database using php</b></h1>
		<hr/>
				<a href="upload.php" class="btn btn-primary mt-3">Upload a New Video</a>
				<hr/>
		<div class="row">
				<?php
				include("db1.php");
					
				$sql = "SELECT * FROM videos";

				$res = mysqli_query($con,$sql);
				
				while($row=mysqli_fetch_array($res)) { 

					$name = $row['name'];
					?>

					<div class="col-md-4">
						<video width="100%" controls>
<source src="<?php echo 'upload/'.$name;?>">
</video>
					</div>

				<?php }
?>
</div>
				</div>
</body>
</html>