<?php
	session_start();

    $user_id = $_POST["uid"];
    $user_password = $_POST["upw"];

    $login_fail = false;

    if (isset($_SESSION["user_id"]) && isset($_SESSION["user_nick"]))
    {
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }
    else if (isset($user_id) && isset($user_password))
    {
        $link = mysqli_connect("localhost", "kmuweb99", "ghavpdlwl1", "kmuweb99");
        mysqli_query($link, "SET NAMES utf8");
        $login_check_sql = "SELECT * FROM `wave_account` WHERE `user_id` = '".$user_id."' AND `user_password` = '".$user_password."'";
        $result = mysqli_query($link, $login_check_sql);

        if (mysqli_num_rows($result) > 0)
        {
            // login success
            $row = mysqli_fetch_assoc($result);
            $_SESSION["user_id"] = $user_id;
            $_SESSION["user_nick"] = $row["user_nick"];

            echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        }
        else {
            $login_fail = true;
        }
    }
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
	<div class="container-fluid" style="padding: 20px 0 20px 0;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12" style="margin: 0 auto; max-width: 480px;">
                    <div class="alert alert-danger" <?php if ($login_fail) { echo ""; } else { echo "style=\"visibility: hidden;\""; } ?>>
                        <strong>로그인 실패!</strong> 아이디와 비밀번호를 확인 후 다시 시도해주세요.
                    </div>
                    <div class="col-sm-12 text-center">
                        <p style="font-family: 'yg-jalnan'; font-size: 12px; color: #3c99dc;">파도치는 완소음악</p>
                    </div>
                    <div class="col-sm-12 text-center">
                        <p style="font-family: 'yg-jalnan'; font-size: 50px; color: #3c99dc;">웨이브</p>
                    </div>
                    <form method="POST">
                        <div class="col-sm-12">
                            <div class="mb-4">
                                <div class="col-sm-12" style="padding: 4px; border-bottom: 1px solid #3c99dc;">
                                    <input class="form-control mr-sm-2" name="uid" style="border: 0px solid #fff;" type="text" placeholder="아이디" aria-label="아이디">
                                </div>
                                <div class="col-sm-12" style="padding: 4px; border-bottom: 1px solid #3c99dc;">
                                    <input class="form-control mr-sm-2" name="upw" style="border: 0px solid #fff;" type="password" placeholder="비밀번호" aria-label="비밀번호">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary my-2 my-sm-0" type="submit" style="width: 100%;">로그인</button>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <button class="btn btn-success my-2 my-sm-0" type="submit" style="width: 100%;">회원가입</button>
                            </div>
                            <hr>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>