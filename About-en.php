<?php 
  require "./config/config.php";
  $gallery = $mysql -> query("SELECT * FROM `gallery`");
  $mysql -> close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/aboutStyle.php" />
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/aboutMedia768.php" />
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/aboutMedia375.php" />
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">
    <title>About us</title>
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
      </a><ul class="navbar" id="navbar">
        <li><a href="Artadranq-en.html" class="resp-neu-li">Assortment</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="About-en.php"  class="active">About us</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Masnachyux-en.html">Stores</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Blog-en.php">Blog</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Contact-en.html" >Contact</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>  
        <div class="resp-lang-menu">
          <a href="About.php">Հայ</a>
          <a href="About-en.php" class="active">EN</a>
          <a href="About-ru.php">РУ</a>
        </div>
      </ul>
  
      <div class="language resp-lang">
        <a href="About.php">Հայ</a>
        <a href="About-en.php" class="active">EN</a>
        <a href="About-ru.php">РУ</a>
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
            <a href="Apranq.php" class="sub-menu-a">Metal tile</a>
            <a href="Apranq.php" class="sub-menu-a">Sheet</a>
            <a href="Apranq.php" class="sub-menu-a">Profile</a>
            <a href="Apranq.php" class="sub-menu-a">Corrugated sheet</a>
            <a href="Apranq.php" class="sub-menu-a">Meshes</a>
            <a href="Apranq.php" class="sub-menu-a">Metal products</a>
            <a href="Apranq.php" class="sub-menu-a">Roofing accessories</a>
            <a href="Apranq.php" class="sub-menu-a">Other</a>
        </div>
       <div class="language">
           <a href="About.php">Հայ</a>
           <a href="About-en.php"  class="active">EN</a>
           <a href="About-ru.php">RU</a>
       </div>
        </div>
    <div class="menu_holder">
      <div class="text_center">
        <div class="border_div"></div>
        <p class="credit">About us</p>
      </div>
    </div>
    <div class="container">
      <div class="texts">
          <p class="main">Home
              <img src="./img/arrow.png" class="arrow">About us
          </p>
      </div>
  
      <div class="container-text">
          <div>
              <div class="titleA-about">About us</div>
              <div class="titleB-about">About our company</div>
              <div class="titleC-about">"Semur & Co" is today one of the largest enterprises in the building <span class="resp-about375">materials industry in Armenia. It was founded in 2003.</span>
              </div>
          </div>           
              <div class="content-about-text">
                  <div class="content-about-textA">
                    "Semur & Co" is today one of the largest enterprises in the building materials industry in Armenia. It was founded in 2003 by the Virabyan family.
                      <div class="content-about-textA-br">"Semur & Co" company offers the consumer galvanized, galvanized with polymer (colored) coating, metal tiles with a wide selection of colors and their complementary details.</div>
                      The company is the leader in the RA in the production and sale of plasterboard profiles, galvanized profiles for PVC doors and windows, guides, various types of nets, as well as nails, buckets. 
                  </div>
                  <div class="content-about-textB">
                    At the same time, "Semur & Co" company is engaged in the import and sale of construction products.
                     <div class="content-about-textB-br">
                      The product range is imported from different countries of the world, particularly from South Korea, China, Iran.
                     </div> 
                     <div class="content-about-textC-br">
                      <ul class="contact-about-item">
                        The main goals of our company are
                         <li>• Provide the local market with quality and competitive products </li>  
                          <li>• Providing high-quality construction services </li>
                          <li>• Availability of sales and service centers</li>
                          <li>• Saving time and additional resources </li>
                      </ul>
                     
                     </div>
                    
                  </div>
              </div>
          </div>


          <div class="items-about"> 
              <div class="items-aboutA">
                  <div class="item-aboutA">
                      400+
                  </div>
                  <div class="item-aboutB">
                    Partners
                  </div>
                  <div class="item-aboutC">
                    We have more than partners from all over the world
                  </div>
              </div>
              <div class="items-aboutB">
                  <div class="item-aboutA">
                      600+
                  </div>
                  <div class="item-aboutB">
                    Partners
                  </div>
                  <div class="item-aboutC">
                    We have more than partners from all over the world
                  </div>
              </div>
              <div class="items-aboutC">
                  <div class="item-aboutA">
                      10K
                  </div>
                  <div class="item-aboutB">
                    Partners
                  </div>
                  <div class="item-aboutC">
                    We have more than partners from all over the world
                  </div>
              </div>
          </div>

          <div class="about-items-img">
             <div class="about-item-img-title">Gallery</div>
          <div class="aboutSlide">
            <?php 
              foreach($gallery as $value){
                echo '<div class="slide-item"><img src="./img/'.$value['img'].'" alt="" class="about-item--img'.$value['id'].'"></div>';
              }
            ?>

          </div>
             <div class="pagination">
              <div class="page">0<span class="page-num"></span></div>
              <div class="img-slide-arrow">
                  <img src="img/arrow-left.png" alt="arrow-left" class="img-slide-arrow1 prev">
                  <img src="img/arrow-right.png" alt="arrow-right" class="img-slide-arrow2 next">
              </div>
            </div>
    
          </div>
  </div>

  
  <div class="headphones-hover">
    <div class="headphones">
      <img src="./img/naushnik.png" alt="" />
    </div>
    <div class="hover-icons">
      <div class="hover-icon-watsup button">
        <a href="watsup:+374 33 51 55 55" target="_blank"><img src="./img/wUp.png" alt="" /></a>
      </div>
      <div class="hover-icon-messanger button">
       <a href="https://www.facebook.com/messages/t/100000024311828" target="_blank"><img src="./img/messanger-icon.png" alt="" /></a>
      </div>
      <div class="hover-icon-call button">
      <a href="tel:+374 33 51 55 55" target="_blank"><img src="./img/icon-hover-call.png" alt="tel" /></a>
      </div>
      <div class="hover-icon-mail button">
        <a href="mailto:@semur.am" target="_blank"><img src="./img/icon-hover-mail.png" alt="" /></a>
      </div>
      <div class="hover-icon-headphone button">
        <img src="./img/headphone-hover.png" alt="headphone" target="_blank" />
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="info">
      <img src="./img/logo_semur.png" class="logo-semur" alt="logo" />
      <a href="#">Factory Kotayk state,c.Eghvard,<br /> Yerevanyan Highway, str. 118:
      </a>
      <a href="">033 51 55 55, 033 52 55 55</a>
      <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
      <div class="resp-menu">
        <ul class="resp-menu-ul">
          <li><a href="Aparanq-en.html">Our products</a></li>
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
        <a>Product</a>
        <a>Our products</a>
        <a href="Apranq.php">Metal tile</a>
        <a href="Apranq.php">Sheet</a>
        <a href="Apranq.php">Corrugated sheet</a>
        <a href="Apranq.php">Profile</a>
        <a href="Apranq.php">Meshes</a>
        <a href="Apranq.php">Metal products</a>
        <a href="Apranq.php">Roofing accessories</a>
        <a href="Apranq.php">Other</a>
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
  <script src="./js/script.js"></script>
</body>
</html>