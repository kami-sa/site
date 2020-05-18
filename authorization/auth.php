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
    $query = "SELECT pass, salt, is_admin FROM users WHERE email='$email'";
    $result = mysqli_query($db, $query);
    $cookie = md5($email.$salt.time());
    function is_admin()
    {
        global $email;
        global $result;
        global $pass;
        $r = $result;
        $array = mysqli_fetch_array($r);
        return (($email === "admin@yandex.ru") && (md5($pass.$array['salt'])===$array['pass']));
    }
//    if (!(is_admin()))
//    {
        if (mysqli_num_rows($result) > 0)
        {
            $array = mysqli_fetch_array($result);
            //echo("<script>console.log('php_string: ".(md5($pass.$array['salt']))."');</script>");
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
                if ($array['is_admin'] == 1)
                    header("Location: http://localhost/site/admin/admin_main.php");
                else
                    header("Location: http://localhost/site/main_page/main.php");
                exit();

            }
            else {
                // echo $email," ",$pass," ",md5($pass.$array['salt']),"<br>";
                //echo "Неверный проль";
                //echo "<script type=\"text/javascript\" src =\"../scripts/reg_scripts.js\">invalidPassword();</script>";
                echo "<script>if(confirm(\"Вы ввели неверный пароль. Попробуйте войти еще раз?\")) window.location.href=\"../authorization/auth.html\"</script>";
            }
        }
        else
            //echo "Ошибочка";
            //echo "<script type=\"text/javascript\" src =\"../scripts/reg_scripts.js\">invalidEmail();</script>";
            echo "<script> if(confirm(\"Такого email я не знаю. Хотите зарегистрироваться? Если вы не зарегистрированы, нажмите да или вернитесь обратно и повторите попытку\")) window.location.href=\"../registration/reg.php\"</script>";
//    }
//    else
//    {
//        header("Location: http://localhost/site/admin/admin_main.php");
//        exit();
//    }



?>
