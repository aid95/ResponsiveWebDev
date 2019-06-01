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
            <a class="navbar-brand" href="#">Navbar</a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02"> 
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
                    <li class="nav-item active"> 
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> 
                    </li> 
                    <li class="nav-item"><a class="nav-link" href="#">Link</a> </li>
                    <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
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
                    <div class="swiper-slide"><img src="assets/img/banner.jpg" alt="배너2"></div>
                    <div class="swiper-slide"><img src="assets/img/banner.jpg" alt="배너2"></div>
                    <div class="swiper-slide"><img src="assets/img/banner.jpg" alt="배너2"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- //banner -->

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="m-thumb">
                    <img src="assets/img/bol4_1.jpg" alt="볼 빨간 사춘기1">
                </div>
                <div class="m-entry"></div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="m-thumb">
                    <img src="assets/img/bol4_1.jpg" alt="볼 빨간 사춘기1">
                </div>
                <div class="m-entry"></div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="m-thumb">
                    <img src="assets/img/bol4_1.jpg" alt="볼 빨간 사춘기1">
                </div>
                <div class="m-entry"></div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="m-thumb">
                    <img src="assets/img/bol4_1.jpg" alt="볼 빨간 사춘기1">
                </div>
                <div class="m-entry"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12"></div>
        </div>
    </div>

    <script src="assets/js/jquery.min_1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script>
        $(document).ready(function () {
            //initialize swiper when document ready
            var mySwiper = new Swiper ('.swiper-container', {
                // Optional parameters
                direction: 'horizontal',
                loop: true
            })
        });
    </script>
    <!-- //Javascripts -->
</body>
</html>