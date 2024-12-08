<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Новая жизнь | Главная страница</title>
  <link rel="stylesheet" href="library/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles/setings.css">
  <link rel="stylesheet" href="styles/pages/index.css">

  
</head>

<body>
  <i class="fa fa-camera-retro"></i> fa-camera-retro
  <header class="header">
    <div class="container">
      <a href="index.html" class="logo">
        New Live
      </a>
      <ul>
        <li><a href="poisk.php">Поиск</a></li>
        <li><a href="register.php">Регистрация</a></li>
        <li><a href="index.html">Личный кабинет</a></li>
        <li><a href="index.html">Добавить</a></li>
        <li><a href="index.html">Отзывы</a></li>
        <?php 
            if (array_key_exists ('token', $_SESSION)) {
               echo "<li> <a href ='api/logoutUser.php' class='reviews'> Выход</a></li>";
            }
             ?>
      </ul>
    </div>
  </header>
  <main>
    <section class="hero">
      <div class="container">
        <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="img/enot1.jpg" alt="">
              <small>Енот</small>
              <p>Пушной зверь с тёмно-жёлтым ценным мехом, а также самый мех его.</p>
              <a href="">Подробнее</a>
            </div>

            <div class="swiper-slide">
              <img src="img/enot1.jpg" alt="">
              <small>Енот</small>
              <p>Пушной зверь с тёмно-жёлтым ценным мехом, а также самый мех его.</p>
              <a href="">Подробнее</a>
            </div>

            <div class="swiper-slide">
              <img src="img/enot1.jpg" alt="">
              <small>Енот</small>
              <p>Пушной зверь с тёмно-жёлтым ценным мехом, а также самый мех его.</p>
              <a href="">Подробнее</a>
            </div>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section class="short-search">
      <div class="container">
        <form>
          <label for="type-animal">Вид животного</label>
          <select name="type-animal" id="type-animal">
            <option value="cat">Кот</option>
            <option value="dog">Собака</option>
          </select>
          <button type="submit">Поиск</button>
        </form>
      </div>
    </section>
    <section class="facts">
      <div class="container">
        <h2>Факты</h2>
        <ul>
          <li>
            <h3><i class="fa fa-fax" aria-hidden="true"></i>  Помогли найти более 500 животных</h3>
            </li>
          <li>
            <h3><i class="fa fa-linode" aria-hidden="true"></i> Более трех лет способствуем возвращению питомцев к хозяевам.</h3>
            </li>
          <li>
           <h3><i class="fa fa-usd" aria-hidden="true"></i> Все услуги оказываются бесплатно.</h3>
          </li>
        </ul>
      </div>
    </section>
    <section class="search">
      <div class="container">
        <div class="search_iten">
          <form>
            <label for="place">Район</label>
            <select name="place" id="place">
              <option value="0">Правый берег</option>
              <option value="1">Левый берег</option>
            </select>
            <label for="animal">Вид животного</label>
            <select name="animal" id="animal">
              <option value="cat">Кот</option>
              <option value="dog">Собака</option>
              <option value="rabbit">Кролик</option>
              <option value="hamster">Хомяк</option>
              <option value="parrot">Попугай</option>
            </select>
            <button type="submit">Поиск</button>
          </form>
        </div>
        <div class="search_iten"></div>
        <img src="img/cat-dog.jpg" alt="Картинка">
      </div>

    </section>
    <section class="reviews">
      <div class="container">
          <!-- Swiper -->
          <h2>Отзывы владельцев</h2>  
    <div class="swiper reviews-swiper">
    <div class="swiper-wrapper">
          <!--	Отзывы владельцев питомцев, которые уже нашли потерянное животное, в виде слайдсета с прокруткой по 1 элементу.
        	Имя автора отзыва
        	Фото животного
        	Отзыв
        	Дата отзыва --> 
      <div class="swiper-slide">
        <h3>Данил Слесаренко</h3>
        <img src="img/cat1.jpg" alt="">
        <p>Отзыв 1.</p>
        <p>31.05.2019</p>
      </div>
      <div class="swiper-slide">
        <h3>Данил Слесаренко</h3>
        <img src="img/dog1.jpg" alt="">
        <p>Отзыв 2.</p>
        <p>01.09.2021</p>
      </div>
      <div class="swiper-slide">
        <h3>Данил Слесаренко</h3>
        <img src="img/enot2.jpg" alt="">
        <p>Отзыв 3.</p>
        <p>16.11.2024</p>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
      </div>
    </section>
    <section class="sub">
      <div class="container">
        <form>
          <label for="email"></label>
          <input type="email" name="email" id="email" placeholder="example@mail.ru">
          <input type="checkbox" name="agree" id="agree">
          <label for="agree">Согласике на обработку персональных данных</label>
          <button type="submit">Подписаться</button>
        </form>
      </div>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <footer class="footer">
    <div class="container">
      <div class="footer_item">
        <a class="telephone" href="telephone:880012345567"> <i class="fa fa-mobile" aria-hidden="true"></i>
          8 (800)123-45-67</a>
        <a class="mail" href="mailto:mail@newlife.ru"> <i class="fa fa-envelope" aria-hidden="true"></i>
           mailto:mail@newlife.ru</a>
      </div>
      <div class="footer_item">
        <ul>
          <li><a href="index.html">Главная</a></li>
          <li><a href="register.php">Регистрация</a></li>
          <li><a href="login.php">Авторизация</a></li>
          <li><a href="index.html">Личный кабинет</a></li>
          <li><a href="add.php">Найдено животное</a></li>
          <li><a href="poisk.php">Поиск</a></li>
        </ul>
      </div>
    </div>

  </footer>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceVetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints:{
        // от 992 до много будет показывать 3 слайда
        992:{
          slidesPerView: 3,
        },
        // от 576 до 992 будет показывать 2 слайда
        576: {
          slidesPerView: 2
        },
        // от 0 до 576 будет показывать 1 слайд 
        0: {
          slidesPerView: 1
        }
      }
    });
    var reviewsSwiper = new Swiper(".reviews-swiper", {
      slidesPerView: 3,
      spaceVetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>