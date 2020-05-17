<html>
    <head>
        <title></title>

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
            $db = mysql_connect("localhost","root","");
            mysql_select_db ("study",$db);
            mysql_set_charset("utf8");
			$r = mysql_query("SELECT * FROM pupils WHERE name='$name' AND surname='$surname' AND les_type='$les_type' AND a_mark='$a_mark' AND g_mark='$g_mark' AND count_les='$count_les' AND time='$time'");
			if (!(mysql_fetch_array($r)))
			{
				if ($name!=''&&$surname!=''&&$les_type!=''&&$a_mark!=''&&$g_mark!=''&&$count_les!=''&&$time!='')
				{
					$result = mysql_query("INSERT INTO pupils (name, surname, les_type, a_mark, g_mark, count_les, time) VALUES ('$name', '$surname', '$les_type', '$a_mark', '$g_mark', '$count_les', '$time')");
					if ($result == true)
					{
						echo "Success";
					}
					else
					{
						echo "Error";
					}
				}
				else 
				{
					echo "<a href=add.php?name=$name&surname=$surname&les_type=$les_type&a_mark=$a_mark&g_mark=$g_mark&count_les=$count_les&time=$time>Введены не все данные</a>";
				}
			}
			else
			{
				echo "This data is in a base. Go away";
			}
        ?>
		<br>
		<a href=admin.php>Назад</a>
    </body>
</html>
