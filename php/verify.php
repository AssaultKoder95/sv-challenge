<?php
    
    require('maincontrol.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from `login` where username = $username and password = $password ";
    $result = mysql_query($query);
    $result = mysql_num_rows($result);
    if($result == 1)
        header("LOCATION:../success.html");
    else
        header("LOCATION:../login.html");            
        
?>  