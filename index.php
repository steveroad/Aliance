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
  <title>Aliance Production</title>
</head>

<body class="front-page">
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

  <nav class="navbar">

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

  <header class="header header-image">

    <div class="container">
      <div class="header-content">
        <div class="seporator"></div>
        <!-- /.seporator -->
        <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
        <p class="header-text -p">Высокий уровень вовлечения представителей целевой аудитории является четким
          доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа
          существующих паттернов поведения.</p>
        <div class="header-button button -bold" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</div>
      </div>
      <!-- /.header-content -->

      <!-- Slider main container -->
      <div class="swiper swiper1">
        <!-- Additional required wrapper -->
        <ul class="swiper-wrapper header-features">
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
          <div class="slider-button-prev">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-button-next">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
        <!-- /.slider-buttons -->

      </div>

      <!--<ul class="header-features">
        <li class="header-features-item">
          <svg class="logo-svg-1">
            <use xlink:href="img/sprite.svg#Vector"></use>
          </svg>
          <p class="header-features-text -p">Непрерывная работа <br> c 2017 года</p>
        </li>
        <li class="header-features-item">
          <svg class="logo-svg-2">
            <use xlink:href="img/sprite.svg#Vector2"></use>
          </svg>
          <p class="header-features-text -p">Вся продукция сертифицирована</p>
        </li>
        <li class="header-features-item">
          <svg class="logo-svg-3">
            <use xlink:href="img/sprite.svg#Vector3"></use>
          </svg>
          <p class="header-features-text -p">Контроль качества на всех этапах</p>
        </li>
        <li class="header-features-item">
          <svg class="logo-svg-4">
            <use xlink:href="img/sprite.svg#Vector4"></use>
          </svg>
          <p class="header-features-text -p">Контроль качества на всех этапах</p>
        </li>
        <li class="header-features-item">
          <svg class="logo-svg-5">
            <use xlink:href="img/sprite.svg#Vector5"></use>
          </svg>
          <p class="header-features-text -p">Оперативное производство</p>
        </li>
      </ul>-->
      <!-- /.header-features -->
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->

  <section class="section section-light">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title -h2">схема работы</h2>

      <!-- Slider main container -->
      <div class="swiper swiper2">
        <!-- Additional required wrapper -->
        <ol class="swiper-wrapper steps">
          <!-- Slides -->
          <li class="swiper-slide steps-item"><span class="steps-num">01</span>
            <h3 class="steps-title -h3">Знакомство</h3>
            <p class="steps-text -p">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
            <a href="#" class="button-link -bold">Оставить заявку</a>
          </li>
          <li class="swiper-slide steps-item"><span class="steps-num">02</span>
            <h3 class="steps-title -h3">Заключение <br> договора</h3>
            <p class="steps-text -p">Лишь интерактивные прототипы призваны к ответу.</p>
          </li>
          <li class="swiper-slide steps-item"><span class="steps-num">03</span>
            <h3 class="steps-title -h3">Производство</h3>
            <p class="steps-text -p">А также стремящиеся вытеснить традиционное производство, нанотехнологии
              функционально
              разнесены на независимые элементы.</p>
          </li>
          <li class="swiper-slide steps-item"><span class="steps-num">04</span>
            <h3 class="steps-title -h3">Доставка</h3>
            <p class="steps-text -p">В частности, экономическая повестка сегодняшнего дня говорит о возможностях
              приоритизации разума над эмоциями.</p>
          </li>
        </ol>

        <!-- If we need navigation buttons -->
        <div class="steps-buttons primary-buttons-wrapper">
          <div class="steps-button-prev primary-button-prev">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="steps-button-next primary-button-next">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>

      </div>

      <!--<ol class="steps">
        <li class="steps-item">
          <span class="steps-num">01</span>
          <h3 class="steps-title -h3">Знакомство</h3>
          <p class="steps-text -p">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
            воздействия.</p>
          <a href="#" class="steps-link -bold">Оставить заявку</a>
        </li>

        <li class="steps-item">
          <span class="steps-num">02</span>
          <h3 class="steps-title -h3">Заключение <br> договора</h3>
          <p class="steps-text -p">Лишь интерактивные прототипы призваны к ответу.</p>
        </li>

        <li class="steps-item">
          <span class="steps-num">03</span>
          <h3 class="steps-title -h3">Производство</h3>
          <p class="steps-text -p">А также стремящиеся вытеснить традиционное производство, нанотехнологии
            функционально
            разнесены на независимые элементы.</p>
        </li>

        <li class="steps-item">
          <span class="steps-num">04</span>
          <h3 class="steps-title -h3">Доставка</h3>
          <p class="steps-text -p">В частности, экономическая повестка сегодняшнего дня говорит о возможностях
            приоритизации разума над эмоциями.</p>
        </li>
      </ol>-->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section section-light -->

  <section class="section production">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title -h2">Контрактное производство</h2>
      <div class="cards">
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title -h3">Автомобильная химия</h3>
            <p class="card-text -p">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <img src="img/autohim.png" alt="autohim" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title -h3">Бытовая химия</h3>
            <p class="card-text -p">А также стремящиеся вытеснить традиционное производство, нанотехнологии
              функционально
              разнесены на независимые элементы.</p>
          </div>
          <img src="img/buthim.png" alt="buthim" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title -h3">Дезинфицирующие средства</h3>
            <p class="card-text -p">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <img src="img/dezsr.png" alt="dezsr" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title -h3">Пищевые аэрозоли</h3>
            <p class="card-text -p">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.</p>
          </div>
          <img src="img/dezsr.png" alt="dezsr" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title -h3">Косметическая продукция</h3>
            <p class="card-text -p">Лишь интерактивные прототипы призваны к ответу.</p>
          </div>
          <img src="img/autohim.png" alt="autohim" class="card-image">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title -h3">Краски аэрозольные</h3>
            <p class="card-text -p">А также стремящиеся вытеснить традиционное производство, нанотехнологии
              функционально
              разнесены на независимые элементы.</p>
          </div>
          <img src="img/buthim.png" alt="buthim" class="card-image">
        </a>
      </div>
      <!-- /.cards -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section production -->

  <?php $block_title ="Собственные торговые марки"; include_once('./template/trademarks_block.php')?>

  <section class="section founder">
    <img src="img/founder.jpg" alt="founder" class="founder-photo">
    <div class="container">
      <div class="founder-content-wrapper">
        <div class="founder-content">
          <div class="seporator"></div>
          <h2 class="section-title -h2">Отношение к делу и к клиентам</h2>
          <p class="founder-text -p">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика
            показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий
            активизации. Внезапно, независимые государства, которые представляют собой яркий пример
            континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых
            исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную
            потребность системы массового участия. <br><br>
            А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
            степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в
            значительной степени обусловливает важность дальнейших направлений развития.</p>
          <a href="#" class="button-link -bold">Подробнее о компании</a>
        </div>
        <!-- /.founder-content -->
      </div>
      <!-- /.founder-content-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section founder -->

  <section class="section clients">
    <div class="container">
      <div class="seporator"></div>
      <div class="clients-wrapper">
        <div class="clients-content">
          <h2 class="section-title -h2">Производим аэрозольную продукцию для разных сфер</h2>
          <ul class="clients-list">
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#him"></use>
              </svg>
              Химические производства
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#car"></use>
              </svg>
              Автомойки
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#eat"></use>
              </svg>
              Пищевая продукция
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#shp"></use>
              </svg>
              Лаки и краски
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#hand"></use>
              </svg>
              Косметические средства
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#car2"></use>
              </svg>
              Автомобильная косметика
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#body"></use>
              </svg>
              Косметика по уходу за одеждой
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#foot"></use>
              </svg>
              Косметика по уходу за обувью
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#walk"></use>
              </svg>
              Строительные материалы
            </li>
            <li class="clients-list-item -p">
              <svg width="24" height="24" class="clients-item-svg">
                <use xlink:href="img/sprite.svg#tt"></use>
              </svg>
              И многих других
            </li>
          </ul>
        </div>
        <!-- /.clients-content -->
        <div class="clients-logo-list">
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
          <a href="#" class="clients-logo-item"><img src="img/client_c.png" alt="burger_king" class="clients-logo"></a>
        </div>
        <!-- /.clients-logo-list -->
      </div>
      <!-- /.clients-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section clients -->

  <section class="section blog">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title -h2">Блог экспертов в области производства</h2>

      <!-- Slider main container -->
      <div class="swiper blog-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/blog1.jpg" alt="" class="blog-card-image">
            <h3 class="blog-card-title -h3">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text -p">Действия представителей оппозиции, превозмогая сложившуюся непростую
              экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/blog2.jpg" alt="" class="blog-card-image">
            <h3 class="blog-card-title -h3">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text -p">Сложно сказать, почему элементы политического процесса функционально разнесены
              на
              независимые элементы. Безусловно, высокотехнологичная...</p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/blog1.jpg" alt="" class="blog-card-image">
            <h3 class="blog-card-title -h3">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text -p">Действия представителей оппозиции, превозмогая сложившуюся непростую
              экономическую
              ситуацию, в равной степени предоставлены...</p>
          </a>
        </div>

        <div class="blog-slider-footer">
          <a href="#" class="button-link -bold">Весь блог</a>
          <!-- If we need navigation buttons -->
          <div class="blog-buttons primary-buttons-wrapper">
            <div class="blog-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use xlink:href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="blog-button-next primary-button-next">
              <svg width="36" height="24">
                <use xlink:href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- /.blog-slider-footer -->
      </div>
    </div>
  </section>
  <!-- /.section blog -->

<?php include_once('footer.php');?>
</body>

</html>