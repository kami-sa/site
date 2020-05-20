<html>
    <head>
        <meta charset="UTF-8">
        <title>Поиск по заданиям</title>
        <script type="text/javascript" src="../scripts/task_search.js"></script>

        <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" >
        <link rel="stylesheet" type="text/css" media="all" href="../css/menu.css" >
        <link rel="stylesheet" type="text/css" media="all" href="../css/field.css" >
    </head>
    <body>
        <?php
        require"../db/connect.php";
        require "../main_page/menu.html";
        require "../main_page/field.html";
        ?>
        <form action="all_task.php" method="post" id="task_form">
            <select name="subject" id="subject">
                <?php
                $result = mysqli_query($db, "SELECT DISTINCT subject FROM themes ");
                while($array = mysqli_fetch_array($result))
                {
                    if ($array['subject'] == 0) {
                        $sub = "Геометрия";
                    }
                    else $sub = "Алгебра";
                    echo "<option value=",$array['subject'],">",$sub,"</option>";

                }
                ?>
            </select>
            <select name="grade" id="grade">
                <?php
                $result = mysqli_query($db,"SELECT DISTINCT grade FROM tasks ");
                while($array = mysqli_fetch_array($result))
                {
                    echo "<option value=",$array['grade'],">",$array['grade']," класс</option>";
                }
                ?>
            </select>
            <select name="theme_name" id="theme_name">
                <?php
                $result = mysqli_query($db,"SELECT DISTINCT name FROM themes ");
                while($array = mysqli_fetch_array($result))
                {
                    echo "<option value=",$array['name'],">",str_replace("_"," ",$array['name']),"</option>";
                }
                ?>
            </select>
            <select name="difficulty" id="difficulty">
                <option selected value="0">Любая</option>
                <?php
                $result = mysqli_query($db,"SELECT DISTINCT difficulty FROM tasks ");
                while($array = mysqli_fetch_array($result))
                {
                    echo "<option value=",$array['difficulty'],">",$array['difficulty'],"</option>";
                }
                ?>
            </select>
            <input type="submit" value="Вывести список подходящих заданий" name="search" id="search">
        </form>

        <script type="text/javascript" src="../scripts/jquery.js"></script>
        <script type="text/javascript" src="../scripts/animation.js"></script>
    </body>
</html>
