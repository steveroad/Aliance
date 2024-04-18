<section class="cta">
    <div class="bg-grey section-cta">
      <img src="img/cta.png" alt="call to action" class="cta-image">
      <div class="cta-form-wrapper container">
        <form action="handler.php" method="POST" class="cta-form">
          <h2 class="section-title -h2 cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text -p">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!</p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input id="user-name" type="text" name="username" class="input" placeholder=" " autocomplete="off">
              <label for="user-name" class="input-group-label -p">Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group">
              <input id="user-phone" type="tel" name="userphone" class="input" placeholder=" " autocomplete="off">
              <label for="user-phone" class="input-group-label -p">Номер телефона</label>
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.input-group-wrapper -->
          <div class="cta-form-footer">
            <button type="submit" class="button cta-button">Отправить заявку</button>
            <div class="notify">
              <svg class="notify-svg">
                <use xlink:href="img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                конфиденциальность информации!</p>
            </div>
          </div>
          <!-- /.cta-form-footer -->
        </form>
        <!-- /.cta-form -->
      </div>
      <!-- /.cta-form-wrapper -->
    </div>
    <!-- /.bg-grey -->
  </section>
  <!-- /.cra -->

  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <svg class="logo-svg footer-logo">
          <use xlink:href="img/sprite.svg#logo_dark"></use>
        </svg>
        <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
        <div class="footer-info">
          <svg class="mobi-svg-1">
            <use xlink:href="img/sprite.svg#geo"></use>
          </svg>
          <address class="footer-info-address -p">г. Мосвка, Холодильный пер. 4к1с8</address>
        </div>
        <!-- /.footer-info -->
        <div class="footer-info">
          <svg class="mobi-svg-2">
            <use xlink:href="img/sprite.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-mail -p">a.dragunov@tdaliance.ru</a>
        </div>
        <!-- /.footer-info -->
        <div class="footer-info">
          <a href="#">
            <svg class="mobi-svg-3">
              <use xlink:href="img/sprite.svg#vk" class="footer-info-vk"></use>
            </svg>
          </a>
          <a href="#">
            <svg class="mobi-svg-4">
              <use xlink:href="img/sprite.svg#inst" class="footer-info-inst"></use>
            </svg>
          </a>
        </div>
        <!-- /.footer-info -->
      </div>
      <!-- /.footer-top -->
    </div>
    <!-- /.container -->
    <div class="footer-seporator"></div>
    <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title -bold">Контрактное производство</h2>
          <ul class="footer-menu-list footer-column-2">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link -p">Автомобильная химия</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link -p">Бытовая химия</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link -p">Дезинфицирующие средства</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link -p">Пищевые аэрозоли</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link -p">Косметическая продукция</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link -p">Краски аэрозольные</a></li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title -bold">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link -p">Автохимия AG-Tech</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link -p">Автохимия AP</a></li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

        <div class="footer-menu-wrapper">
          <ul class="footer-menu-list">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-mennu-link-bold -bold">О
                компании</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-mennu-link-bold -bold">Новости</a>
            </li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-mennu-link-bold -bold">Контакты</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

      </div>
      <!-- /.footer-bottom -->
    </div>
    <!-- /.container -->
    <div class="footer-seporator"></div>
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="footer-copyright">&copy; <?php echo date('Y'); ?> «Aliance Production». Все права защищены.</p>
          <a href="#" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <!-- /.footer-legal -->
        <div class="footer-author">
          <span class="footer-made-in">Сделано в</span>
          <svg class="footer-author-svg">
            <use xlink:href="img/sprite.svg#ruso" class="footer-info-inst"></use>
          </svg>
        </div>
        <!-- /.footer-autor -->
      </div>
      <!-- /.footer-wrapper -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- /.footer -->

  <div class="modal">
    <div class="modal-dialog">
      <h2 class="modal-title">Есть вопросы?</h2>
      <a href="" class="modal-close" data-toggle="modal">
        <svg class="modal-close-svg">
          <use xlink:href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <p class="modal-text -p">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
        интересующие
        вопросы и поможем даже в самых сложных случаях!</p>
      <form action="#" class="modal-form">
        <div class="input-group-wrapper input-group-vertical">
          <div class="input-group">
            <input id="modal-user-name" type="text" class="input modal-input" placeholder=" " autocomplete="off">
            <label for="modal-user-name" class="input-group-label modal-input-label -p">Имя</label>
          </div>
          <!-- /.input-group -->
          <div class="input-group">
            <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" " autocomplete="off">
            <label for="modal-user-phone" class="input-group-label modal-input-label -p">Номер телефона</label>
          </div>
          <!-- /.input-group -->
        </div>
        <!-- /.input-group-wrapper -->
        <div class="modal-form-footer">
          <button type="submit" class="button modal-button">Отправить заявку</button>
          <div class="notify">
            <svg class="notify-svg">
              <use xlink:href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
              конфиденциальность информации!</p>
          </div>
        </div>
        <!-- /.modal-form-footer -->
      </form>
      <!-- /.modal-form -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>