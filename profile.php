<?php session_start();

// Проверка аутентификации

include_once('api/db.php');

if (array_key_exists('token', $_SESSION)){
    $token = $_SESSION['token'];
    $userId = $db->query("
        SELECT id FROM users WHERE api_token = '$token'
        ")->fetchAll();
    
    if(empty ($userId)){
        unset($_SESSION['token']);
        header('Location: login.php');
    }    
} else {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/pages/profile.css">
    <link rel="stylesheet" href="styles/setings.css">
    <title>Новая жизнь | Профиль</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="index.php">Главная</a>
                <a href="#">Объявления</a>
                <a href="#">Контакты</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="info">
            <div class="container">
                <div class="info_item">
                    <img src="img/cat-dog.jpg" alt="Изображение питомца">
                </div>
                <div class="footer_item">
                    <ul>
                        <li><i class="fa fa-phone-square" aria-hidden="true"></i> Номер телефона: 8 (923) 454 40-50</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Email: example@mail.ru</li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i> Количество добавленных объявлений: 10</li>
                        <li><i class="fa fa-paw" aria-hidden="true"></i> Питомцев: 5</li>
                        <li><i class="fa fa-table" aria-hidden="true"></i> Дата регистрации: 13.11.2024 (10 дней)</li>
                    </ul>
                    <button class="logout-button">Выход</button>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="container">
                <h2>Объявления</h2>
                <select class="status-filter">
                    <option value="0">Активно</option>
                    <option value="1">На модерацию</option>
                    <option value="2">Найдено</option>
                    <option value="3">В архиве</option>
                </select>
                <ul class="ad-list">
                    <!-- Repeat this block for each advertisement -->
                    <li class="ad-item">
                        <img src="img/cat-dog.jpg" alt="Объявление о питомце">
                        <small>23.11.2024 | Кировский р-н</small>
                        <p>Дополнительная информация (например, при каких обстоятельствах, погода)</p>
                    </li> 
                    <li class="ad-item">
                        <img src="img/cat-dog.jpg" alt="Объявление о питомце">
                        <small>23.11.2024 | Кировский р-н</small>
                        <p>Дополнительная информация (например, при каких обстоятельствах, погода)</p>
                    </li> 
                    <li class="ad-item">
                        <img src="img/cat-dog.jpg" alt="Объявление о питомце">
                        <small>23.11.2024 | Кировский р-н</small>
                        <p>Дополнительная информация (например, при каких обстоятельствах, погода)</p>
                    </li> 
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            &copy; 2024 Новая жизнь
        </div>
    </footer>
</body>
</html>

