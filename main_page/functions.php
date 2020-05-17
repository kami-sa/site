<?php
    require "../db/connect.php";

    function check_cookie($db)
    {
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
    ?>
