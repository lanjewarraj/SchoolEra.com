<?php
$conn=mysqli_connect("localhost","root","","subject");
$id=$_POST['txtID'];
echo $id;
$sql="delete from subject where id=$id";
if(mysqli_query($conn,$sql))
{
	header("location:subjecttable.php");
}

?>