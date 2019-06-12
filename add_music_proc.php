<?php

    $music_name = $_POST["music_name"];
    $music_album = $_POST["music_album"];
    $music_melody = $_POST["music_melody"];
    $music_lyric = $_POST["music_lyric"];

    $link = mysqli_connect("localhost", "kmuweb99", "ghavpdlwl1", "kmuweb99");
    mysqli_query($link, "SET NAMES utf8");

    $insert_album_sql = "INSERT INTO `wave_music` (`music_name`, `music_album`, `music_genre`, `music_melodizer`, `music_lyricist`) VALUES ('".$music_name."', '".$music_album."', 1, '".$music_melody."', '".$music_lyric."');";
    mysqli_query($link, $insert_album_sql) or die(mysqli_error($link));
    mysqli_close($link);

    echo("<meta http-equiv='refresh' content =\"0; url='album.php'\">");

?>