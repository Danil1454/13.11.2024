<?php session_start();
include_once './db.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
   //Данные с формы 
   $formData = $_POST;
   // 
   $fields = [
    'name',
    'surname',
    'email',
    'phone',
    'password',
    'password-confirm',
    'agree' 
  ]; 
   $errors = [];
   // Проверка + очистка данных
   foreach ($formData as $key => $value) {
    $formData[$key] = $value;
   }
   //Проверка на сущестования ключа + пустоту значения
   foreach ($fields as $idx => $field) {
    // Проверка существования ключа 
    if (array_key_exists($field, $formData)) {
        // Проверка пустоты значения
        if ($formData[$field]){
            // Если дошли до сюда, выходим из цикла , чтобы ошибка не записалась 
        continue;  
      }  
    }
     $errors[$field][] = 'Поле необходимо заполнить';
    }
    // Проверка правильного ввода пароля 
    if ($formData['password'] !== $formData['password-confirm']){
        $errors ['password-confirm'][] = 'Paroly ne sovpadaut';
    }
    // Проверка уникальности
    $phone = $formData['phone'];
    $user = $db->query(
        "SELECT id FROM users WHERE phone = '$phone' "
    )->fetchAll();
    if (!empty($user)){
        $errors["phone"][] = 'Takoy polzovatel ect';
    }
    if (empty($errors)){
        $_request = $db-> 
        prepare("
           INSERT INTO 'users'(
               'name', 'surname', 'email' , 'phone' , 'password' , 'agree'
               ) VALUES (?,?,?,?,?,?)
        ")->execute([
            $formData['name'],
            $formData['surname'],
            $formData['email'],
            $formData['phone'],
            password_hash($formData['password'], PASSWORD_BCRYPT),
            $formData['agree'] ? 1 : 0,
        ]);
        $_SESSION['register-errors'] = [];
        header('Location: ../login.php');
    }
    if (!empty($errors)){
        $_SESSION['register-errors'] = $errors;
        header('Location: ../register.php');
    }
} else {
    echo 'Запрос неверный';
}

?>