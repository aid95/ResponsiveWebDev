<?php

    $link = mysqli_connect("localhost", "kmuweb99", "ghavpdlwl1", "kmuweb99"); mysqli_query($link, "SET NAMES utf8");
    $delete_post_sql = "DELETE FROM `wave_article` WHERE `id` = '".$_GET["mid"]."'";
    mysqli_query($link, $delete_post_sql);
    mysqli_close($link);

    echo "<meta http-equiv='refresh' content='0;url=magazine.php'>";

?>