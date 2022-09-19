<?php
    session_start();

    include_once "./config/db.php";

    $report = "";

    if(isset($_POST['submit'])){
        $email = $db->real_escape_string($_POST['email']);
        $email = strtolower($email);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = "";
        $username = "";

        $check4email_match = "SELECT * FROM users WHERE email = '$email'";

        $check_email_query = $db->query($check4email_match);

        if($check_email_query->num_rows > 0){
            echo "User already exits";
            header('refresh: 3 url=index.php');
            
        }
        else{ 
            $prepare_query = "INSERT INTO users (email, password, username) VALUE (?, ?, ?)";
                    $stmt = $db->prepare($prepare_query);
                    $stmt->bind_param('sss', $email, $password, $username);
                    $saveData = $stmt->execute();
                    if($saveData){
                        $lastid = $db->insert_id;
                        $_SESSION['user_id'] = $lastid;
                        $_SESSION['user_email'] = $email;
                        header('refresh: 3 url= login_two.php');

                        echo"<script language='javascript'>

                        </script>
                        ";
                    }else{
                        $report =  "<div style='text-align: center; color: red;'>unable to create account</div>";
                    } 
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
    <link rel="stylesheet" href="./css/styles.css">
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
                    <button class="navigation-btn"><a href="login.php">Sign In</a></button>
                </div>
                <!-- navigation-left End-->

            </div>
            <!-- navigation-bar End-->

            <!-- page-one-body-container -->
                <div class="page-one-body-container">

            <!-- page-one-header-content -->
                <div class="page-one-body-content">
                <div class="header-top"><h1>Unlimited movies, Tv<br> shows, and more. </h1></div>
                <div class="header-middle"><p>Watch anywhere, Cancel anytime.</p></div>
                <div class="header-bottom"><p>
                    Ready to watch? Enter your email to create or restart your membership.
                </p></div>
                
                <!-- Newsletter-form -->
                <form action="#" method="POST">
                <div class="newsletter-form">
                   <div class="input-container">
                    <input type="email" placeholder="Email address" name="email" class="input-info" required>
                   </div>
                   <div class="btn-container">
                    <button type="submit" name="submit" class="newsletter-form-btn" id="box"><span id="btn-txt">Get Started <i class="fa fa-angle-right fa-lg"></i></span></button>
                    <div id="wrapper">
    
                        <div class="profile-main-loader">
                          <div class="loader">
                            <svg class="circular-loader"viewBox="25 25 50 50" >
                              <circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke="#70c542" stroke-width="2" />
                            </svg>
                          </div>
                        </div>
                            
                        </div>
                </div>
                </div>
                <!-- Newsletter-form End-->
            </form>
            
            </div>
            <!-- page-one-header-content End-->

            </div>
            <!-- page-one-body-container End-->

        </section>
          <!-- page-one-container End-->
        
          <!-- page-two-container -->
        <section class="page-two-container">

            <!-- content-one -->
            <div class="content-box content-one">
                <div class="grid-content">
                    <div class="grid-one">
                        <h1>Enjoy on your TV</h1>
                        <p>Watch on Smart TV's, Playstation, Xbox,<br> Chromcast,  Apple TV, Blu-ray players, and <br> more. </p>

                    </div>
                    <div class="grid-two">
                        <div class="grid-two-img-comtainer">
                        <img src="images/page-images/tv.png" alt="" class="image tv-icon">
                    </div>

                        <div class="video-container">
                    <video playsinline autoplay muted loop poster="Fluid Dynamics" class=" video-style">
                        <source
                     src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-in-0819.m4v"
                     type="video/mp4"
                         />
                        Your browser does not support the video tag.
                      </video>
                    </div>

                    </div>
                </div>
            </div>
            <!-- content-one End-->

            <!-- content-two -->
            <div class="content-box content-two">
                <div class="grid-content-two">
                    <div class="grid-four hidden-content">
                        <h1>Download your shows <br>to watch offline.</h1>
                        <p>Save your favorites easily and always have something to watch.</p>
                    </div>
                    <div class="grid-three visible-content">
                        <div class="grid-three-img-container">
                            <img src="images/page-images/story2.jpg" alt="" class="image">
                        </div>
                        <section class="download-bar">
                        <div class="download-bar-top">
                            <div class="download-bar-top-content">
                                <div class="download-bar-img-container">
                                <img src="images/page-images/stranger-things-2.jpg" alt="" class="image">
                            </div>
                            </div>
                            <div class="download-bar-top-content-two">
                                <p class="download-bar-top-header-paragraph">Stranger Things</p>
                                <p class="download-bar-top-header-paragraph-two">Downloading...</p>
                            </div>
                        </div>
                            <div class="download-bar-bottom">
                                <div class="download-bar-img-container">
                                    <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/download-icon.gif" alt="" class="image">
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="grid-four visible-content">
                        <h1>Download your shows <br>to watch offline.</h1>
                        <p>Save your favorites easily and always have something to watch.</p>
                    </div>
                    <div class="grid-three hidden-content">
                        <div class="grid-three-img-container">
                            <img src="images/page-images/story2.jpg" alt="" class="image">
                        </div>
                        <section class="download-bar">
                        <div class="download-bar-top">
                            <div class="download-bar-top-content">
                                <div class="download-bar-img-container">
                                <img src="images/page-images/stranger-things-2.jpg" alt="" class="image">
                            </div>
                            </div>
                            <div class="download-bar-top-content-two">
                                <p class="download-bar-top-header-paragraph">Stranger Things</p>
                                <p class="download-bar-top-header-paragraph-two">Downloading...</p>
                            </div>
                        </div>
                            <div class="download-bar-bottom">
                                <div class="download-bar-img-container">
                                    <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/download-icon.gif" alt="" class="image">
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- content-two End-->
            <!-- content-three -->
            <div class="content-box content-three">
                <div class="grid-content-two">
                    <div class="grid-five">
                        <h1>Watch everywhere.</h1>
                        <p>Steam unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
                    </div>
                </div>
            </div>
            <!-- content-three End-->
            <!-- content-four -->
            <div class="content-box content-four">
                <div class="grid-content-two">
                    <div class="grid-six hidden-content">
                        <h1>Create profiles for kids.</h1>
                        <p>Send kids on adventures with their favorite characters in a space made just for them—<br>free with your membership.</p>
                    </div>
                    <div class="grid-six visible-content">
                        <div class="grid-six-img-container">
                            <img src="images/page-images/netflix-img.png" alt="" class="image">
                        </div>
                    </div>
                    <div class="grid-six visible-content">
                        <h1>Create profiles for kids.</h1>
                        <p>Send kids on adventures with their favorite characters in a space made just for them—<br>free with your membership.</p>
                    </div>
                    <div class="grid-six hidden-content">
                        <div class="grid-six-img-container">
                            <img src="images/page-images/netflix-img.png" alt="" class="image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-four End-->
        </section>
          <!-- page-two-container End-->


          <!-- page-three-container -->
          <div class="content-box content-five">
          <section class="page-three-container">
            <div class="fAQ-list-container">
                <h1 class="faQ-heading">Frequently Asked Questions</h1>
                <div class="faQ-list">
                <div class="faQ-accordian">
                    <!-- accordian -->
                    <div class="dropdown-container">
                        <header class="clearfix">
                            <h1>What is Netflix?</h1>
                            <figure class="expand">
                                <img src="images/page-images/icons/plus sign.png" alt="" class="plus-sign">
                            </figure>
                        </header>
                        <article>
                        <div class="article-inner">
                                <p>Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.
                          </p><br>
                          <p>You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!</p>
                            </div>
                        </article>
                    </div>
                    
                    <div class="dropdown-container">
                        <header class="clearfix">
                            <h1>How much does Netflix cost?</h1>
                            <figure class="expand">
                                <img src="images/page-images/icons/plus sign.png" alt="" class="plus-sign">
                            </figure>
                        </header>
                        <article>
                            <div class="article-inner">
                          <p>Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from $10 to $20 a month. No extra costs, no contracts.
                          </p>
                            </div>
                        </article>
                    </div>
                    
                    <div class="dropdown-container">
                        <header class="clearfix">
                            <h1>Where can I watch?</h1>
                            <figure class="expand">
                                <img src="images/page-images/icons/plus sign.png" alt="" class="plus-sign">
                            </figure>
                        </header>
                        <article>
                            <div class="article-inner">
                          <p>Watch anywhere, anytime. Sign in with your Netflix account to watch instantly on the web at netflix.com from your personal computer or on any internet-connected device that offers the Netflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.
                          </p><br>
                          <p>You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Netflix with you anywhere.</p>
                            </div>
                        </article>
                    </div>
                    
                    <div class="dropdown-container">
                        <header class="clearfix">
                            <h1>How can I cancel?</h1>
                            <figure class="expand">
                                <img src="images/page-images/icons/plus sign.png" alt="" class="plus-sign">
                            </figure>
                        </header>
                        <article>
                            <div class="article-inner">
                          <p>Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.
                          </p>
                            </div>
                        </article>
                    </div>
                    
                    <div class="dropdown-container">
                        <header class="clearfix">
                            <h1>What can I watch on Netflix?</h1>
                            <figure class="expand">
                                <img src="images/page-images/icons/plus sign.png" alt="" class="plus-sign">
                            </figure>
                        </header>
                        <article>
                            <div class="article-inner">
                          <p>Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more. Watch as much as you want, anytime you want.
                          </p>
                            </div>
                        </article>
                    </div>
                    
                    <div class="dropdown-container">
                        <header class="clearfix">
                            <h1>Is Netflix good for kids?</h1>
                            <figure class="expand">
                                <img src="images/page-images/icons/plus sign.png" alt="" class="plus-sign">
                            </figure>
                        </header>
                        <article>
                            <div class="article-inner">
                          <p>The Netflix Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and movies in their own space.
                          </p><br>
                          <p>Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don’t want kids to see.</p>
                            </div>
                        </article>
                    </div>
                    <!-- accordian End-->
                    <div class="page-3-bottom-container">
                    <p>Ready to watch? Enter your email to create or restart your membership.</p>
                     <!-- Newsletter-form -->
                <form action="#" method="POST">
                    <div class="newsletter-form">
                    <div class="input-container">
                     <input type="email" placeholder="Email address" name="email" class="input-info" required>
                    </div>
                    <div class="btn-container">
                     <button type="submit" name="submitTwo" class="newsletter-form-btn" id="box"><span>Get Started <i class="fa fa-angle-right fa-lg"></i></span></button>
                 </div>
                 </div>
                 <!-- Newsletter-form End-->
                </form>
                </div>
                    </div>
                </div>
            </div>
          </section>
        </div>
          <!-- page-three-container End-->

          <!-- page-four-container -->
          <div class="content-box content-five">
          <section class="page-four-container">
            <footer>
            <p class="footer-header"><a href="#">Questions? Contact us.</a></p>
            <div class="footer-grid-container">
                <div class="footer-grid-left">
                <div class="footer-grid">
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Speed Test</a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Cookie Preferences</a></li>
                        <li><a href="#">Legal Notices</a></li>
                    </ul>
                </div>
                </div>
                <div class="footer-grid-right">
                <div class="footer-grid">
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Ways to Watch</a></li>
                        <li><a href="#">Corporate Information</a></li>
                        <li><a href="#">Only on Netflix</a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                    <ul>
                        <li><a href="#">Media Center</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            </div>
            <p class="footer-header-bottom"><a href="#">Netflix USA</a></p>
            </footer>
          </section>
          </div>
          <!-- page-four-container End-->

    </div>
    <!-- Container End-->
    <script>
        var headers = document.querySelectorAll('.dropdown-container header');

for(var i = 0; i < headers.length; i++) {
	headers[i].addEventListener('click', openCurrAccordion);
}

//Use this as the callback if you would like multiple dropdowns to be open
function openAccordion(e) {
	var parent = this.parentElement;
	var article = this.nextElementSibling;
	
	if (!parent.classList.contains('open')) {
		parent.classList.add('open');
		article.style.maxHeight = article.scrollHeight + 'px';
	}
	else {
		parent.classList.remove('open');
		article.style.maxHeight = '0px';
	}
}

//Use this as the callback if you would like no more than one dropdown to be open
function openCurrAccordion(e) {
	for(var i = 0; i < headers.length; i++) {
		var parent = headers[i].parentElement;
		var article = headers[i].nextElementSibling;

		if (this === headers[i] && !parent.classList.contains('open')) {
			parent.classList.add('open');
			article.style.maxHeight = article.scrollHeight + 'px';
		}
		else {
			parent.classList.remove('open');
			article.style.maxHeight = '0px';
		}
	}
}


    const btn = document.querySelector('#box');
    const btnTxt = document.querySelector('#btn-txt');
    const wrapper = document.querySelector('#wrapper');
    const newsLetterFormBtn = document.querySelector('.newsletter-form-btn');
    setTimeout(() => {
    btn.addEventListener("click", function(){
        wrapper.style.display = "block";
        btnTxt.style.visibility = "hidden";
        newsLetterFormBtn.style.background = "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)) #E50914";
    })
}, 5000);
    </script>
</body>
</html>