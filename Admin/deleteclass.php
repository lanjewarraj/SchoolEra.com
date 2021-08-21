<?php
$conn=mysqli_connect("localhost","root","","class");
$id=$_POST['txtID'];
$sql="delete from class where cid=$id";
if(mysqli_query($conn,$sql))
{
	header("location:classtable.php");
}

?>