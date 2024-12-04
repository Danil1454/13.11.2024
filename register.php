<?php session_start();?>
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
    <?php 
         function showError($field){
            $listErrors = $_SESSION['register-errors'];

                if (array_key_exists($field, $listErrors)){
                    $error = implode (',', $listErrors[$field]); 
                    
                     echo "<span class='error'>$error </span>";
                }
            } 
        ?>
        <section>
            <form method="POST" action="api/registrationUser.php" method="POST">
                <h1 class="register-form-title">Регистрация</h1>

                <label for="email"> Email <?php showError('email'); ?></label>
                <input name="email" type="email" name="email" id="email" placeholder="example">
                

                <label for="name">Name <?php showError('name'); ?></label>
                <input name="name" type="name" name="name" id="name" placeholder="example">
                
                <label for="surname">SurName <?php showError('surname'); ?></label>
                <input name="surname" type="surname" name="surname" id="surname" placeholder="surname">
                
                <label for="phone">Phone <?php showError('phone'); ?></label>
                <input name="phone" type="phone" name="phone" id="phone">
                
                <label for="password">Password <?php showError('password'); ?></label>
                <input name="password" type="password" name="password" id="password">

                <label for="password-confirm">repeat password <?php showError('password-confirm'); ?></label>
                <input name="password-confirm" type="password"  id="password" placeholder="password">         
               
                <button type="submit">Регистрация</button>
            </form>
        </section>
    </main>
</body>
</html>