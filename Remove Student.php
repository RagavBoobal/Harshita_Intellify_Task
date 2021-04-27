<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"intellify");
if(!($connect))
{
 echo '<script type = "text/javascript">window.alert("SUCCESSFULLY RECORD REMOVED");</script>';
include 'Remove Student.html';
}
$S_ID=$_POST['S_ID'];
$T_ID=$_POST['T_ID'];
print("<br>");
print("<br>");
$sql="DELETE FROM student1 WHERE S_ID=$_POST[S_ID]";
if (!mysqli_query($connect,$sql))
  {	 
  die('Error: ' . mysqli_error($connect));
  }
echo '<script type = "text/javascript">window.alert("NOW YOU ARE A USER");</script>';
include 'Remove Message.html';
mysqli_close($connect)
?>




