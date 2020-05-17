<html>
    <head>
        <title>Задания</title>
        <style>
            @import "css/style.css";
        </style>

    </head>
    <body>
        <?php
            $db = mysql_connect("localhost","root","");
            mysql_select_db ("study",$db);
            mysql_set_charset("utf8");
            $result = mysql_query("SELECT * FROM `tasks`
                                            LEFT JOIN `rel_tasks_themes` ON `tasks`.`id` = `rel_tasks_themes`.`tasks_id`
                                            LEFT JOIN `themes` ON `themes`.`id` = `rel_tasks_themes`.`themes_id`
                                            WHERE `tasks`.`id` =1");
            while($array = mysql_fetch_array($result))
            {
                echo "<div><p>",$array['text'],"</p></div>";
                if ($array['subject'] == 0) {
                    $sub = "Геометрия";
                }
                else $sub = "Алгебра";
                $image .="/Задания/".$sub."/".$array['grade']."/".$array['name']."/".$array['image_name'];
                echo "<img src=",$image,">";
            }

        ?>
    </body>
    </body>
</html>