<!DOCTYPE html>
<html lang="ru">

<?php
$title ='О компании';
include_once('header-page.php');?>

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