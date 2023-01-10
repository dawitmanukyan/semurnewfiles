<?php 
    require "./config/config.php";
    $info = $mysql -> query("SELECT * FROM `site_info_en`");
    $mysql -> close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./css/blogStyle.php" />
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/blogMedia768.css">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="stylesheet" href="./css/blogMedia375.php">
    <link rel="icon" href="./img/Logo.png">
</head>

<body>

<div class="header" id="header">
    <a href="index-en.php" class="logo" id="logo"></a>
    <a
      href="#"
      class="toggle-button"
      id="toggle-button"
      onclick="toggleNav(this)"
    >
      <span class="bar1"></span>
      <span class="bar2"></span>
      <span class="bar3"></span>
    </a>      <ul class="navbar" id="navbar">
      <li><a href="Artadranq-en.html" class="resp-neu-li">Assortment</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About-en.php" >About us</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux-en.html">Branches</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog-en.php" style="color: #EF4B37">Blog</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact-en.html" >Contact</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <!-- <li><a href="Hashvich-ru.html">Онлайн калькулятор</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li> -->

      <div class="resp-lang-menu" style="margin: 0px;">
        <a href="Blog.php">Հայ</a>
        <a href="Blog-en.php" style="color: #EF4B37">EN</a>
        <a href="Blog-ru.php">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="Blog.php" style="color: #fff">Հայ</a>
      <a href="Blog-en.php" style="color: #EF4B37">EN</a>
      <a href="Blog-ru.php">РУ</a>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
      <img class="heart_icon" id="heart_icon" src="./img//heart.png" alt="" />
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
      <a href="tel:+37433515555" class="order-call">Order a call</a>
    </div>
  </div>
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Search</div>
      <div class="search-input-wrapper">
        <input class="search-input" type="text" name="" id="search-input" />
        <img id="search_icon-active" src="./img/activ-search.png" alt="" />
     </div>
    <div class="search-icon-close" id="close-search"><img src="./img/search-icon-close.png" alt=""></div>
  </div>
      <div class="second-menu">
          <div class="second-menu-navigation">
              <a href="Apranq-en.php" class="sub-menu-a">Tile</a>
              <a href="Apranq-en.php" class="sub-menu-a">Plate</a>
              <a href="Apranq-en.php" class="sub-menu-a">Profile</a>
              <a href="Apranq-en.php" class="sub-menu-a">Decking</a>
              <a href="Apranq-en.php" class="sub-menu-a">Grids</a>
              <a href="Apranq-en.php" class="sub-menu-a">Metal products</a>
              <a href="Apranq-en.php" class="sub-menu-a">Details completing the roof</a>
              <a href="Apranq-en.php" class="sub-menu-a">Another</a>
          </div>
          <div class="language">
              <a href="Blog.php" style="color: #fff">Հայ</a>
              <a href="Blog-en.php" style="color: #EF4B37">EN</a>
              <a href="Blog-ru.php">РУ</a>
          </div>
      </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Blog</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
            <p class="main">Home
                <img src="./img/arrow.png" class="arrow"> Semur Blog
            </p>
        </div>
        <div class="blog-title">
            <div class="blog-title1">Blog</div>
            <div class="blog-title2">News and articles</div>
            <div class="blog-title3">Latest news on our website</div>
        </div>
        <div class="blog-container">
            <div class="blogs">
                <?php 
                    foreach ($info as $value) {
                        echo '<div class="blog-item">
                        <div class="item-img">
                            <img src="./img/blog/'.$value['img'].'" alt="1pic"/>
                        </div>
                        <div class="item-info">
                            <h3 class="item-title">'.$value['title'].'<img src="./img/arrow-up-right.png" /></h3>
                            <p class="item-text">'.$value['text'].'</p>
                            <div class="blog-button">
                            </div>
                        </div>
                    </div> ';
                    }
                
                ?>  
          </div>
       </div>
    
 
     <div class="pagination">
        <li><a class="page-link previous-page disable"><img src="img/prev.png"></a></li>
        <li class="page-item current-page  active"><a class="page-link">1</li>
        <li class="page-item dots"><a class="page-link" href="#">...</li>
        <li class="page-item current-page"><a class="page-link">5</li>
        <li class="page-item current-page"><a class="page-link" >6</li>
        <li class="page-item dots"><a class="page-link"  href="#">...</li>
        <li class="page-item current-page"><a class="page-link" >7</li>
        <li class="page-item current-page"><a class="page-link" >8</li>
        <li class="page-item dots"><a class="page-link"  href="#">...</li>
        <li class="page-item current-page"><a class="page-link" >20</li>
       <li><a class="page-link next-page"><!-- <img src="img/next.png"> --></a></li>
    </div>

   </div>
    <div class="headphones">
        <img src="./img/naushnik.png" alt="">
    </div>
    <div class="footer">
        <div class="info">
          <img src="./img/logo_semur.png" class="logo-semur" alt="logo" />
          <a href="#">Factory,Kotayq state,C.Eghvard<br /> Yerevanyan Highway, str. 118:
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
                <li><a href="Apranq-en.php">Our products</a></li>
                <li><a href="About-en.php">About us</a></li>
                <li><a href="Masnachyux-en.html">Stores</a></li>
                <li><a href="Contact-en.html">Contacts</a></li>
              </ul>

              <hr class="resp-hr" />
          </div>

          <p class="copy">Semur & Co. © 2022</p>
          <p class="copy1">All rights reserved.</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Our products</a>
            <a href="Apranq-en.php">Metal tile</a>
            <a href="Apranq-en.php">Sheet</a>
            <a href="Apranq-en.php">Corrugated sheet</a>
            <a href="Apranq-en.php">Profile</a>
            <a href="Apranq-en.php">Meshes</a>
            <a href="Apranq-en.php">Metal products</a>
            <a href="Apranq-en.php">Roofing accessories</a>
            <a href="Apranq-en.php">Other</a>
          </div>
          <div class="footer-items footer-info">
            <a>More</a>
            <a href="About-en.php">About us</a>
            <a href="Masnachyux-en.html">Stores</a>
            <a href="Blog-en.php">Blog</a>
            <a href="">Privacy Policy</a>
            <a href="Hashvetvutyun.php">Report</a>
            <a href="Aparik-en.html"> Credit sale</a>
            <a href="Contact-en.html">Contact </a>
          </div>
          <div class="footer-items footer-img">
            <div class="social">
              <p>Follow us</p>
              <a target="_blank" href="https://www.instagram.com/semur.co/">
                <img src="./img/Instagram Icon.png" alt="Instagram" />
              </a>
              <a target="_blank" href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/">
                <img src="./img/Facebook Icon.png" alt="Facebook" />
              </a>
              <a target="_blank" href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg">
                <img src="./img/Youtube Icon.png" alt="Youtube" />
              </a>
            </div>
          </div>
        </div>
    </div>
    <script src="./js/style.js"></script>
    <script src="js/Contact.js"></script>
    <script src="js/Blog.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/slide.js"></script>
    <script src="./js/style.js"></script>
</body>
</html>
