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
                        <a class="nav-link disabled" href="#">로그인</a>
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
                    <div class="post_wrap">
                    </div>
                </div>
                <div class="col-md-4" style="width:100%; height:100%;">
                    <div class="pb-2 mt-4 mb-2 ml-3 mr-3 border-bottom">
                        <h1 class="side-title">다른 음악정보</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-5" style="padding: 20px 0 20px 0; background: #333; color: #fff;">
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
    <!-- //about me -->
</body>
</html>