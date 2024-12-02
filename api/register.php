<?php

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
    'agree'
   ];
   $errors = [];

   // Проверка на пустоту
   foreach ($fields as $idx => $field) {
    if (!$formData[$field]) {
        $errors[][$field] = 'Поле необходимо заполнить';
    }
   }
}

?>