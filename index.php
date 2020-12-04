<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
</head>
<body>
    
    <div id="wrap">

        <?php 
        session_start();
        if ( isset($_SESSION['userid']) ) { 
            $userid = $_SESSION['userid']; 
            $username = $_SESSION['name']; 
        } else { $userid = ''; }
        ?>

        <header id="header">
            <div class="topMenu">
                <div id="navWrap">
                    <nav id="lnb">
                        <div class="lnbLogoBox">
                            <a href="index.php" class="lbnLogo">
                                <img src="images/mountain.png" alt="">
                            </a>
                        </div>
                        <div class="member">
                        <?php if(!$userid) { ?>
                        <div class="inBtn loginBtn"><a href="login_form.php">로그인</a></div>
                        <div class="inBtn joinBtn"><a href="join.html">회원가입</a></div>
                        <?php } else { ?>
                        <div class="inBtn"><?php echo $username ?>님 환영합니다.</div>
                        <div class="inBtn"><a href="logout.php">로그아웃</a></div>
                        <div class="inBtn"><a href="#none">정보수정</a></div>
                        <?php } ?>
                        </div>

                        <ul class="menuBox">
                            <li><a href="mountainList.html" class="seoul">명산 100</a></li>
                            <li><a href="mountainMap.html">산행지도</a></li>
                            <li><a href="info.html">산행정보</a></li>
                            <li><a href="notice.html">게시판</a></li>
                        </ul>
                        <div id="lnb_close" class="lnb_close">
                            <i class="fas fa-times"></i>
                        </div>
                    </nav>
                </div>
                <h1 class="logo">
                    <a href="index.php">
                        <img src="images/mountain.png" alt="">
                    </a>
                </h1>
                <div id="topIcon">
                    <a href="#" class="search">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="#" class="menu">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
        </header>
    
        <section id="container">
            <div id="content" class="cf">
                <div id="step_area">
                    <div class="bwrap">
                        <div class="topImg">
                            <!-- <img src="/images/mountaineer.png" alt=""> -->
                        </div>
                        <div class="main_noti">
                            <a href="#"><i class="fas fa-exclamation-circle"></i> 강원 산간지역 폭설..대청봉 45㎝</a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i> 설악산 대청봉 구간 등산로 5곳 폭설로 통제</a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i> 폭설로 폐쇄한 설악산 대피소 개방…비선대만 통행 가능</a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i> 설악산국립공원, 폭설로 탐방로 부분통제</a>
                    </div>
                        <div class="setArea">
                            <a href="mountainList.html" class="btn1">
                                <i class="fas fa-mountain"></i><div class="">명산 100</div>
                            </a>
                            <a href="mountainMap.html" class="btn2">
                                <i class="fas fa-map"></i><div class="">산행지도</div>
                            </a>
                            <a href="info.html" class="btn3">
                                <i class="fas fa-route"></i><div class="">산행정보</div>
                            </a>
                            <a href="notice.html" class="btn4">
                                <i class="fas fa-clipboard-list"></i><div class="">게시판</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    
        <footer id="footer">
            <div class="footer-bottom">
                <div class="sns">
                    <a href="#" target="_blank"><span class="blind">유튜브</span><i class="fab fa-youtube-square"></i></a>
                    <a href="#" target="_blank"><span class="blind">인스타그램</span><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><span class="blind">페이스북</span><i class="fab fa-facebook-square"></i></a>
                </div>
            </div>
            <div class="cs">
                <a href="tel:010-3129-3426">문의전화 : 010-3129-3426</a>
            </div>
            <div class="privacy">
                <a href="#">이용약관</a>
                <a href="#">개인정보처리방침</a>
                <a href="#">이메일무단수집거부</a>
            </div>            
            <div class="copyright">Copyright &copy; sample name. All rights reserved.</div>
        </footer>
    </div>
    </div>

    <div class="loadingOut">
        <div class="loading">
            <span style="font-weight: bold;">Only Mobile</span>
          </div>
    </div>

    <script src="js/mobile_port.js"></script>
</body>
</html>