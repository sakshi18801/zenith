<?php
include('db1.php');
$sql="select * from videos";
$res=mysqli_query($con,$sql);
echo "my videos";

while($row=mysqli_fetch_assoc($res)){
$id=$row['id'];
$name=$row['name'];
echo "<h4><a href='watch.php?id=$id'>".$name."</a></h4>";

}

?>