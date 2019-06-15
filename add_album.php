<?php
	session_start();
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

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- 웹폰트 가져오기 -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900" rel="stylesheet">
    <!-- JQUERY CDN -->
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

    <script>
        function valid_check() 
        {
            var obj_form = document.albumform;

            if (obj_form.album_name.value == "")
            {
                alert("앨범 이름을 입력해주세요.");
                return;
            }
            else if (obj_form.album_artist.value == "")
            {
                alert("아티스트를 입력해주세요.");
                return;
            }
            else if (obj_form.album_genre.value == "")
            {
                alert("장르를 입력해주세요.");
                return;
            }
            else {
                obj_form.submit();
            }
        }
    </script>
</head>
<body>
	<div class="container-fluid" style="padding: 20px 0 20px 0;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12" style="margin: 0 auto; max-width: 480px;">
                    <div class="col-sm-12 text-center">
                        <p style="font-family: 'yg-jalnan'; font-size: 12px; color: #3c99dc;">파도치는 완소음악</p>
                    </div>
                    <div class="col-sm-12 text-center">
                        <p style="font-family: 'yg-jalnan'; font-size: 50px; color: #3c99dc;">웨이브</p>
                    </div>
                    <div class="col-sm-12">
                        <form method="POST" action="add_album_proc.php" name="albumform" enctype="multipart/form-data">
                        <div class="mb-4">
                            <div class="col-sm-12" style="padding: 4px; border-bottom: 1px solid #3c99dc;">
                                <input class="form-control mr-sm-2" name="album_name" style="border: 0px solid #fff;" type="text" placeholder="앨범 이름" aria-label="앨범 이름">
                            </div>
                            <div class="col-sm-12" style="padding: 4px; border-bottom: 1px solid #3c99dc;">
                                <input class="form-control mr-sm-2" name="album_artist" style="border: 0px solid #fff;" type="text" placeholder="아티스트 이름" aria-label="아티스트 이름">
                            </div>
                            <div class="col-sm-12" style="padding: 4px; border-bottom: 1px solid #3c99dc;">
                                <input class="form-control mr-sm-2" name="album_date" style="border: 0px solid #fff;" type="date" placeholder="앨범 등록일" aria-label="앨범 등록일">
                            </div>
                            <div class="col-md-12 mt-2 mb-2"><label for="album_thumbnail">썸네일 이미지</label><input style="width: 100%;" type="file" id="article_thumbnail" name="article_thumbnail"></div>
                            <div class="col-sm-12" style="padding: 4px; border-bottom: 1px solid #3c99dc;">
                                <input class="form-control mr-sm-2" name="album_genre" style="border: 0px solid #fff;" type="text" placeholder="앨범 장르" aria-label="앨범 장르">
                            </div>
                        </div>
                        </form>
                        <div class="col-sm-12 mt-2">
                            <button class="btn btn-success my-2 my-sm-0" onclick="javascript:valid_check()" style="width: 100%;">새 앨범등록</button>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>