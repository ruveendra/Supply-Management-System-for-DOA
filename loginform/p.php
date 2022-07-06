<?php

$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo 'Not Connected to the Server';
}

if(!mysqli_select_db ($con, 'login'))
{
	echo 'Database not selected';
}

$UserName = $_POST['UserName'];
$Password = $_POST['Password'];


$sql = "insert into admin where'$UserName' ='admin' and '$Password'='1234';
$result = mysqli_query($con, $sql);

if(!$result)
{
echo 'Admin Not found';
}

else{
echo 'Welcome Admin';
}

?>