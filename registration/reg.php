<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" >
<!---->
<!--    <script type="text/javascript" src="../scripts/reg_scripts.js"></script>-->
    <script type="text/javascript" src="../scripts/jquery.js"></script>
</head>
<body>
<!--    <div class="navigation flex-container3">-->
        <form class="navigation flex-container3" action="reg_db.php" method="post" id="reg_form">
            <h1 class="head flex-block3">Регистрация</h1>
            <div id="attention" style="display: none"></div>
            <input id="n" class="inp_field" type="text" name="name" placeholder="Имя" required>
            <input id="s" class="inp_field" type="text" name="surname" placeholder="Фамилия" required>
            <input id="e" class="inp_field" type="email" name="email" placeholder="Email" required>
            <input id="p" class="inp_field" type="password" name="pass" placeholder="Пароль" required>
            <input id="rp" class="inp_field" type="password" name="re_pass" placeholder="Повторите пароль" required>
            <a href="../authorization/auth.html" style="color:#004b43;text-decoration: none;margin-left: 16px">Вернуться к авторизации</a>
            <input class="button flex-block3" type="submit" value="Зарегистрироваться" onclick="return isRegDataValid();">
        </form>
<!--    </div>-->
    <script type="text/javascript" src="../scripts/reg_scripts.js"></script>
    <script type="text/javascript" src="../scripts/jquery.js"></script>
</body>
</html>