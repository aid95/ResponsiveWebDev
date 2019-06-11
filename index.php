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
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#" style="font-family: 'yg-jalnan'; color: #3c99dc;">웨이브</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">홈 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">고객지원</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">카테고리</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled" href="#">아티스트 랭킹</a>
                            <a class="dropdown-item" href="magazine.php">매거진</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item disabled" href="#">빈 공간</a>
                        </div>
                    </li>
                    <li class="nav-item">
<?php
if (!isset($_SESSION["user_nick"]))
echo "                        <a class=\"nav-link\" href=\"login.php\">로그인</a>";
else
echo "                        <p class=\"nav-link\" href=\"login.php\">".$_SESSION["user_nick"]."님 안녕하세요! <a href=\"logout.php\">로그아웃</a></p>";
?>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- //header -->

    <div class="container-fluid">
        <div class="row">
                <div class="col-xs-12" style="width:100%; height:100%;">
                    <!— Slider main container —>
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="assets/img/cover_1.jpg" alt="배너2"></div>
                        <div class="swiper-slide"><img src="assets/img/cover_2.jpg" alt="배너2"></div>
                        <div class="swiper-slide"><img src="assets/img/cover_3.jpg" alt="배너2"></div>
                        <div class="swiper-slide"><img src="assets/img/cover_4.jpg" alt="배너2"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Banner -->

    <div class="container-fluid" style="background-color: #f2f2f2; padding: 20px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="width:100%; height:100%;">
                    <div class="pb-2 mt-4 mb-2 ml-3 mr-3 border-bottom">
                        <h1 class="conts-title">🎼 오늘의 추천음악!!</h1>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-6 col-md-3">
                    <div class="m-box">
                        <div class="m-thumb">
                            <img src="assets/img/bol4_1.jpg" alt="볼 빨간 사춘기1">
                        </div>
                        <div class="m-entry pt-20 pb-20">
                            <div class="m-info">
                                <h3><a href="#">볼 빨간 사춘기1123123123123123</a></h3>
                            </div>
                            <div class="m-tags-list">
                                <div class="c-tag">
                                    <span class="badge badge-info">달달함</span>
                                    <span class="badge badge-info">산뜻함</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-6 col-md-3">
                    <div class="m-box">
                        <div class="m-thumb">
                            <img src="assets/img/bol4_2.jpg" alt="볼 빨간 사춘기1">
                        </div>
                        <div class="m-entry pt-20 pb-20">
                            <div class="m-info">
                                <h3><a href="#">볼 빨간 사춘기1123123123123123</a></h3>
                            </div>
                            <div class="m-tags-list">
                                <div class="c-tag">
                                    <span class="badge badge-info">달달함</span>
                                    <span class="badge badge-info">산뜻함</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-6 col-md-3">
                    <div class="m-box">
                        <div class="m-thumb">
                            <img src="assets/img/bol4_3.jpg" alt="볼 빨간 사춘기1">
                        </div>
                        <div class="m-entry pt-20 pb-20">
                            <div class="m-info">
                                <h3><a href="#">볼 빨간 사춘기1123123123123123</a></h3>
                            </div>
                            <div class="m-tags-list">
                                <div class="c-tag">
                                    <span class="badge badge-info">달달함</span>
                                    <span class="badge badge-info">산뜻함</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-6 col-md-3">
                    <div class="m-box">
                        <div class="m-thumb">
                            <img src="assets/img/rv_1.jpg" alt="볼 빨간 사춘기1">
                        </div>
                        <div class="m-entry pt-20 pb-20">
                            <div class="m-info">
                                <h3><a href="#">볼 빨간 사춘기1123123123123123</a></h3>
                            </div>
                            <div class="m-tags-list">
                                <div class="c-tag">
                                    <span class="badge badge-info">달달함</span>
                                    <span class="badge badge-info">산뜻함</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Today recommend music -->
    
    <div class="container-fluid" style="padding: 20px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="width:100%; height:100%;">
                    <div class="pb-2 mt-4 mb-2 ml-3 mr-3 border-bottom text-right">
                        <h1 class="conts-title">🎉 진행중인 이벤트</h1>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="col-sm-12" style="background-color: #f1f1f1; height: 400px;">
                        <p>1</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="col-sm-12" style="background-color: #c1c1c1; height: 200px;">
                        <p>2</p>
                    </div>
                    <div class="col-sm-12" style="background-color: #919191; height: 200px;">
                        <p>3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //event list -->

    <section class="scene one">
        <header>
            <h1>Lorem ipsum dolor sit amet.</h1> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam suscipit sint ab beatae nihi
        </header>
    </section>
    <!-- //parallax scroll background -->

    <div class="container-fluid" style="padding: 20px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="width:100%; height:100%;">
                    <div class="pb-2 mt-4 mb-2 ml-3 mr-3 border-bottom">
                        <h1 class="conts-title">🌈 파트너 사이트</h1>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="col-sm-12" style="background-color: #f1f1f1; height: 400px;">
                        <p>1</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="col-sm-12" style="background-color: #c1c1c1; height: 200px;">
                        <p>2</p>
                    </div>
                    <div class="col-sm-12" style="background-color: #919191; height: 200px;">
                        <p>3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Partner links -->

    <div class="container-fluid" style="padding: 20px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="width:100%; height:100%;">
                    <ul class="comp-nav">
                        <li class="nav-line">회사소개</li>
                        <li class="nav-line">채용정보</li>
                        <li class="nav-line">제휴/광고 문의</li>
                        <li class="nav-line">이용약관</li>
                        <li class="nav-line">개인정보 처리방침</li>
                        <li>고객센터</li>
                    </ul>
                </div>
                <div class="col-xs-12">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- //About me -->

    <script src="assets/js/jquery.min_1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script>
        $(document).ready(function () {
            //initialize swiper when document ready
            var mySwiper = new Swiper ('.swiper-container', {
                // Optional parameters
                direction: 'horizontal',
                loop: true
            });
        });
    </script>
    <!-- //Javascripts -->
</body>
</html>