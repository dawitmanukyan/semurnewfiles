<?php 
    require "./config/config.php";
    $info = $mysql -> query("SELECT * FROM `site_info_ru`");
    $mysql -> close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Բլոգ</title>
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
    <a href="index-ru.php" class="logo" id="logo"></a>
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
      <li><a href="Artadranq-ru.html" class="resp-neu-li">Ассортимент</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About-ru.php" >О нас</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux-ru.html">Ветви</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog-ru.php" style="color: #EF4B37">Блог</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact-ru.html" >Контакт</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <div class="resp-lang-menu" style="margin: 0px;">
        <a href="Blog.php">Հայ</a>
        <a href="Blog-en.php">EN</a>
        <a href="Blog-ru.php" style="color: #EF4B37">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="Blog.php" style="color: #fff">Հայ</a>
      <a href="Blog-en.php">EN</a>
      <a href="Blog-ru.php" style="color: #EF4B37">РУ</a>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
      <img class="heart_icon" id="heart_icon" src="./img//heart.png" alt="" />
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
      <a href="tel:+37433515555" class="order-call">Заказать звонок</a>
    </div>
  </div>
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Поиск</div>
      <div class="search-input-wrapper">
        <input class="search-input" type="text" name="" id="search-input" />
        <img id="search_icon-active" src="./img/activ-search.png" alt="" />
     </div>
    <div class="search-icon-close" id="close-search"><img src="./img/search-icon-close.png" alt=""></div>
  </div>
      <div class="second-menu">
          <div class="second-menu-navigation">
              <a href="Apranq-ru.php" class="sub-menu-a">Плитка</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Пластина</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Профиль</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Пронастил</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Сетки</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Изделия из металла</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Детали, завершающие крышу</a>
              <a href="Apranq-ru.php" class="sub-menu-a">Другой</a>
          </div>
          <div class="language">
              <a href="Blog.php" style="color: #fff">Հայ</a>
              <a href="Blog-en.php">EN</a>
              <a href="Blog-ru.php" style="color: #EF4B37">РУ</a>
          </div>
      </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Блог</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
            <p class="main">Главная
                <img src="./img/arrow.png" class="arrow"> Semur Блог
            </p>
        </div>
        <div class="blog-title">
            <div class="blog-title1">Блог</div>
            <div class="blog-title2">Новости и статьи</div>
            <div class="blog-title3">Последние новости на нашем сайте</div>
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
          <a href="#"
            >Фабрика, Котайкский марз, г. Егвард,<br />
            Ереванян шоссе, ул. 118:
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
              <li><a href="Aparanq-ru.html">Товар</a></li>
              <li><a href="About-ru.php">О нас</a></li>
              <li><a href="Masnachyux-ru.html">Ветви</a></li>
              <li><a href="Contact-ru.html">Контакт</a></li>
            </ul>
          </div>
          <div class="resp-hr"></div>
  
          <p class="copy">Семур анд Ко © 2022</p>
          <p class="copy1">Все права защищены.</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Товар</a>
            <a href="Apranq-ru.php">Плитка</a>
            <a href="Apranq-ru.php">Пластина</a>
            <a href="Apranq-ru.php">Пронастил</a>
            <a href="Apranq-ru.php">Профиль</a>
            <a href="Apranq-ru.php">Сетки</a>
            <a href="Apranq-ru.php">Изделия из металла</a>
            <a href="Apranq-ru.php">Детали, завершающие крышу</a>
            <a href="Apranq-ru.php">Другой</a>
          </div>
          <div class="footer-items footer-info">
            <a>Ավելին</a>
           <a href="About-ru.php" class="about">О нас</a>          
            <a  href="Masnachyux-ru.html" class="masnachyux">Ветви</a>
            <a href="Blog-ru.php">Semur блог</a>
            <a href="#">Политика конфиденциальности</a>
            <a href="Hashvetvutyun.php">Отчет</a>
            <a href="Aparik-ru.html"> Продажа в кредит</a>
            <a href="Contact-ru.html">Контакт </a>
          </div>
          <div class="resp-footer-line"></div>
  
          <div class="footer-items footer-img">
            <div class="social">
              <p>Подписывайтесь на нас</p>
              <a target="_blank" href="https://www.instagram.com/semur.co/">
                <img src="./img/Instagram Icon.png" alt="Instagram" />
              </a>
              <a
                target="_blank"
                href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/"
              >
                <img src="./img/Facebook Icon.png" alt="Facebook" />
              </a>
              <a
                target="_blank"
                href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg"
              >
                <img src="./img/Youtube Icon.png" alt="Youtube" />
              </a>
            </div>
          </div>
        </div>
      </div>
    <script src="js/Blog.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/slide.js"></script>
    <script src="./js/style.js"></script>
</body>
</html>
