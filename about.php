<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>О компании - Aliance Production</title>
</head>

<body>

  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="">О компании</a></li>
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="">Собственные торговые марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Автохимия AP</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="">Новости</a></li>
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="">Контакты</a></li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="mobi-svg-1">
        <use xlink:href="img/sprite.svg#geo"></use>
      </svg>
      <address class="mobile-info-address -p_mob">г. Мосвка, Холодильный пер. 4к1с8</address>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info">
      <svg class="mobi-svg-2">
        <use xlink:href="img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-mail -p_mob">a.dragunov@tdaliance.ru</a>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info">
      <a href="">
        <svg class="mobi-svg-3">
          <use xlink:href="img/sprite.svg#vk" class="mobile-info-vk"></use>
        </svg>
      </a>
      <a href="">
        <svg class="mobi-svg-4">
          <use xlink:href="img/sprite.svg#inst" class="mobile-info-inst"></use>
        </svg>
      </a>
    </div>
    <!-- /.mobile-info -->
  </div>

  <nav class="navbar navbar-light">

    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>

    <a class="navbar-logo" href="./">
      <svg class="logo-svg logo-svg_light">
        <use xlink:href="img/sprite.svg#logo_light"></use>
      </svg>
      <svg class="logo-svg logo-svg_dark">
        <use xlink:href="img/sprite.svg#logo_dark"></use>
      </svg>
    </a>

    <ul class="navbar-nav">
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="">О компании</a></li>
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="">Контрактное производство</a></li>
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="">Собственные торговые марки</a></li>
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="">Новости</a></li>
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="">Контакты</a></li>
    </ul>

    <div class="navbar-phone">
      <svg class="logo-svg">
        <use xlink:href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="navbar-phone-link -bold">+7 (499) 686-10-14</a>
    </div>
    <!-- /.navbar-phone -->
    <button class="navbar-button button -bold" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon">
        <use xlink:href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
    <!-- /.navbar-button -->
  </nav>
  <!-- /.navbar -->

  <section class="single">
    <div class="container">
      <div class="single-wrapper">
          <div class="seporator"></div>
          <h1 class="section-title -h1 single-title">о компании</h1>
          <ul class="single-list">
            <li class="single-item"><a href="./" class="single-link">Главная</a></li>
            <span></span>
            <li class="single-item"><a href="#" class="single-link single-link-activ">О компании</a></li>
          </ul>
        <!--<img src="img/single-logo.png" alt="#" class="single-logo">-->
      </div>
    </div>
  </section>
  <!-- /.single -->

  <section class="features">
    <div class="container">
      <!-- Slider main container -->
      <div class="swiper swiper1">
        <!-- Additional required wrapper -->
        <ul class="swiper-wrapper header-features header-features-ab">
          <!-- Slides -->
          <li class="swiper-slide header-features-item">
            <svg class="logo-svg-1">
              <use xlink:href="img/sprite.svg#Vector"></use>
            </svg>
            <p class="header-features-text -p">Непрерывная работа <br> c 2017 года</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="logo-svg-2">
              <use xlink:href="img/sprite.svg#Vector2"></use>
            </svg>
            <p class="header-features-text -p">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="logo-svg-3">
              <use xlink:href="img/sprite.svg#Vector3"></use>
            </svg>
            <p class="header-features-text -p">Контроль качества на всех этапах</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="logo-svg-4">
              <use xlink:href="img/sprite.svg#Vector4"></use>
            </svg>
            <p class="header-features-text -p">Контроль качества на всех этапах</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="logo-svg-5">
              <use xlink:href="img/sprite.svg#Vector5"></use>
            </svg>
            <p class="header-features-text -p">Оперативное производство</p>
          </li>
        </ul>

        <!-- If we need navigation buttons -->
        <div class="slider-buttons">
          <div class="slider-button-prev slider-button-prev-ab">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-button-next slider-button-next-ab">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
        <!-- /.slider-buttons -->

      </div>
    </div>
  </section>
  <!-- /.features -->


  <?php include_once('footer.php');?>

</body>

</html>