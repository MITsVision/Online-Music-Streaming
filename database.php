<?php
if(isset($_POST['art']))
{
$nam=$_POST['name1']." ".$_POST['name2'];
$pwd=$_POST['name3'];
$dob=$_POST['name4'];
$eml=$_POST['name5'];
$gen=$_POST['name'];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"db1");
$qury="insert into tb2 values('$id','$nam','$pwd','$dob','$gen','$eml','$qul')";
$sub=mysqli_query($link,$qury);
if($sub)
	echo "Record inserted successfully";
else
	echo "Failed......";
}
?>