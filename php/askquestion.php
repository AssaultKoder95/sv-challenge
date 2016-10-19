<?php
    
    require('maincontrol.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];   

    $WholeMsg = " Name : $name \n Email : $email \n Subject : $subject \n Message : $message";
    $WholeMsg = wordwrap($WholeMsg,80);

    $onUserQuerySubject = "Query on Gaadi Baba";
    $onUserQueryMsg = " Thank you for using our service. Our experts are helping other users as well but we will get to you soon. Sorry for the inconvience caused.";
    $val1 = mail($email,$onUserQuerySubject,$onUserQueryMsg);

    $adminEmail = "abhishekkhanna1995@gmail.com";
    $QueryRecieved = "A query has been recieved";
    $val2 = mail($adminEmail,$QueryRecieved,$WholeMsg);

    if(val1 && val2)
        header("LOCATION:index.html");

?>  