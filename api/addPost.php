<?php session_start();
include_once './db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (array_key_exists('token', $_SESSION)){
        $token = $_SESSION['token'];
        $userId = $db->query("
            SELECT id FROM users WHERE api_token = '$token'
            ")->fetchAll();
        
        if(empty ($userId)){
            unset($_SESSION['token']);
            header('Location: ../login.php');
            exit;
        }    
    } else {
        header('Location: ../login.php');
        exit;
    }
  
    $animalType = $_POST['type'];
    $decsription = $_POST['desc'];
    $mark = $_POST['mark'];
    $address = $_POST['address'];
    $date= $_POST['date'];

} else {
    echo'Запрос неверный';
}
?>






