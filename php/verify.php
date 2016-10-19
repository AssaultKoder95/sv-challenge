<?php
    
    require('maincontrol.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select userID from login where username = $username and password = $password ";
    $result = mysql_query($query);
    $result = mysql_fetch_array($result);
    if($result[0])
        header("LOCATION:../success.html");
    else
        header("LOCATION:../login.html");            
        
?>  