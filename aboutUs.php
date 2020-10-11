<?php
// Start the session
session_start();

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantanomy</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    
    <header>
            
        <img src="images/logo.svg" alt="logo" id="logoImage">
        <nav class="navbar">
            <span class="open-slide">
                 <a href="#" onclick="openSlideMenu()">
                    <svg width="30" height="30">
                        <path d="M0,5 30,5" stroke="#33bb55" stroke-width="5" />
                         <path d="M0,14 30,14" stroke="#33bb55" stroke-width="5" />
                         <path d="M0,23 30,23" stroke="#33bb55" stroke-width="5" />
                     </svg>
                 </a>
            </span>
            <ul class="navbar-nav">
                <li><a href="#">About Us</a></li>
                <li><a href="wishlist.php">Wishlist</a></li>
                <?php
                    if (isset($_SESSION['user'])){
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }else{
                        echo '<li><a href="login.php">Your Account</a></li>';
                    }
                ?>
                <li><a href="index.php">Home</a></li>
                
                
            </ul>
        </nav>
    </header>

    


    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
        <a href="index.php">Home</a>
        <?php
            if (isset($_SESSION['user'])){
                echo '<a href="logout.php">Logout</a>';
            }else{
                echo '<a href="login.php">Your Account</a>';
            }
        ?>
        <a href="wishlist.php">Wishlist</a>
        <a href="#">About Us</a>
    </div>

    <script>
        function openSlideMenu(){
            document.getElementById('side-menu').style.width = '250px';
            document.getElementById('main').style.marginLeft = '250px';
        }

        function closeSlideMenu(){
            document.getElementById('side-menu').style.width = '0px';
            document.getElementById('main').style.marginLeft = '0px';
        }


    </script>

    <div id="main">

    <section id= "showcase">
        <div class="container">
            <h1>Plantanomy</h1>
        </div>
    </section>

    <section id= "searchYourPlant">
        <div class="container">
            <h1>Seach Your Plant</h1>
            <form action="search.php" method="post">
                <input type="search" name="searchPlantName" id="searchPlantName" placeholder="Enter Plant Name">
                <button type="submit" class="button1">Search</button>
            </form>
        </div>
    </section>
    
    <hr class="searchDivider">

    <div class="aboutUS">

        <div class="about-content-container"> 
            <div class="about-content">
                <div>
                    <div class="about-img">
                        <img src="images/mission.png" alt="Spring flower">
                    </div>
                    <h1 class="card-title">Our Mission</h1>
                    <p class="card-info">We at Plantanomy provide our website visitors with a premier collection of plant encyclopedia with entries from credible and published sources.
                        At Plantanomy, you get free access to over 100 reference entries from sources you can site. Plus, you get topic related summaries, pictures, articles, etc. from around the world. Plantanomy takes great care in constantly uploading our content with the latest from our partners.
                    </p>
                </div>
            </div>
            <div class="about-content">
                <div>
                    <div class="about-img">
                        <img src="images/team.png" alt="Spring flower">
                    </div>
                    <h1 class="card-title">Our Team</h1>
                    <p class="card-info">We are a team created as part of Prof. Debarati Ghoshal’s Internet Programming class at Vidyalankar Institute of Technology. Our team was originally created as part of a first semester project in which we were supposed to create a Motion Sensor Burglar Alarm in our Workshop class.
                        Since that project, we have taken on many more endeavors, such as learning HTML, CSS, Javascript and php in order to create web pages and websites of our own instead of relying on other applications to see our creative visions through.
                    </p>
                </div>
            </div>
        </div>
       

        <div class="social">
            <h1>Contact Us</h1>
            <a href="#">
                <img class="social-icons" src="images/gmail.png">
            </a>
            <a href="#">
                <img class="social-icons" src="images/fb.png">
            </a>
            <a href="#">
                <img class="social-icons" src="images/insta.png">
            </a>
            <a href="#">
                <img class="social-icons" src="images/twitter.png">
            </a>                        
        </div>  

    </div>

        
    <hr class="footerDivider">

    
    <footer class="mainFooter">

        <div class="footer-content">
            <div class="footer-section-about">
                <img src="images/logo.svg" alt="logo" id="logoImage">
                <h2>Plantanomy</h2>
                <p>Plantanomy is a perfect heavan for all those plant and gardening lovers out there. You can all the information about any plant you want to search about. Also by signing up you can get acces to your personalized wishlist to keep all your favourites together.</p>
                <p>info@Plantanomy.com</p>
            </div>
        </div>

        <div class="footerBottom">
            &copy; <a href="#" class="footer-cta" title="Plantanomy">Plantanomy.com</a> | Designed with HTLM5 & CSS
        </div>
       
    </footer>
</body>
</html>