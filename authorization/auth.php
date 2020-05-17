<?php
   require "../db/connect.php";
   //require "../scripts/reg_scripts.js";
/*
 * 1. Проверяем, есть ли такой имэйл в users
 * 2. Если да, то проверяем, верно ли введен пароль; если нет - перекидываем на страницу регистрации
 * 3. Проверяем checkbox. Если отмечен, то в таблицу Users сохраняем cookie пользователя
 * */
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "SELECT pass, salt FROM users WHERE email='$email'";
    $result = mysqli_query($db, $query);
    $cookie = md5($email.$salt.time());

    if (mysqli_num_rows($result) > 0)
    {
        $array = mysqli_fetch_array($result);
        if (md5($pass.$array['salt'])===$array['pass'])
        {
            $query = "UPDATE users SET cookie='$cookie' WHERE email='$email'";
            mysqli_query($db, $query);
            if ($_POST['check_session'] === 'Yes') {
                setcookie("User",$cookie,time()+(86400 * 14),"/");
            }
            else {
                setcookie("User",$cookie,time()+3600,"/");
            }
            header("Location: http://localhost/site/main_page/main.php");
            exit();

        }
        else {
           // echo $email," ",$pass," ",md5($pass.$array['salt']),"<br>";
            //echo "Неверный проль";
            echo "<script type=\"text/javascript\" src =\"../scripts/reg_scripts.js\">invalidPassword();</script>";
        }
    }
    else
        //echo "Ошибочка";
        echo "<script type=\"text/javascript\" src =\"../scripts/reg_scripts.js\">invalidEmail();</script>";

?>
