<html>
    <head>
        <title>Выбор задания</title>
        <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" >

    </head>
    <body>
        <?php
            require "../db/connect.php";
        ?>
        <form action="all_task.php" method="post">
            <select name="subject">
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
            <select name="grade">
                <?php
                    $result = mysqli_query($db,"SELECT DISTINCT grade FROM tasks ");
                    while($array = mysqli_fetch_array($result))
                    {
                        echo "<option value=",$array['grade'],">",$array['grade']," класс</option>";
                    }
                ?>
            </select>
            <select name="theme_name">
                <?php
                $result = mysqli_query($db,"SELECT DISTINCT name FROM themes ");
                while($array = mysqli_fetch_array($result))
                {
                    echo "<option value=",$array['name'],">",str_replace("_"," ",$array['name']),"</option>";
                }
                ?>
            </select>
            <select name="difficulty">
                <option selected value="0">Любая</option>
                <?php
                $result = mysqli_query($db,"SELECT DISTINCT difficulty FROM tasks ");
                while($array = mysqli_fetch_array($result))
                {
                    echo "<option value=",$array['difficulty'],">",$array['difficulty'],"</option>";
                }
                ?>
            </select>
            <input type="submit" value="Вывести список подходящих заданий">
        </form>

        <?php
        $s = $_POST['subject'];
        $g = $_POST['grade'];
        $t_n = $_POST['theme_name'];
        $d = $_POST['difficulty'];
        echo $t_n,"<br>";
        $query = "SELECT tasks.id, themes.name FROM tasks
                                            LEFT JOIN rel_tasks_themes ON tasks.id = rel_tasks_themes.tasks_id
                                            LEFT JOIN themes ON themes.id = rel_tasks_themes.themes_id
                                            WHERE themes.subject = $s 
                                            AND tasks.grade = $g 
                                            AND themes.name = \"$t_n\" 
                                            AND tasks.difficulty = $d";
        $result = mysqli_query($db, $query);
//        if (!$result) {
//            die('Invalid query: ' . mysqli_error());
//        }
        while($array = mysqli_fetch_array($result))
        {
            echo "<p>",$array['id']," ",$array['name'],"</p>";
        }
       ?>
    </body>
    </body>
</html>