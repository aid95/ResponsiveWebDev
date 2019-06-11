<?php

    $link = mysqli_connect("localhost", "kmuweb99", "ghavpdlwl1", "kmuweb99"); mysqli_query($link, "SET NAMES utf8");

    $id = $_POST["article_id"];
    $article_title = $_POST["article_title"];
    $article_body = $_POST["article_body"];

    $update_post_sql = "UPDATE `wave_article` SET `article_title` = '".$article_title."', `article_body` = '".$article_body."' WHERE `id` = '".$id."'";
    mysqli_query($link, $update_post_sql);
    mysqli_close($link);

    echo "<meta http-equiv='refresh' content='0;url=view.php?id=".$id."'>";

?>