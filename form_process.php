<?php

/*echo '<pre>';
        print_r($_POST);
echo '</pre>';
*/

if($_POST["submit"])  {

    
    $subject="New Detail/Rental Appointment";
    $first=$_POST["firstName"];
    $last=$_POST["lastName"];
    $senderEmail=$_POST["email"];
    $senderPhone=$_POST["phone"];
    $serviceType=$_POST["service"];
    $message=$_POST["message"];

    $to ="j.morrissette47@gmail.com";
    $body="";

   
    $body .="Frist: " . $first ."\r\n";
    $body .="Last: " . $last. "\r\n";
    $body .="Email: " . $senderEmail. "\r\n";
    $body .="Phone Number: " . $senderPhone. "\r\n";
    $body .="Service Type: " . $serviceType. "\r\n";
    $body .="Message " . $message. "\r\n";

    
    

    mail($to, $subject, $body);

    header('Location: thankyou.html');
}


?>