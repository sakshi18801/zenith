<html>
<head>
<style>
h2{
    padding:20px 0px;
}
h3{
    font-family:georgia;
}
</style>
</head>
<button onclick="window.print()">PRINT</button><br>
<a href="http://localhost/zenith/e%20Learning/">Home</a><br>
<a href="http://localhost/zenith/coursepurchase.php">my courses</a>

<body>
<center>
<table style="width:50%; border:5px solid black; cellpadding:5; border-collapse:collapse; text-align:center; margin:20px 0px;">
<?php
$connection=mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");
$db=mysqli_select_db($connection,'zenith_elearning');

if(isset($_POST['search']))
{
	$uEmail=$_POST['uEmail'];
	$query="SELECT * from certificate where email='$uEmail'";
	$query_run=mysqli_query($connection,$query) or die( mysqli_error($connection));;
	
	
	
	
	
	while($row=mysqli_fetch_array($query_run))
	{
		?>
        
        <tr><th><td>		
		<?php echo  "<h2><u>CERTIFICATE OF COURSE COMPLETION<br></u></h2><br><h3> It is a very satisfying and cheerful experience to provide you this certificate .<br> This is to certify that<br><u>" .$row['uName']. "</u><br> has successfully completed java course<br> from our website zenith <br>We highly appreciate your skills and <br>
            we wish you all the best for your future <br><br>TEAM ZENITH</h3><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>		"; ?></td></th></tr>
		
		<?php
		
	}
}
?>
</table>
</center>
</body>
</html>