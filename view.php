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
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light mt-5 mb-4">
            <a class="navbar-brand" href="#">웨이브</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">홈 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">고객지원</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">카테고리</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">아티스트 랭킹</a>
                            <a class="dropdown-item" href="#">매거진</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">빈 공간</a>
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
                <form class="form-inline my-2 my-lg-0">
                    <div class="search-box">
                        <input class="form-control mr-sm-2" style="border: 0px solid #fff;" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <div class="container-fluid" style="padding: 20px 0 20px 0; height: 1200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="width:100%; height:100%;">
                    <div class="pb-2 mt-4 mb-2 ml-3 mr-3 border-bottom">
                        <h1 class="side-title">웨이브 매거진</h1>
                    </div>
                    <div class="pb-2 mt-4 mb-2 ml-3 mr-3 post-wrap">
<h1><span>*TITLE</span> 레드벨벳 러시안 룰렛</h1>
<p class="text">Aliquip dolore do ut minim dolor velit excepteur et sint duis irure ea aliqua ut excepteur veniam deserunt voluptate quis occaecat sint aute amet cillum esse excepteur adipisicing ad consequat laborum culpa irure cupidatat ut et est id mollit laborum duis velit sit cillum aute ad deserunt nostrud sit officia tempor in dolore dolore eiusmod laboris nisi veniam eiusmod id id nostrud nostrud dolore elit laboris nostrud nostrud ut sit sunt et sit laboris qui deserunt in ea duis dolore nostrud sunt fugiat nulla aliquip dolor reprehenderit nostrud id in aliqua ut officia ad id consectetur exercitation deserunt irure dolore ad esse ea commodo laborum duis in incididunt nulla ut proident irure adipisicing eu in adipisicing minim ut cupidatat reprehenderit pariatur aute nostrud cupidatat cupidatat ea fugiat officia consectetur cupidatat nisi deserunt est excepteur dolore anim ea aliquip sit eu culpa nostrud non dolore ut cillum pariatur ut deserunt incididunt duis sunt incididunt sint sed cupidatat incididunt tempor in enim labore sed irure adipisicing aliquip amet ut non reprehenderit cupidatat cillum officia culpa id irure pariatur dolor ad in excepteur ut dolor ex in nisi minim exercitation adipisicing sint voluptate est incididunt eiusmod dolor laboris sit deserunt esse pariatur officia magna est velit sit consectetur adipisicing cillum dolore ea esse elit nostrud dolor.</p>
<h2><span>*Special</span> 레드벨벳 러시안 룰렛</h1>
<img class="mt-2 mb-2" src="assets/files/rv_2.jpg" alt="">
<img class="mt-2 mb-2" src="assets/files/rv_4.jpg" alt="">
<h3><span>*Music</span> 레드벨벳 러시안 룰렛</h1>
<div id="playobjwrap">
    <audio id="playmusicobj">
        <source src="assets/files/mp3/RedVelvet.mp3" type="audio/mpeg">
        <embed src="assets/files/mp3/RedVelvet.mp3" type="audio/mpeg" autoplay="false"></embed>
    </audio>
</div>

<p class="text">치명적으로 사랑스러운, Red Velvet의 매력
"Russian Roulette"은 일반적으로 음악 비평가들로부터 긍정적인 평가를 받았다. 빌보드의 제프 벤자민은 레드벨벳의 이전 곡인 Ice Cream Cake과 Dumb Dumb이 직선적이고 대담한 풍선껌이었던 것과는 달리, "Russian Roulette"은 곡에 칩튠을 합침으로써 다른 맛을 제공했으며, 이전 노래처럼 중독성 있는 반복적이고 거의 로봇과 같은 훅을 가지고 있다고 말했다. 데일리 도트의 세리 투치는 이 곡을 "뮤직비디오의 밝은 색이 보완하는 귀엽고 활발한 곡"이라고 말했다.</p>
<img class="mt-2 mb-2" src="assets/files/rv_1.jpg" alt="">
<p class="text">그녀는 멤버들의 보기 좋게 꾸민 목소리가 긍정적인 멜로디가 머릿속에 음악이 들어가도록 도와준다고 덧붙였다. 레드벨벳과의 인터뷰에서 데이즈드의 테일러 그라스비는 뮤직비디오과 달콤함과 위협의 해로운 조합을 가지고 있다고 말하며 이러한 개념을 끄집어내는 다른 이는 생각하기 어렵다고 말했다. 이 곡은 올해의 최고 K-pop 트랙 20에서 6위에 들었다. Tone Glow는 2016년 최고의 K-pop 30에서 이 곡을 9위에 선정했다.  뮤직비디오의 기저에 깔려있는 폭력성과 대조되는 멤버들의 밝은 표정과 귀여운 안무는 이 곡을 돋보이게 하는 아이러니가 아닐까 한다.</p>
<img src="assets/files/rv_3.jpg" alt="" class="mt-2 mb-2">
<p class="text">Aliquip dolore do ut minim dolor velit excepteur et sint duis irure ea aliqua ut excepteur veniam deserunt voluptate quis occaecat sint aute amet cillum esse excepteur adipisicing ad consequat laborum culpa irure cupidatat ut et est id mollit laborum duis velit sit cillum aute ad deserunt nostrud sit officia tempor in dolore dolore eiusmod laboris nisi veniam eiusmod id id nostrud nostrud dolore elit laboris nostrud nostrud ut sit sunt et sit laboris qui deserunt in ea duis dolore nostrud sunt fugiat nulla aliquip dolor reprehenderit nostrud id in aliqua ut officia ad id consectetur exercitation deserunt irure dolore ad esse ea commodo laborum duis in incididunt nulla ut proident irure adipisicing eu in adipisicing minim ut cupidatat reprehenderit pariatur aute nostrud cupidatat cupidatat ea fugiat officia consectetur cupidatat nisi deserunt est excepteur dolore anim ea aliquip sit eu culpa nostrud non dolore ut cillum pariatur ut deserunt incididunt duis sunt incididunt sint sed cupidatat incididunt tempor in enim labore sed irure adipisicing aliquip amet ut non reprehenderit cupidatat cillum officia culpa id irure pariatur dolor ad in excepteur ut dolor ex in nisi minim exercitation adipisicing sint voluptate est incididunt eiusmod dolor laboris sit deserunt esse pariatur officia magna est velit sit consectetur adipisicing cillum dolore ea esse elit nostrud dolor.</p>
<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sapiente, totam voluptate dolor fugiat corporis necessitatibus quisquam ab porro ipsam reprehenderit magnam doloremque veritatis ad dolore non eligendi, sunt eum.</p>
                    </div>
                </div>
                <div class="col-md-4" style="width:100%; height:100%;">
                    <div class="pb-2 mt-4 mb-2 ml-3 mr-3 border-bottom">
                        <h1 class="side-title">다른 음악정보</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4 mb-4">
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
        <!-- //about me -->
    </div>
    <script>
        <!-- //ref https://stackoverflow.com/questions/487073/how-to-check-if-element-is-visible-after-scrolling -->
        function Utils() {

        }

        Utils.prototype = {
            constructor: Utils,
            isElementInView: function (element, fullyInView) {
                var pageTop = $(window).scrollTop();
                var pageBottom = pageTop + $(window).height();
                var elementTop = $(element).offset().top;
                var elementBottom = elementTop + $(element).height();

                if (fullyInView === true) {
                    return ((pageTop < elementTop) && (pageBottom > elementBottom));
                } else {
                    return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
                }
            }
        };

        var Utils = new Utils();
        var isPlay = false;
        $( document ).ready(function() {
            $( window ).scroll(function() {
                var isElementInView = Utils.isElementInView($('#playobjwrap'), false);
                if (isElementInView) {
                    if (!isPlay) {
                        isPlay = true;
                        document.getElementById("playmusicobj").play();
                    }
                } else {
                    if (isPlay) {
                        document.getElementById("playmusicobj").pause();
                        isPlay = false;
                    }
                }
            });
        });
    </script>
</body>
</html>