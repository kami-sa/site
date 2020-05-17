<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление нового ученика</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="../../css/style.css" >
</head>

<body>
<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$les_type = $_REQUEST['les_type'];
$a_mark = $_REQUEST['a_mark'];
$g_mark = $_REQUEST['g_mark'];
$count_les = $_REQUEST['count_les'];
$time = $_REQUEST['time'];
$id = $_REQUEST['id'];
?>
<div class="navigation flex-container3">
    <form class="navigation flex-container3" action=240420-1obr.php method=POST>
        <h1 class="head flex-block3">Добавление нового ученика</h1>
        <fieldset class="flex-block3">
            <input type="text" name="name" value="<?php if (!empty($name)) {echo $name;} else {echo "Имя";}?>" onfocus="this.value=''">
            <input type="text" name="surname" value="<?php if (!empty($surname)) {echo $surname;} else {echo "Фамилия";}?>" onfocus="this.value=''">
        </fieldset>
        <fieldset class="flex-block3"> <legend><b><label>Тип занятий:</label></b></legend>
            <label><input type="radio" name="les_type" value="1">7 класс</label>
            <label><input type="radio" name="les_type" value="2">8 класс</label>
            <label><input type="radio" name="les_type" value="3">ОГЭ</label>
            <label><input type="radio" name="les_type" value="4">ЕГЭ базовый</label>
            <label><input type="radio" name="les_type" value="5">ЕГЭ профильный</label>
        </fieldset>
        <fieldset class="flex-block3">
            <input type="text" name="a_mark" value="<?php if (!empty($a_mark)) {echo $a_mark;} else {echo "Оценка по алгебре";}?>" onfocus="this.value=''">
            <input type="text" name="g_mark" value="<?php if (!empty($g_mark)) {echo $g_mark;} else {echo "Оценка по геометрии";}?>" onfocus="this.value=''">
        </fieldset>
        <fieldset class="flex-block3">
            <input type="text" name="count_les" value="<?php if (!empty($count_les)) {echo $count_les;} else {echo "Количество занятий (в неделю)";}?>" onfocus="this.value=''">
            <input type="text" name="time" value="<?php if (!empty($time)) {echo $time;} else {echo "Длительность (мин)";}?>" onfocus="this.value=''">
        </fieldset>
        <input class="flex-block3 button" type="submit" value="Сохранить" style="color: #555555">
        <input class="flex-block3 button" type="reset" value="Очистить" style="color: #555555">

    </form>
</div>
</body>

</html>
