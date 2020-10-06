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

    <div id="aboutUS" class="plantOfTheDay">
        <div class="card-img">
            <img src="images/coverImage.jpg" alt="plantImage" id="plantOfTheDayImage">
        </div>
        <div class="card-content">
            <div>
                <h1 class="card-title">ABOUT US</h1>
                <p class="card-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
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