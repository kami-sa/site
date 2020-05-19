<?php
    require "functions.php";
    require"../db/connect.php";
    if (check_cookie())
    {
        $user = get_user();
        ?>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Главная страница</title>
                <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" >
                <link rel="stylesheet" type="text/css" media="all" href="../css/menu.css" >
                <link rel="stylesheet" type="text/css" media="all" href="../css/field.css" >
            </head>
            <body>
            <?php require "menu.html";
            require "field.html";
            ?>
            <script type="text/javascript" src="../scripts/jquery.js"></script>
            <script type="text/javascript" src="../scripts/animation.js"></script>
            <script type="text/javascript" src="../scripts/task_search.js"></script>
            </body>
        </html>
<?php
        //echo "<div><h1>Здравствуйте, ",$user['name'],"!</h1></div>";


    }
    else
        require "../authorization/auth.html";
//$section = []
?>