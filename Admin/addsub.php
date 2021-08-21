<?php
error_reporting(E_PARSE |E_ERROR);
?>
<?php
$host='Localhost';
$user='root';
$pass='';
$db='subject';
$con=mysqli_connect($host,$user,$pass,$db);
$t1 = $_POST['subjectname'];
$t2 = $_POST['subjectcode'];
$t3 = $_POST['teacheralloted'];
$sql="INSERT INTO subject(subjectname,subjectcode,teacheralloted) values('$t1','$t2','$t3')";
$query=mysqli_query($con,$sql);

if($query)
{
	header("location:subjecttable.php");
}
?>