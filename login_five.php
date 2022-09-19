<?php
session_start();

include_once "./config/db.php";

$report = "";

if(isset($_SESSION['user_id'])){
    $global_email = $_SESSION['user_email'];
    $global_id = $_SESSION['user_id'];
  }

    if(isset($_POST['submit'])){
    
    $option = $_POST['option'];

    $insertquery = "INSERT INTO netflix_plans (option) VALUES ('$option')";
    $saveData = $db->query($insertquery);
    if($saveData){
        $report =  "<div style='text-align: center; color: green;'>Plan selected succesfully</div>";
        header('refresh: 30 url:login_six.php');
    }else{
        $report =  "<div style='text-align: center; color: red;'>No plan selected</div>";
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
    <link rel="stylesheet" href="./css/styles6.css">
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
                    <a href="logout.html">Sign Out</a>
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
                        <p class="page-two-desc-paragraph">Step<span>2</span> OF<span>3</span></p>
                        <h2>Choose a plan that is right for you</h2>
                        <!-- <p class="page-two-desc-paragraph-two">Just a few more steps and you're done!<br>We hate paper work too.</p> -->

                        <section class="checkbox-container">

                            <div class="checkbox-content">
                                <div class="img-container-two">
                                    <img src="images/page-images/checkbox2.png" alt="" class=" icon-image-two">
                                </div>
                                <div class="checkbox-content-desc">
                                    <p>Watch all you want. Ad free.</p>
                                </div>
                            </div>

                            <div class="checkbox-content">
                                <div class="img-container-two">
                                    <img src="images/page-images/checkbox2.png" alt="" class="image icon-image-two">
                                </div>
                                <div class="checkbox-content-desc">
                                    <p>Reccomendations just for you.</p>
                                </div>
                            </div>

                            <div class="checkbox-content">
                                <div class="img-container-two">
                                    <img src="images/page-images/checkbox2.png" alt="" class="image icon-image-two">
                                </div>
                                <div class="checkbox-content-desc">
                                    <p>Change or cancel your plan anytime.</p>
                                </div>
                            </div>

                        </section>

                        <section class="billing-container">
                            <form action="#" method="POST">
                            <table>

                                <thead>
                                    <tr>
                                        <th class="first-cell visible-content"></th>
                                        <th class="table-grid-header" id="box">
                                            <div class="grid-header-container" id="header-container">
                                                <p>Mobile</p>
                                                <input type="radio" name="option" value="mobile" class="option-style" id="option">
                                                <div class="triangle"></div>
                                            </div>
                                        </th>
                                        <th class="table-grid-header" id="box">
                                            <div class="grid-header-container" id="header-container">
                                                <p>Basic</p>
                                                <input type="radio" name="option" value="Basic" class="option-style" id="option">
                                                <div class="triangle"></div>
                                            </div>
                                        </th>
                                        <th class="table-grid-header" id="box">
                                            <div class="grid-header-container" id="header-container">
                                                <p>Standard</p>
                                                <input type="radio" name="option" value="Standard" class="option-style" id="option">
                                                <div class="triangle"></div>
                                            </div>
                                        </th>
                                        <th class="table-grid-header" id="box">
                                            <div class="grid-header-container" id="header-container">
                                                <p>Premium</p>
                                                <input type="radio" name="option" value="Premium" class="option-style" id="option">
                                                <div class="triangle"></div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="row-2">
                                    <!-- Monthly Price -->
                                    <tr>
                                        <td class="visible-content table-grid-body-start">
                                            <p>Monthly Price</p>
                                        </td>
                                        <td class="table-grid-body" id="price-desc">$5</td>
                                        <td class="table-grid-body" id="price-desc">$10</td>
                                        <!-- <td class="hidden-content table-grid-body-start"><p>Monthly Price</p></td> -->
                                        <td class="table-grid-body" id="price-desc">$15</td>
                                        <td class="table-grid-body" id="price-desc">$20</td>
                                    </tr>
                                </tbody>

                                <tbody class="row-3">
                                    <!-- Video quality -->
                                    <tr>
                                        <td class="visible-content table-grid-body-start">
                                            <p>Video quality</p>
                                        </td>
                                        <td class="table-grid-body" id="price-desc-two">Good</td>
                                        <td class="table-grid-body" id="price-desc-two">Good</td>
                                        <!-- <td class="hidden-content table-grid-body-start"><p>Video quality</p></td> -->
                                        <td class="table-grid-body" id="price-desc-two">Better</td>
                                        <td class="table-grid-body" id="price-desc-two">Premium</td>
                                    </tr>
                                </tbody>

                                <tbody class="row-4">
                                    <!-- Resolution -->
                                    <tr>
                                        <td class="visible-content table-grid-body-start">
                                            <p>Resolution</p>
                                        </td>
                                        <td class="table-grid-body" id="price-desc-three">480p</td>
                                        <td class="table-grid-body" id="price-desc-three">480p</td>
                                        <!-- <td class="hidden-content table-grid-body-start"><p>Resolution</p></td> -->
                                        <td class="table-grid-body" id="price-desc-three">1080p</td>
                                        <td class="table-grid-body" id="price-desc-three">4K+HDR</td>
                                    </tr>
                                </tbody>

                                <tbody class="row-5">
                                    <!-- Devices you can use to watch -->
                                    <tr>
                                        <td class="visible-content table-grid-body-start">
                                            <p>Devices you can use to watch</p>
                                        </td>

                                        <td class="table-grid-body display-one">

                                            <!-- Phone One-->
                                            <div class="icon-container visible-icon-img">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Phone.png" alt="" class="image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Phone</p>
                                                </div>
                                            </div>
                                            <!-- Phone One-->

                                            <!--Hidden Phone One-->
                                            <div class="icon-container hidden-icon-img">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Tablet_and_phone_colored_red-removebg-preview.png" alt="" class="image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p class="phone-txt-one">Phone</p>
                                                </div>
                                            </div>
                                            <!-- Phone One-->

                                            <!-- Tablet One-->
                                            <div class="icon-container visible-icon-img-two">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Phone.png" alt=""
                                                        class="image icon-image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Tablet</p>
                                                </div>
                                            </div>
                                            <!-- Tablet One-->

                                            <!--Hidden Tablet One-->
                                            <div class="icon-container hidden-icon-img hidden-icon-img-two">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Tablet_and_phone_colored_red-removebg-preview.png" alt=""
                                                        class="image icon-image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p class="phone-txt-two">Tablet</p>
                                                </div>
                                            </div>
                                            <!-- Tablet One-->
                                        </td>

                                        <td class="table-grid-body">
                                            <div class="icon-container-two">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Phone.png" alt="" class="image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Phone</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Phone.png" alt=""
                                                        class="image icon-image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Tablet</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container-three">
                                                    <img src="images/page-images/icons/Laptop.png" alt=""
                                                        class="image icon-image-three">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Computer</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container-three">
                                                    <img src="images/page-images/icons/tv.png" alt=""
                                                        class="image icon-image-three">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>TV</p>
                                                </div>
                                        </td>

                                        <!-- <td class="hidden-content table-grid-body-start"><p>Devices you can use to watch</p></td> -->

                                        <td class="table-grid-body">
                                            <div class="icon-container-two">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Phone.png" alt="" class="image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Phone</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Phone.png" alt=""
                                                        class="image icon-image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Tablet</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container-three">
                                                    <img src="images/page-images/icons/Laptop.png" alt=""
                                                        class="image icon-image-three">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Computer</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container-three">
                                                    <img src="images/page-images/icons/tv.png" alt=""
                                                        class="image icon-image-three">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>TV</p>
                                                </div>
                                        </td>

                                        <td class="table-grid-body">
                                            <div class="icon-container-two">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Phone.png" alt="" class="image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Phone</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container">
                                                    <img src="images/page-images/icons/Phone.png" alt=""
                                                        class="image icon-image">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Tablet</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container-three">
                                                    <img src="images/page-images/icons/Laptop.png" alt=""
                                                        class="image icon-image-three">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>Computer</p>
                                                </div>
                                            </div>

                                            <div class="icon-container">
                                                <div class="icon-img-container-three">
                                                    <img src="images/page-images/icons/tv.png" alt=""
                                                        class="image icon-image-three">
                                                </div>
                                                <div class="icon-desc">
                                                    <p>TV</p>
                                                </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                            <!-- Grid-table-body End-->
                        </section>

                    </div>

                </div>

                <div class="bottom-table-desc">
                    <p>HD (720p), Full HD (1080p), Ultra HD (4K) and HDR availability subject to your internet service
                        and device capabilities. Not all<br>content is available in all resolutions. See our<span><a
                                href="#">Terms of Use</a></span> for more details.</p><br>

                    <p>Only people who live with you may use your account. Watch on 4 different devices at the same time
                        with Premium, 2 with Standard,<br> and 1 with Basic and Mobile.</p><br>

                    <div class="bottom-table-desc-parent-container">
                        <div class="bottom-table-desc-btn-container">
                            <button type="submit" name="submit" class="bottom-table-desc-btn">Next</button>
                        </div>
                    </div>

                </div>

            </div>
            <!-- page-two-content-container End-->
            </form>


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

            <script>


                const box = document.querySelectorAll('#box');
                // const headerContainer = document.querySelector('#header-container');
                const priceDesc = document.querySelectorAll('#price-desc');
                const priceDescTwo = document.querySelectorAll('#price-desc-two');
                const priceDescThree = document.querySelectorAll('#price-desc-three');
                const triangle = document.querySelectorAll('.triangle');

                const phoneTxt = document.querySelectorAll('.phone-txt-one');
                const phoneTxtTwo = document.querySelectorAll('.phone-txt-two');
                const visibleIconContainer = document.querySelectorAll('.visible-icon-img');
                const hiddenconContainer = document.querySelectorAll('.hidden-icon-img');
                const visibleIconContainerTwo = document.querySelectorAll('.visible-icon-img-two');
                const hiddenconContainerTwo = document.querySelectorAll('.hidden-icon-img-two');

                document.addEventListener("DOMContentLoaded", function(event) { 
                var element = document.querySelectorAll('#box');

                if (element) {
    
                element.forEach(function(el, key){
        
                 el.addEventListener('click', function () {
                 console.log(key);
         
                 el.classList.toggle("active");
            
                element.forEach(function(ell, els){
                if(key !== els) {
                     ell.classList.remove('active');
                }
                  console.log(els);
             });
            });
        });
        }
        });



                box.addEventListener("click", function () {
                    box.style.transform = "scale(1.1)";
                    triangle.style.display = "block";
                    visibleIconContainerTwo.style.display = "none";
                    hiddenconContainerTwo.style.display = "block";
                    visibleIconContainer.style.display = "none";
                    hiddenconContainer.style.display = "block";
                    headerContainer.style.opacity = "1";
                    priceDesc.style.color = "#E50914";
                    priceDescTwo.style.color = "#E50914";
                    priceDescThree.style.color = "#E50914";
                    phoneTxt.style.color = "#E50914";
                    phoneTxtTwo.style.color = "#E50914";
                })


                btn.addEventListener("click", ()=>{
                box.classList.toggle('passive');
                })
                
            </script>
</body>

</html>