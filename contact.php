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
    <title>Westhills Detail & Rental</title>
  </head>
  <body>
   

    
<!-- Top Header -->

<div>
      <nav class="navbar navbar-light header_background d-flex flex-row align-items-baseline">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="css/img/header_logo.png" width="87" height="13" class="d-inline-block align-top" alt="" loading="lazy">
          <p class=" brand_text">AutoGroup</p>
        </a>
        <ul class="nav d-flex align-items-baseline justfiy-content-around">
          <li class="nav-item class= top_header_text d-none d-md-block">
           <a class="nav-link" href="tel:360-616-3027">Detail (360) 616-3027</a>
          </li>
          <li class="nav-item class= top_header_text d-none d-md-block">
            <a class="nav-link class= top_header_text" href="tel:360-616-3036">Rental (360) 616-3036</a>
          </li>
          <li class="nav-item class= top_header_text d-block d-sm-none">
            <a class="nav-link class= top_header_text" href="tel:360-616-3036"> Call Detail</a>
          </li>
          <li class="nav-item class= top_header_text d-block d-sm-none ">
            <a class="nav-link class= top_header_text" href="tel:360-616-3027"> Call Rental</a>
          </li>
        </ul>
      </nav>
    </div>
    
    
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav_bar">
          <a class="navbar-brand" href="index.html"><img src="css/img/whd-logo-lrg.png" width=120px height=40px></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-end">
              <li class="nav-item dropdown nav_links">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="detail.html">Detail</a>
                  <a class="dropdown-item" href="paint_protection.html">Paint Protection</a>
                  <a class="dropdown-item" href="window_tinting.html">Window Tinting</a>
                </div>
              </li>
              <li class="nav-item nav_links">
                <a class="nav-link" href="rental.html">Rental<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item  active nav_links">
                <a class="nav-link" href="location.html">Location<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item nav_links">
                <a class="btn btn-danger btn-lg contact_us_button" href="form.php" role="button">Contact & Schedule</a>
              </li>
             
            </ul>
          </div>
        </nav>
    <!-- Contact Form -->

    <div class="container d-flex flex-row contact_form_container">
    <div class="contact_form_box d-flex flex-column">
            <h1 class="contact_form_h1">Contact Us Today</h1>
            <p class="contact_us_p">Need to schedule your detail appointment or reserve a rental 
                vehicle? Simply complete the form below to send us a message 
                and one of our representatives will contact you soon.</p>


            <form method="post" action="form_process.php">  
            <div class="form_name_box">
                <div class="form_input d-flex flex-column">
                    <label class="name_feild form_h1">First Name</label>
                    <input type="text" input name="firstName">
                </div>
                <div class=" form_input d-flex flex-column">
                    <label class="name_feild form_h1">Last Name</label>
                    <input type="text" input name="lastName">
                </div>
            
            </div>
                <div class=" form_input2 d-flex flex-column">
                    <label class="form_h1">Email Address</label>
                    <input name="email">
                </div>

                <div class=" form_input2 d-flex flex-column">
                    <label class="form_h1">Phone</label>
                    <input name="phone">
            </div>
            
       
            <h1 class="form_h2">Type of Service</h1>

            <div class="radio_group">
              
                <input type="radio" id="detail"  name="service" value="Detail" class="radio_btn" >
                <label class="service_label">Detail & Paint</label>
                
                <input type="radio" id="rental" name="service" value="Rental" class="radio_btn">
                <label class="service_label">Rental Service</label>
                
                <input type="radio" id="windowTint" name="service" value="Window Tint" class="radio_btn">
                <label class="service_label">Window Tint</label>
                
            </div>

        <div class="message_box d-flex flex-column">
            <label class="form_h1">Message</label>
            <textarea rows="5" cols="20" name="message" class="message_area"></textarea>

       </div>
            <p class="form_disc">For detail service please include information about your vehicle such as 
                Year, Make, and Model. For rental please include vehicle size or need.</p>
    
            <input type="submit" name="submit" class="form_button" value="Contact Us Today">
            
        </form>
        </div>
        <div>
            <div class="jumbotron sales_jumbotron d-none d-md-block">
                <h1 class="display-4 sales_h1">Looking for a new vehicle?</h1>
                <p class="sales_p">Contact a helpful sales associate today.</p>
                <a class="btn btn-primary btn-lg sales_button" href="https://www.westhillsautoplex.com/" role="button">Contact West Hills Sales</a>
            </div> 
        </div> 
    
 
</div>   

      <!-- Footer -->
      <div class="container-fluid justify-content-center footer">
              <div class="footer_box ">
                <img src="css/img/whd-logo-wht.png" class="footer_logo">
              </div>
              <div class="footer_box f3" id="f3">
                <p class="footer_p">Detail Services</p>
                <p class="footer_p">Shop Address</p>
                <p class="footer_p">4949 Auto Center Blvd, </br> Bremerton, WA 98312</p>
                <p class="footer_p"><a href=tel:360-616-3027> (360) 616-3027</a></p>
              </div>
              <div class="footer_box" id="f4">
                  <p  class="footer_p">Rental Services</p>
                  <p class="footer_p">Shop Address</p>
                  <p class="footer_p">950 West Hills Blvd, </br>Bremerton, WA 98312</p>
                  <p class="footer_p"><a href=tel:360-616-3036>(360) 616-3036</a></p>
              </div>
              <div>
                <ul class="footer_box d-none d-md-block ">
                  <li class="footer_list"><a href="detail.html">Detail</a></li>
                  <li class="footer_list"><a href="rental.html">Rental</a></li>
                  <li class="footer_list"><a href="location.html">Location</a></li>
                </ul>
              </div>
          </div>
          
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


