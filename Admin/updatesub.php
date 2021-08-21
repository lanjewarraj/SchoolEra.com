<?php
error_reporting(E_PARSE | E_ERROR);

$conn=mysql_connect('localhost','root','');
$db=mysql_select_db('subject');
$id=$_POST['txtid'];
echo $id;
$ud="UPDATE subject SET subjectname='".$_POST['txtsubjectname']."',subjectcode='".$_POST['txtsubjectcode']."',teacheralloted='".$_POST['txtteacheralloted']."' WHERE id=$id";
if(mysql_query($ud))
{
	header("location:subjecttable.php");
}

?>