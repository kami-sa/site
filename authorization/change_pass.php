<html>
    <head>
        <meta charset="UTF-8">
        <title>Изменить пароль</title>
        <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" >
        <link rel="stylesheet" type="text/css" media="all" href="../css/menu.css" >
        <link rel="stylesheet" type="text/css" media="all" href="../css/field.css" >
    </head>
    <body>
        <?php
        require "../main_page/menu.html";
        require "../main_page/field.html";
        ?>
        <form action="change_pass_db.php" method="post" id="change_pass_form">
            <h1>Изменение пароля</h1>
            <div id="attention" style="display: none"></div>
            Введите старый пароль<input type="password" name="old_pass" id="old_pass" required><br>
            Введите новый пароль<input type="password" name="new_pass" id="new_pass" required><br>
            Повторите новый пароль<input type="password" name="new_repass" id="new_repass" required><br>
            <input type="submit" value="Изменить пароль">
        </form>
        <script type="text/javascript" src="../scripts/jquery.js"></script>
        <script type="text/javascript" src="../scripts/animation.js"></script>
        <script type="text/javascript" src="../scripts/change_pass_script.js"></script>
    </body>
</html>
