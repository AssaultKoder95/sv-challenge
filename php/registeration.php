<?php

 require('maincontrol.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $query = "INSERT INTO `registeration`(`username`, `password`, `phone`, `email`, `age`, `pincode`) VALUES ('$username','$password','$phone','$email','$age','$pincode')";
    $result = mysql_query($query);

    $query = "select userID from registeration where phone = $phone ";
    $result101 = mysql_query($query);

    $result = mysql_fetch_array($result101);
    $userID = $result[0];

    $query = "INSERT INTO `login`(`userID`, `username`, `password`) VALUES ('$userID','$phone','$password')";
	$result = mysql_query($query);
    
	if(mysql_num_rows($result101) == 1 && $result)
	{
		header("LOCATION:../success.html");
	}
	else
	{
		header("LOCATION:../fail.html");
	}			
?>