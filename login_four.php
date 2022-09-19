<?php
  // if(!isset($_SESION['user_id'])){
  //   header('location: index.php');
  // }else{
  //   $global_email = $_SESSION['user_email'];
  //   $global_id = $_SESSION['user_id'];
  // }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="./css/styles5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://example.com/fontawesome/v6.1.2/js/all.js" data-auto-replace-svg="nest"></script>
</head>
<body>
    <!-- Container -->
    <div class="container">

          <!-- page-one-container -->
          
        <section class="page-one-container">

            <!-- navigation-bar -->
            <div class="navigation-bar">

                <!-- navigation-right -->
                <div class="navigation-right">
                    <div class="logo-container">
                        <img src="images/page-images/netflix-removebg-preview.png" alt="" class="image">
                    </div>
                </div>
                <!-- navigation-right End-->

                <!-- navigation-left -->
                <div class="navigation-left">
                    <a href="logout.html">Log Out</a>
                </div>
                <!-- navigation-left End-->

            </div>
            <!-- navigation-bar End-->

             <!-- page-one-container End -->
            </section>

            <!-- page-two-container -->
            <section class="page-two-container">

                <!-- page-two-content-container -->
              <div class="page-two-content-parent-container">
              <div class="page-two-content-container">

                <!-- icon-container -->
                <div class="icon-container">
                  <div class="img-container">
                    <img src="images/page-images/checkbox.png" alt="" class=" image icon-image">
                  </div>
                </div>
                <!-- icon-container End-->

                <div class="page-two-desc">
                  <p class="page-two-desc-paragraph">Step<span>2</span> OF<span>3</span></p>
                  <h2>Choose your content.</h2>
                 <section class="checkbox-container">

                    <div class="checkbox-content">
                        <div class="img-container-two">
                            <img src="images/page-images/checkbox2.png" alt="" class="image icon-image-two">
                        </div>
                        <div class="checkbox-content-desc">
                            <p>No commitments, cancel<br> anytime.</p>
                        </div>
                    </div>

                    <div class="checkbox-content">
                        <div class="img-container-two">
                            <img src="images/page-images/checkbox2.png" alt="" class="image icon-image-two">
                        </div>
                        <div class="checkbox-content-desc">
                            <p>Everything on Netflix for one<br>low price.</p>
                        </div>
                    </div>

                    <div class="checkbox-content">
                        <div class="img-container-two">
                            <img src="images/page-images/checkbox2.png" alt="" class="image icon-image-two">
                        </div>
                        <div class="checkbox-content-desc">
                            <p>No adds and no extra fees.</p>
                        </div>
                    </div>

                 </section>
                  <div class="page-two-desc-btn-container">
                    <button class="page-two-desc-btn"><a href="login_five.php">Next</a></button>
                  </div>
                </div>

              </div>
              </div>
                <!-- page-two-content-container End-->

            </section>
            <!-- page-two-container End-->

            <!-- page-three-container -->
            <section class="page-three-container">
              <footer>
                <p class="footer-header"><a href="#">Questions? Contact us.</a></p>
                <div class="footer-grid-container">

                  <section class="footer-grid-left">
                  <div class="footer-grid">
                    <ul>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Cookie Preferences</a></li>
                    </ul>
                  </div>
                  <div class="footer-grid">
                    <ul>
                      <li><a href="#">Help Center</a></li>
                      <li><a href="#">Corporate Information</a></li>
                    </ul>
                  </div>
                </section>

                  <section class="footer-grid-right">
                  <div class="footer-grid">
                    <ul>
                      <li><a href="#">Terms of Use</a></li>
                    </ul>
                  </div>
                  
                  <div class="footer-grid">
                    <ul>
                      <li><a href="#">Privacy</a></li>
                    </ul>
                  </div> 
                </section>

                </div>
                </footer>
            </section>
            <!-- page-three-container End-->

            <div>
</body>
</html>