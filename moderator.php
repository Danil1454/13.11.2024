<?php session_start();



include_once('api/db.php');

if (array_key_exists('token', $_SESSION)){
    $token = $_SESSION['token'];
    $userId = $db->query("
        SELECT id,type FROM users WHERE api_token = '$token'
        ")->fetchAll();
    
    if(empty ($userId)){
        unset($_SESSION['token']);
        header('Location: login.php');
    } else {
        $type = $userId[0]['type'];
        if ($type != 'mod') {
            header('Location: index.php');
        }
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
    <link rel="stylesheet" href="styles/pages/moderator.css">
    <link rel="stylesheet" href="styles/setings.css">
    <title>Новая жизнь | Модератор</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html">На главную страницу</a>
        </div>
    </header>
    <main>
        <section class="filter">
            <div class="container">
                <form>
                    <label for="date-from">От</label>
                    <input type="date" name="date-from" id="date-from">
                    <label for="date-to">До</label>
                    <input type="date" name="date-to" id="date-to">
                    <select name="type" id="type">
                        <option value="0">На модерации</option>
                        <option value="1">Активно</option>
                        <option value="2">Найдено</option>
                        <option value="3">В архиве</option>
                    </select>
                    <button type="submit">Поиск</button>
                </form>
            </div>
        </section>
        <section class="items">
            <div class="container">
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
</body>
</html>