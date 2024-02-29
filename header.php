<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> 
    <title>repair_pro_homepage</title>
</head>
<body onresize="screensizechange()">
    <header class="main_head" id="to_top_btn">
       <div class="container">
       <div class="upper_header flexible">
            <div class="welcome_text">
                <p>Welcome to RepairPro - Making businesses better</p>
            </div>

            <div class="social_contact flexible">
                <a href="">login/Register</a>
                <ul class="social_icon flexible">
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-pinterest-p"></i></a></li>
                </ul>

            </div>
        </div>
        <div class="lower_header flexible">
            <div class="frm_logo">
                <a href="#"><img src="images\logo.png" alt=""></a>
            </div>
            <div class="frm_contact flexible">
                <div class="frm_contact_inr flexible">
                <i class="fa-regular fa-clock"></i>
                    <div class="timing ">
                        <h6>Opening Time</h6>
                        <span>Allday 9.00 - 18.00</span>
                    </div>
                </div>
                <div class="frm_contact_inr flexible">
                <i class="fa-regular fa-envelope"></i>
                    <div class="email">
                          <h6>Email Us</h6>
                        <a href="mailto:info@example.com">info@example.com</a>
                    </div>
                </div>
                <div class="frm_contact_inr flexible">
                <i id="icon_blue" class="fa-solid fa-phone"></i>
                    <div class="phone">
                        <h6>Call Us Now</h6>
                        <a href="tel:+251-235-3256">+251-235-3256</a>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </header>

    <!---navbar---->

    <div class="nav_bcg ">
        <div class="container">
        <button onclick="displaylist()"><i class="fa-solid fa-bars"></i></button>
                <div class="nav_block flexible ">
                  
                    <nav id="move">
                            <ul id="mobile" class="nav_items flexible">
                                <li><a href="index.php">home</a></li>
                                <li class="dropdown"><a href="">services</a>

                                <ul class="nav_dropdown">
                                  <li><a id="drop_item_border" href="">service1</a></li>
                                  <li><a href="">service2</a></li>
                                  <li><a href="">service3</a></li>
                                  <li><a href="">service4</a></li>
                                </ul>
                              
                                </li>
                                <li><a href="">page</a></li>
                                <li class="dropdown"><a href="">store</a>

                                <ul class="nav_dropdown">
                                  <li><a id="drop_item_border" href="">service1</a></li>
                                  <li><a href="">service2</a></li>
                                  <li><a href="">service3</a></li>
                                  <li><a href="">service4</a></li>
                                </ul>

                              </li>

                                <li><a href="about.php">about</a></li>
                                <li><a href="">contact</a></li>
                            </ul>
                        </nav>
                    
                    <div class="search_icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="mobile_icon">
                            <img src="images/footer-logo.png" alt="">
                        </div>
             </div>
       </div>
    </div>




