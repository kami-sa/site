<?php
    setcookie("User","",time(),"/");
    header("Location: http://localhost/site/main_page/main.php");
    exit();
?>