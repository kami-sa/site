<?php
    require "functions.php";
    require"../db/connect.php";
    if (check_cookie($db))
    {
        require "menu.html";
        require "field.html";
    }
    else
        require "../authorization/auth.html";
//$section = []
?>