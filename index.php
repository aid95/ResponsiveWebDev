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

    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- 웹폰트 가져오기 -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900" rel="stylesheet">
    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- 메인화면 이미지 슬라이딩을 위한 swiper js 라이브러리 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">

    <!-- HTLM5shiv ie6~8 -->
    <!--[if lt IE 9]> 
        <script src="assets/js/html5shiv.min.js"></script>
        <script type="text/javascript">
            alert("현재 브라우저는 지원하지 않습니다. 크롬 브라우저를 추천합니다.");
        </script>
    <![endif]-->
</head>
<body>
    <section id="banner">
        <div class="banner_menu">
            <h2 class="ir_so">트렌드 음악 소식</h2>
            <div class="container">
                <div class="row">
                    <div class="bm_right">
                        <ul>
                            <li class="line"><a href="#" target="_blank" rel="noopener noreferrer">공지사항</a></li>
                            <li class="line"><a href="#" target="_blank" rel="noopener noreferrer">고객센터</a></li>
                            <li class="line"><a href="#" target="_blank" rel="noopener noreferrer">회원가입</a></li>
                            <li><a href="#" target="_blank" rel="noopener noreferrer">로그인</a></li>
                            <li class="blue"><a href="#" target="_blank" rel="noopener noreferrer">사이트맵</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="assets/img/banner.jpg" alt="배너1"></div>
                    <div class="swiper-slide"><img src="assets/img/banner.jpg" alt="배너2"></div>
                    <div class="swiper-slide"><img src="assets/img/banner.jpg" alt="배너3"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- //banner -->

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="header clearfix">
                    <h1>
                        <a href="#">
                            <em><img src="assets/img/logo.png" alt=""></em>
                            <strong><img src="assets/img/logo-sub.png" alt=""></strong>
                        </a>
                    </h1>
                    <nav class="nav">
                        <ul class="clearfix">
                            <li><a href="http://" target="_blank" rel="noopener noreferrer">소개</a></li>
                            <li><a href="http://" target="_blank" rel="noopener noreferrer">음악</a></li>
                            <li><a href="http://" target="_blank" rel="noopener noreferrer">콘서트</a></li>
                            <li><a href="http://" target="_blank" rel="noopener noreferrer">게시판</a></li>
                            <li><a href="http://" target="_blank" rel="noopener noreferrer">DJ 광장</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- //header -->
    
    <section id="content_m">
        <div class="container">
            <div class="row">
                <!-- //음악정보를 위한 틀 -->
                <div class="play_list">
                    <ul class="m_box">
                        <!-- //한줄에 최대 5개 -->
                        <li>
                            <div class="m_thumb">
                                <img src="./assets/img/bol4_1.jpg" alt="">
                            </div>
                            <div class="m_entry">
                                <div class="m_info">

                                </div>
                                <div class="m_tags">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="m_thumb">
                                <img src="./assets/img/bol4_2.jpg" alt="">
                            </div>
                            <div class="m_entry">
                                <div class="m_info">

                                </div>
                                <div class="m_tags">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="m_thumb">
                                <img src="./assets/img/bol4_3.jpg" alt="">
                            </div>
                            <div class="m_entry">
                                <div class="m_info">

                                </div>
                                <div class="m_tags">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="m_thumb">
                                <img src="./assets/img/rv_1.jpg" alt="">
                            </div>
                            <div class="m_entry">
                                <div class="m_info">

                                </div>
                                <div class="m_tags">

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="m_thumb">
                                <img src="./assets/img/rv_2.jpg" alt="">
                            </div>
                            <div class="m_entry">
                                <div class="m_info">

                                </div>
                                <div class="m_tags">

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //m_content -->

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