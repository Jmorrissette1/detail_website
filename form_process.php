<?php


if(isset($_POST['email']) && $_POST['email'] !=''){
    
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $subject="New Detail/Rental Appointment";
        $first=$_POST["firstName"];
        $last=$_POST["lastName"];
        $senderEmail=$_POST["email"];
        $senderPhone=$_POST["phone"];
        $serviceType=$_POST["service"];
        $message=$_POST["message"];
    
        $to ="j.morrissette47@gmail.com";
        $body="";
    
       
        $body .="first: " . $first ."\r\n";
        $body .="Last: " . $last. "\r\n";
        $body .="Email: " . $senderEmail. "\r\n";
        $body .="Phone Number: " . $senderPhone. "\r\n";
        $body .="Service Type: " . $serviceType. "\r\n";
        $body .="Message " . $message. "\r\n";
        
        mail($to, $subject, $body);
    
        header('Location: thank_you.html');
        
    }
    
}


?>