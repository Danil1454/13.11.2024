<?php session_start();
include_once("api/db.php");
if (!array_key_exists('id', $_GET)){
  header("Location: poisk.php");
  exit;
}
//
$id = $_GET['id'];
$post = $db->query(
  "SELECT * FROM posts WHERE id = '$id'"
)->fetchAll();
if(empty($post)) {
  header("Location: poisk.php");
  exit;
}
echo json_encode($post);
//-next
$userId = $post[0]['user_id'];
$user = $db->query(
  "SELECT * FROM users WHERE id = '$userId'"
)->fetchAll();
echo json_encode($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/setings.css">
    <link rel="stylesheet" href="styles/pages/card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Информация о животных</title>

</head>
<body>
    <header>
        <div class="container">
            <a href="poisk.html">На страницу поиска</a>
        </div>
    </header>
    <main>
        <section class="info">
            <div class="container">
                <div class="info_item">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>
                              <div class="swiper-slide">
                                <img src="img/собака.jpg" />
                              </div>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                      <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="img/собака.jpg" />
                          </div>
         
                        </div>
                      </div>
                </div>
                <div class="info_item">
                        <time datetime="29-11-2024">29.11.2024</time>
                        <h2>Кот</h2>
                        <p>
                            Кировский
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ullam et voluptatum beatae, veniam vel explicabo obcaecati excepturi repudiandae est omnis quos doloribus blanditiis aperiam ipsa cumque in. Facilis, voluptatum.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt velit tempore molestias nihil, ut dolorum! Consectetur facilis, excepturi voluptatem quasi obcaecati neque incidunt nemo tenetur voluptates voluptatibus alias fugiat repellendus.
                        </p>
                        <p>Иванов Иван</p>
                        <a href="tel:89231898840">8 (923) 189 88-40</a>
                        <a href="mailto:example@mail.ru">example@mail.ru</a>
                </div>
            </div>
        </section>
    </main>

   
 
    
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
          spaceBetween: 10,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          thumbs: {
            swiper: swiper,
          },
        });
      </script>
    
</body>
</html>