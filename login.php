<?php session_start();

// Проверка аутентификации

include_once('api/db.php');

if (array_key_exists('token', $_SESSION)){
    $token = $_SESSION['token'];
    $userId = $db->query("
        SELECT id FROM users WHERE api_token = '$token'
        ")->fetchAll();
    
        if(!empty ($userId)){
        header('Location: profile.php');
    }    
} 


?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/setings.css">
    <link rel="stylesheet" href="styles/pages/login.css">
    <title>Новая жизнь | Главная страница</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="index.html">На главную</a>
        </div>
    </header>
    <main>
        <section>
            <h1 class="login-title">Авторизация</h1> <!-- Added title -->
            <?php
            function showError($field) {
                if (!array_key_exists('auth-errors', $_SESSION)){
                    echo '';
                } else {
                    $listErrors = $_SESSION['auth-errors'];
                    if (array_key_exists($field, $listErrors)){
                        $error = implode (',', $listErrors[$field]);
                        echo "<span class='error'> $error </span>";
                    }
                }
            }
            ?>
            <form class="login-form" action="api/authUser.php" method="POST">
                <label for="email">Email<?php showError('email');?></label>
                <input type="email" name="email" id="email" placeholder="Email" >
                <label for="password">Пароль<?php showError('password');?></label>
                <input type="password" name="password" id="password" placeholder="Пароль" >
                <button type="submit">Вход</button>
                <!-- Updated registration link to a button -->
                <a href="registration.php" class="register-button">Регистрация</a> <!-- Registration button -->
            </form>
        </section>
    </main>
</body>
</html>
