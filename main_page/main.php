<?php
    require "functions.php";
    require"../db/connect.php";
    if (check_cookie())
    {
        $user = get_user();
        require "menu.html";
        require "field.html";
        //echo "<div><h1>Здравствуйте, ",$user['name'],"!</h1></div>";


    }
    else
        require "../authorization/auth.html";
//$section = []
?>