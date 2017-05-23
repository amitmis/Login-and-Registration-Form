<?php
error_reporting(0);

$con = mysqli_connect('127.0.0.1', 'root', '');


if(!$con)
{
    echo" Connection not made";
}
if(!mysqli_select_db($con,'register'))
{
	echo "DB not selected";
}

    ?>