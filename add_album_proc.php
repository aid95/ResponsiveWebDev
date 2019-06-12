<?php

    $album_name = $_POST["album_name"];
    $album_artist = $_POST["album_artist"];
    $album_date = $_POST["album_date"];
    $album_genre = $_POST["album_genre"];

    $thumbnail_path = "./assets/thumbnail";
    $thumbnail_name = $_FILES["album_thumbnail"]['name'];
    move_uploaded_file($_FILES["album_thumbnail"]['tmp_name'], "$thumbnail_path/$thumbnail_name");

    $link = mysqli_connect("localhost", "kmuweb99", "ghavpdlwl1", "kmuweb99");
    mysqli_query($link, "SET NAMES utf8");

    $insert_album_sql = "INSERT INTO `wave_album` (`album_name`, `album_artist`, `album_date`, `album_thumbnail`, `album_genre`) VALUES ('".$album_name."', '".$album_artist."', DATE('".$album_date."'), '".$thumbnail_name."', '".$album_genre."');";
    mysqli_query($link, $insert_album_sql) or die(mysqli_error($link));
    mysqli_close($link);

    echo("<meta http-equiv='refresh' content =\"0; url='album.php'\">");

?>