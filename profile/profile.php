<html>
    <head>
        <meta charset="UTF-8">
        <title>Профиль</title>
        <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" >
        <link rel="stylesheet" type="text/css" media="all" href="../css/menu.css" >
        <link rel="stylesheet" type="text/css" media="all" href="../css/field.css" >
    </head>
    <body>
        <?php
            require"../db/connect.php";
            require "../main_page/menu.html";
            require "../main_page/field.html";
            require "../main_page/functions.php";
            $array = get_user();
            echo "<h1 class='user_info'>",$array['name']," ",$array['surname'],"</h1>";
            switch ($array['les_type']){
                case 1:
                    $type = "7 класс";
                    break;
                case 2:
                    $type = "8 класс";
                    break;
                case 3:
                    $type = "ОГЭ";
                    break;
                case 4:
                    $type = "ЕГЭ базовый";
                    break;
                case 5:
                    $type = "ЕГЭ профильный";
                    break;
            }
            echo "<h2 class='user_info'> Тип занятий: ",$type,"</h2>";
            echo "<h2 class='user_info'> Оценка по алгебре: ",$array['a_mark'],", оценка по геометрии: ",$array['g_mark'],"</h1>";
            echo "<h2 class='user_info'> Количество занятий в неделю: ",$array['count_les'],"</h2>";
            echo "<h2 class='user_info'> Длительность: ",$array['time'],"</h2>";
            echo "<h3 class='user_info'>Регистрационные данные:<br>Email:",$array['email'],"<br><a href =\"../authorization/change_pass.php\">Изменить пароль</a></h3>"


        ?>
        <script type="text/javascript" src="../scripts/jquery.js"></script>
        <script type="text/javascript" src="../scripts/animation.js"></script>
    </body>
</html>