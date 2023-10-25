<?php
  require "../aksi/koneksi.php";
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css" integrity="sha512-rOTVxSYNb4+/vo9pLIcNAv9yQVpC8DNcFDWPoc+gTv9SLu5H8W0Dn7QA4ffLHKA0wysdo6C5iqc+2LEO1miAow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" integrity="sha512-P9pgMgcSNlLb4Z2WAB2sH5KBKGnBfyJnq+bhcfLCFusrRc4XdXrhfDluBl/usq75NF5gTDIMcwI1GaG5gju+Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="nav-items">
            <div class="container">
                <div class="box-navbar">
                    <div class="logo">
                        <h1 style="font-family: mouly, 'Poppins';">napsly.</h1>
                    </div>
                    <ul class="menu">
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#artist">Artist & Albums</a></li>
                        <li><a href="../views/form.php">Add Yours</a></li>
                        <li><a href="../views/about.php">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <div class="icon">
                            <i class="fas fa-moon" id="dark-mode" style="cursor: pointer;"></i>
                        </div>
                    </ul>
                    <?php
                            if(isset($_SESSION['username'])) {
                        ?>
                            <a href="logout.php" class="button">Logout</a>
                        <?php
                            }
                            elseif(!isset($_SESSION['username'])){
                        ?>
                            <a href="login.php" class="button">Login</a>
                        <?php
                            }
                    ?>
                </div>
            </div>
        </div>

    <!-- Landing Page -->
        <div class="hero" id="hero">
            <img src="../assets/landing.jpg" alt="">
            <div class="container">
                <div class="box-hero">
                    <h1>Welcome.</h1>
                <div class="tagline">
                    <p>stories heard, feelings made : music albums.</p>
                </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <hr> <br>
    <div>
        <h1 id="artist" style="text-align: center; background-color: #5A658B; color: white;">Album & Artist</h1><br>
        <div class = "card-container">
            <div class = "card">
                <img src="../assets/ts.jpg" alt="">
                <div class="card-content" style="background-color: #EBBED3;">
                    <h3 style="color: #8C4F66;">Taylor Swift</h3>
                    <p><iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1NAmidJlEaVgA3MpcPFYGq?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></p>
                </div>
            </div>
            <div class = "card">
                <img src="../assets/tn.jpg" alt="">
                <div class="card-content" style="background-color: #515151;">
                    <h3>The Neighbourhood</h3>
                    <p><iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/18iFxjZugvKhuNNMbLjZJF?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></p>
                </div>
            </div>
            <div class = "card">
                <img src="../assets/ldr.jpg" alt="">
                <div class="card-content" style="background-color: #85A7BA;">
                    <h3 style="color: #731803;">Lana Del Rey</h3>
                    <p><iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7xYiTrbTL57QO0bb4hXIKo?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></p>
                </div>
            </div>
            <div class = "card">
                <img src="../assets/d6.jpg" alt="">
                <div class="card-content" style="background-color: #A47F45;">
                    <h3 style="color: #6E4823;">Day6</h3>
                    <p><iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5ZQuMOStcP5jMmGiI1Slmj?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></p>
                </div>
            </div>
            <div class = "card">
                <img src="../assets/tr.jpg" alt="">
                <div class="card-content" style="background-color: #5B5B5B;">
                    <h3 style="color: #121D27;">The Rose</h3>
                    <p><iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1OWmGjBN7jiZK6OCgyxGTV?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></iframe></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <hr> <br>
    <div class="container" style="border-radius: 5px;">
        <h2 id="contact" style="text-align: center; background-color: #85A7BA; color: white;">Contact</h2><br>
        <form action="">
      
          <label for="fname" style="color: #5A658B;">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name...">
      
          <label for="lname" style="color: #5A658B;">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name...">
      
          <label for="subject" style="color: #5A658B;">Message</label>
          <input type="text" id="subject" name="subject" placeholder="Write your message here...">
      
          <input type="submit" value="Submit">
      
        </form><br>
      </div>


    <!-- Footer -->
    <footer style="background-color: #846578;">
            <p style="color: white; text-align: center;">&copy; nap's property || 2023</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>