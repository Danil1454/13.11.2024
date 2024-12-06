<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/setings.css">
    <link rel="stylesheet" href="styles/pages/login.css">
    <title>Новая жизнь | Главная тсраница</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="index.html">На главную</a>
        </div>
    </header>
    <main>
        <section>
            <form action="api/authUser.php" method="POST" class="login-form">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="example">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <button type="submit">Вход</button>
                <a href="">Регистрация</a>
            </form>
        </section>
    </main>
</body>
</html>