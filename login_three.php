<?php
session_start();

include_once "./config/db.php";

if(isset($_SESSION['user_id'])){
  $global_email = $_SESSION['user_email'];
  $global_id = $_SESSION['user_id'];
}

$report ="";

  if(isset($_POST["submit"])){
    $password = md5($db->real_escape_string($_POST['password']));

      $change_password = $db->query("UPDATE users SET `password` ='$password' WHERE id ='$global_id'");

      if($change_password){
        $report = "<div style='text-align: center; color: green;'>Password Added Successfully</div>";
        header('refresh: 3 url= login_four.php');
      }else{
        $report = "<div style='text-align: center; color: green;'>Password Added Unsuccessfully</div>";
      }
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="./css/styles4.css">
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
                    <a href="login.html">Sign In</a>
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

                <div class="page-two-desc">
                  <p class="page-two-desc-paragraph">Step<span>1</span> OF<span>3</span></p>
                  <h2>Create a password to start<br> up your membership</h2>
                  <p class="page-two-desc-paragraph-two">Just a few more steps and you're done!<br>We hate paper work too.</p>

                  <div class="form-container">

                    <form action="#" method="POST">
                    <?php echo $report ; ?>
                    <div class="input-container">
                        <input type="email" placeholder="Email" required value="<?php echo  $global_email ;?>" class="input-info">
                    </div>

                    <div class="input-container">
                        <input pattern{a-zA-Z0-9} type="password" placeholder="Add a password" required name="password" class="input-info">
                    </div>

                    <div class="cookies-container">
                        <div class="cookies-input">
                            <input type="checkbox" name="cookies">
                        </div>
                        <div class="cookies-desc">
                            <p>Please do not email me Netflix special offers.</p></div>
                    </div>
                    
                  <div class="page-two-desc-btn-container">
                    <button type="submit" name="submit" class="page-two-desc-btn">Next</button>
                  </div>

                </form>
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