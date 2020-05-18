<?php
    require "../db/connect.php";
/*
1. Добавление пользователя в таблицу users
2. Добавление ученика в таблицу pupils
3. Вывод, что регистрация успешна
4. Назад к главной странице сайта
*/
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
    $salt = substr(str_shuffle($permitted_chars), 0, 10);
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $pass = md5($_POST['pass'].$salt);
    $email = $_POST['email'];
    $query ="INSERT INTO pupils (name, surname, les_type, a_mark, g_mark, count_les, time) VALUES ('$name', '$surname', NULL, NULL, NULL, NULL, NULL)";
    $result = mysqli_query($db, $query);
    $query = "SELECT id FROM pupils WHERE name='$name' AND surname='$surname'";
    $result = mysqli_query($db, $query);
    $array = mysqli_fetch_array($result);
    $id = $array['id'];
    $query =  "INSERT INTO users (id, email, pass, salt, pupils_id) VALUES (NULL, '$email', '$pass', '$salt', $id)";
    $result = mysqli_query($db, $query);
    header("Location: http://localhost/site/main_page/main.php");
    exit();
?>
