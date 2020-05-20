<?php
require"../db/connect.php";
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
<?php require "admin_panel.html";
require "../main_page/field.html";
?>
<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript" src="../scripts/animation.js"></script>
<script type="text/javascript" src="../scripts/task_search.js"></script>
</body>
</html>
