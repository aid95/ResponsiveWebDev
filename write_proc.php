<?php

    $article_title = $_POST["article_title"];
    $article_body = $_POST["article_body"];
    $article_author = $_SESSION["user_nick"];
    $article_category = 1;

    $thumbnail_path = "./assets/thumbnail";
    $mp3_path = "./assets/files/mp3";

    $thumbnail_name = $_FILES["article_thumbnail"]['name'];
    move_uploaded_file($_FILES["article_thumbnail"]['tmp_name'], "$thumbnail_path/$thumbnail_name");

    $mp3_name = $_FILES["article_mp3"]['name'];
    move_uploaded_file($_FILES["article_mp3"]['tmp_name'], "$mp3_path/$mp3_name");

    $link = mysqli_connect("localhost", "kmuweb99", "ghavpdlwl1", "kmuweb99");
    mysqli_query($link, "SET NAMES utf8");

    $insert_post_sql = "INSERT INTO `wave_article` (`article_title`, `article_author`, `article_date`, `article_body`, `article_category`, `article_thumbnail`, `article_mp3`) VALUES ('".$article_title."', '".$article_author."', NOW(), '".$article_body."', '".$article_category."', '".$thumbnail_name."', '".$mp3_name."');";
    mysqli_query($link, $insert_post_sql);
    mysqli_close($link);

    echo("<meta http-equiv='refresh' content =\"0; url='magazine.php'\">");

?>