<?php
    require "../db/connect.php";

    function check_cookie()
    {
        global $db;
        $query = "SELECT * FROM users";
        $cookie = $_COOKIE['User'];
        if (isset($_COOKIE['User'])) {
            $query .= " WHERE cookie='" . $cookie . "'";
        } else {
        }
        $result = mysqli_query($db, $query);
        $array = mysqli_fetch_array($result);
        if (($array['cookie'] != '') and ($array['cookie'] == $_COOKIE['User'])) {
            return true;
        } else {
            return false;
        }
    }

    function get_user()
    {
        global $db;
        $cookie = $_COOKIE['User'];
        $query = "SELECT * FROM users LEFT JOIN pupils ON users.pupils_id = pupils.id ";
        if (isset($_COOKIE['User'])) {
            $query .= " WHERE users.cookie='" . $cookie . "'";
        }
        $result = mysqli_query($db, $query);
        return mysqli_fetch_array($result);
        /*Индексы возвращенного массива: id, email, pass, salt, cookie, pupils_id, is_admin, id(в таблице ученики),
        name, surname, les_type, a_mark, g_mark, count_les, time*/
    }
    ?>
