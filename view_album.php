<?php

    $id = $_GET["id"];

    $link = mysqli_connect("localhost", "kmuweb99", "ghavpdlwl1", "kmuweb99");
    mysqli_query($link, "SET NAMES utf8");

    $get_album_info_sql = "SELECT * FROM `wave_album` WHERE `id` = '".$id."'";
    $album_name = mysqli_fetch_assoc(mysqli_query($link, $get_album_info_sql))["album_name"];

    $get_music_list_sql = "SELECT * FROM `wave_music` WHERE `music_album` = '".$album_name."'";
    $result = mysqli_query($link, $get_music_list_sql);

    mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="호준과병주">
    <meta name="description" content="굉장히 어썸한 음악소개 페이지!">
    <meta name="keywords" content="음악, 힐링, OST, 힙합, 영화음악, 드라마음악, 음악소개">

    <title>정직한 사이트 제목</title>

    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- 웹폰트 가져오기 -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1:400,500,600,700,800&display=swap&subset=korean" rel="stylesheet">

    <!-- 메인화면 이미지 슬라이딩을 위한 swiper js 라이브러리 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTLM5shiv ie6~8 -->
    <!--[if lt IE 9]> 
        <script src="assets/js/html5shiv.min.js"></script>
        <script type="text/javascript">
            alert("현재 브라우저는 지원하지 않습니다. 크롬 브라우저를 추천합니다.");
        </script>
    <![endif]-->
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">앨범</th>
                <th scope="col">장르</th>
                <th scope="col">발매일</th>
            </tr>
        </thead>
        <tbody>
<?php
while($row = mysqli_fetch_assoc($result)) {
echo"   <tr>
        <th scope=\"row\"></th>
        <td>".$row["music_name"]."</td>
        <td>".$row["music_melodizer"]."</td>
        <td>".$row["music_lyricist"]."</td>
    </tr>";
}
?>
        </tbody>
    </table>
</body>
</html>