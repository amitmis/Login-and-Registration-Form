<?php


require('connect.php');

    $email=htmlentities($_POST['email']);
    $pwd=htmlentities($_POST['pwd']);
    $user=htmlentities($_POST['user']);
    $cnf=htmlentities($_POST['cnfpwd']);
	
	$sql = "INSERT INTO regis (email,username, password) VALUES
            ('$email','$user', '$pwd')";
	if($pwd==$cnf)
	{		

    if(!mysqli_query($con,$sql))
	{
		echo "data not insered";
	}
	else
   {
		echo "inserted";
   }
   
   	}
else{
	echo "Password do not match";
}	
	header("refresh:3; url=register.php");
	
    ?>