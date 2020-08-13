<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/main.css">
    <title>Westhills Detail</title>
  </head>
  <body>
   

    
<!-- Top Header -->

<div>
  <nav class="navbar navbar-light header_background d-flex flex-row align-items-baseline">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="img/header_logo.png" width="87" height="13" class="d-inline-block align-top" alt="" loading="lazy">
      <p class=" brand_text">AutoGroup</p>
    </a>
    <ul class="nav d-flex align-items-baseline justfiy-content-around">
      <li class="nav-item class= top_header_text d-none d-md-block">
       <a class="nav-link ">Detail (360) 616-3036</a>
      </li>
      <li class="nav-item class= top_header_text d-none d-md-block">
        <a class="nav-link class= top_header_text">Rental:(360) 616-3036</a>
      </li>
      <li class="nav-item class= top_header_text d-block d-sm-none">
        <a class="nav-link class= top_header_text"> Call Detail</a>
      </li>
      <li class="nav-item class= top_header_text d-block d-sm-none ">
        <a class="nav-link class= top_header_text"> Call Rental</a>
      </li>
    </ul>
  </nav>
</div>


<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav_bar">
      <a class="navbar-brand" href="#"><img src="img/whd-logo.png" width=101px height=30px></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex justify-content-end">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Detail</a>
              <a class="dropdown-item" href="#">Paint Protection</a>
              <a class="dropdown-item" href="#">Window Tinting</a>
            </div>
          </li>
          <li class="nav-item active class=nav_links">
            <a class="nav-link" href="#">Rental<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item class=nav_links">
            <a class="nav-link" href="#">Location<span class="sr-only">(current)</span></a>
          </li>

         
        </ul>
      </div>
    </nav>
    <!-- Contact Form -->
    <form method="post" name="myemailform" action="form.php">
        <p>
            Enter First Name:	<input type="text" name="first_name">
        </p>
        <p>
            Enter Email Address:<input type="text" name="email">
        </p>
        <p>
            Enter Message: <textarea name="message"></textarea>
        </p>
            <input type="submit" value="Send Form">
    </form>

   


<?php
        if(!isset($_POST['submit']))
        {
            //This page should not be accessed directly. Need to submit the form.
            echo "error; you need to submit the form!";
        }
        $first_name = $_POST['first_name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];

        //Validate first
        if(empty($name)||empty($visitor_email)) 
        {
            echo "Name and email are mandatory!";
            exit;
        }

        if(IsInjected($visitor_email))
        {
            echo "Bad email value!";
            exit;
        }

        $email_from = "Westhills Detail";//<== update the email address
        $email_subject = "New Form submission";
        $email_body = "You have received a new message from $name.\n".
            "Here is the message:\n $message".
            
        $to = "Jmorrissette@haselwood.com";//<== update the email address
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
        //Send the email!
        mail($to,$email_subject,$email_body,$headers);
        //done. redirect to thank-you page.
        header('Location: index.html');


        // Function to validate against any email injection attempts
        function IsInjected($str)
        {
        $injections = array('(\n+)',
                    '(\r+)',
                    '(\t+)',
                    '(%0A+)',
                    '(%0D+)',
                    '(%08+)',
                    '(%09+)'
                    );
        $inject = join('|', $injections);
        $inject = "/$inject/i";
        if(preg_match($inject,$str))
            {
            return true;
        }
        else
            {
            return false;
        }
        }
        
?> 
 
       
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


