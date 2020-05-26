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
require"../db/connect.php";
require "../main_page/functions.php";
require "../authorization/change_pass.php";
$query = "UPDATE users SET pass =";
//WHERE `users`.`id` =1;"
$array = get_user();
$pass = $array['pass'];
$salt = $array['salt'];
//echo md5($_POST['old_pass'].$salt)," ",$pass;
if (md5($_POST['old_pass'].$salt) == $pass)
{
    $query = $query."'".md5($_POST['new_pass'].$salt)."' WHERE cookie='".$_COOKIE['User']."'";
    //echo $query;
    $result = mysqli_query($db, $query);
    echo "<script>alert(\"Пароль успешно изменен\")</script>";
}
else
    echo "<script>alert(\"Вы ввели неверный пароль\")</script>"
?>
</body>
</html>
