<?php session_start();
include_once './db.php';
if($_SERVER['REQUEST_METHOD'] == "POST") {
   $formData = $_POST;
   $fields = [
    'email',
    'password',
  ]; 
   $errors = [];
   foreach ($formData as $key => $value) {
    $formData[$key] = htmlspecialcahars ($value);
   }
   foreach ($fields as $idx => $field) {
    if (array_key_exists($field, $formData)) {
        if ($formData[$field]){
        continue;  
      }  

    }
     $errors[$field][] = 'Поле необходимо заполнить';
    }
    if (empty($errors)){
        echo 123
    }
    if (!empty($errors)){
        $_SESSION['auth-errors'] = $errors;
        header('Location: ../login.php');
    }
} else {
    echo 'Запрос неверный';
}
?>