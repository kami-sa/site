<html>
    <head>
        <meta charset="UTF-8">
        <title>Поиск по заданиям</title>
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
        <form action="tasks.php" method="post" id="task_form">
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
<!--            <p style="color: #2b4a4a;text-transform: uppercase;font-family:'Times New Roman', Georgia, Serif;font-weight: bold;">Для возвращения назад к списку задач нажмите на условие задачи</p>-->

        </form>

<?php
    $s = $_POST['subject'];
    $g = $_POST['grade'];
    $t_n = $_POST['theme_name'];
    $d = $_POST['difficulty'];
    if (!empty($_POST))
    {
        $query = "SELECT tasks.id, themes.name FROM tasks
                                                    LEFT JOIN rel_tasks_themes ON tasks.id = rel_tasks_themes.tasks_id
                                                    LEFT JOIN themes ON themes.id = rel_tasks_themes.themes_id
                                                    WHERE themes.subject = $s 
                                                    AND tasks.grade = $g 
                                                    AND themes.name = \"$t_n\"";
        if ($d != 0)
            $query .= "AND tasks.difficulty = $d";

        $result = mysqli_query($db, $query);
                if (!$result) {
                    die('Invalid query: ' . mysqli_error());
                }
                echo "<div id='block_task'>";
        while($array = mysqli_fetch_array($result))
        {
            $id = $array['id'];
            echo "<a href='#' class='task' id='task$id'>",$array['id']," ",str_replace("_"," ",$array['name']),  "</a>" ;
            $q = "SELECT * FROM tasks LEFT JOIN rel_tasks_themes ON tasks.id = rel_tasks_themes.tasks_id
                                                LEFT JOIN themes ON themes.id = rel_tasks_themes.themes_id
                                                WHERE tasks.id = $id";
            $res = mysqli_query($db, $q);
            $image = "";
            $array = mysqli_fetch_array($res);
            if ($array['subject'] == 0) {
                $sub = "Геометрия";
            } else $sub = "Алгебра";
            $image .= "../Задачи/" . $sub . "/" . $array['grade'] . "/" . $array['name'] . "/" . $array['image_name'];
            echo "<div style='display: none' class='task_block' id='task_block$id'><p>", $array['text'], "</p><img src=\"$image\"></div>";

        }
        echo "</div>";
    }
?>
<!--        <img style="width: 64px;height: 64px;" id="back" src="../icons/back.png">-->

        <script type="text/javascript" src="../scripts/jquery.js"></script>
        <script type="text/javascript" src="../scripts/animation.js"></script>
        <script type="text/javascript" src="../scripts/task_search.js"></script>
    </body>
</html>