<?php
require('connect.php');
session_start();
if(isset($_POST['user']) and isset($_POST['pwd'] ))
{

$pw=$_POST['pwd'];
$user=$_POST['user'];


}
else{
	echo "enter details";
}
$sql="SELECT * from regis where username='$user' and password='$pw' ";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{
$_SESSION['user']=$user;	

}	
else
{
 echo "no record Found";
	
}
if(isset($_SESSION['user']))
{
$user=$_SESSION['user'];
echo  "welcome"." " .$user;
echo " <a href='logout.php'>logout</a> ";

}

?>