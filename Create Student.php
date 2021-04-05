<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"intellify");
if(!($connect))
{
 echo '<script type = "text/javascript">window.alert("YOU ARE NOT CONNECTED TO DB.. PLS!! TRY AGAIN");</script>';
include 'Create Student.html';
}
$S_ID=$_POST['S_ID'];
$T_ID=$_POST['T_ID'];
$S_NAME = $_POST['S_NAME'];						    
$S_CONTACT = $_POST['S_CONTACT'];
$School=$_POST['School'];

print("<br>");
print("<br>");
$sql="INSERT INTO student1(`S_ID`, `T_ID`, `S_NAME`, `S_CONTACT`, `School`) VALUES ('$_POST[S_ID]','$_POST[T_ID]','$_POST[S_NAME]','$_POST[S_CONTACT]','$_POST[School]')";
if (!mysqli_query($connect,$sql))
  {	 
  die('Error: ' . mysqli_error($connect));
  }
echo '<script type = "text/javascript">window.alert("NOW YOU ARE A USER");</script>';
include 'Create Message.html';
mysqli_close($connect)
?>
