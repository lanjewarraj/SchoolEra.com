<?php
$host='Localhost';
$user='root';
$pass='';
$db='class';
$con=mysqli_connect($host,$user,$pass,$db);
$t1=$_POST['classroomno'];
$t2 = $_POST['teach'];
$t3 = $_POST['class'];
$sql="INSERT INTO class(classroomno,ClassTech,CLASS) VALUES('$t1','$t2','$t3')";
$query=mysqli_query($con,$sql);
if($query)
{
 header("location:classtable.php");
}

?>