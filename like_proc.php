<?php

    $id = $_GET["id"];

    $link = mysqli_connect("localhost", "kmuweb99", "ghavpdlwl1", "kmuweb99"); mysqli_query($link, "SET NAMES utf8");

    $like_count = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM `wave_article` WHERE `id` = '".$id."'"))["article_like"];
    $like_count += 1;

    $update_like_count_sql = "UPDATE `wave_article` SET `article_like` = '".$like_count."' WHERE `id` = '".$id."'";
    mysqli_query($link, $update_like_count_sql);

    echo $like_count;
?>