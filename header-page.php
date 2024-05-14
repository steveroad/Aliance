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
  <title><?php echo $title; ?> - Aliance Production</title>
  </head>
<body>

<div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="/about.php">О компании</a></li>
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="/contracts.php">Контрактное производство</a>
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
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="/mark.php">Собственные торговые марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link -p_mob" href="#">Автохимия AP</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-item"><a class="mobile-menu-link -bold_mob" href="/news.php">Новости</a></li>
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
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="/about.php">О компании</a></li>
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="/contracts.php">Контрактное производство</a></li>
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="/mark.php">Собственные торговые марки</a></li>
      <li class="navbar-nav-item"><a class="navbar-nav-link -p" href="/news.php">Новости</a></li>
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

  <section class="single <?php echo $single_bg; ?>">
    <div class="container">
      <div class="single-wrapper">
          <div class="seporator"></div>
          <h1 class="section-title -h1 single-title"><?php echo $title; ?></h1>
          <ul class="single-list">
            <li class="single-item"><a href="./" class="single-link <?php echo $single_text; ?>">Главная</a></li>
            <span></span>
            <li class="single-item"><a href="#" class="single-link single-link-activ <?php echo $single_text; ?>"><?php echo $title; ?></a></li>
          </ul>
          <?php echo $logo_head; ?>
      </div>
    </div>
  </section>
  <!-- /.single -->