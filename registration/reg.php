<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" >
    <script type="text/javascript" src="../scripts/reg_scripts.js"></script>
</head>
<body>
    <div class="navigation flex-container3">
        <form class="navigation flex-container3" action="reg_db.php" method="post" >
            <h1 class="head flex-block3">Регистрация</h1>
            <input id="n" type="text" name="name" placeholder="Имя" required>
            <input id="s" type="text" name="surname" placeholder="Фамилия" required>
            <input id="e" type="email" name="email" placeholder="Email" required>
            <input id="p" type="password" name="pass" placeholder="Пароль" required>
            <input id="rp" type="password" name="re_pass" placeholder="Повторите пароль" required>
            <input class="flex-block3 button" type="submit" value="Зарегистрироваться" onclick="return isRegDataValid();">
        </form>
    </div>
</body>
</html>