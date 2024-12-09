<?php session_start();

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
    <link rel="stylesheet" href="styles/pages/add.css">
    <link rel="stylesheet" href="styles/setings.css">
    <title>Новая жизнь | Добавление животных</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html">На главную</a>
        </div>
    </header>
    <main>
        <section class="add">
            <div class="container">
                <h1>Добавить информацию о животном</h1>
                <form>
                    <label for="phone">Номер телефона</label>
                    <input type="tel" name="phone" id="phone" required>

                    <label for="email">Почта</label>
                    <input type="email" name="email" id="email" required>

                    <label for="type">Тип животного</label>
                    <select name="type" id="type" required>
                        <option value="">Выберите тип</option>
                        <option value="cat">Кот</option>
                        <option value="dog">Собака</option>
                    </select>

                    <label for="photo">Фотографии животного</label>
                    <input type="file" name="photo" id="photo" accept="image/*">

                    <label for="desc">Дополнительная информация</label>
                    <textarea name="desc" id="desc" rows="4"></textarea>

                    <label for="mark">Клеймо (если есть)</label>
                    <input type="text" name="mark" id="mark">

                    <label for="place">Место нахождения</label>
                    <select name="place" id="place">
                        <option value="">Выберите район</option>
                        <option value="0">Кировский р-н</option>
                        <option value="1">Центр</option>
                    </select>

                    <label for="date">Дата</label>
                    <input type="date" name="date" id="date">

                    <label for="agree">
                        <input type="checkbox" name="agree" id="agree" required>
                        Согласие на обработку персональных данных
                    </label>

                    <button type="submit">Отправить</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>