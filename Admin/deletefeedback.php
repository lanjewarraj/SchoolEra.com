<?php
$con=mysqli_connect("localhost","root","","MySchool");
$id=$_POST['txtID'];

$rtr="delete from feedback where SR=$id";
if(mysqli_query($con,$rtr))
{
 header("location:feedbacktable.php");
}
?>