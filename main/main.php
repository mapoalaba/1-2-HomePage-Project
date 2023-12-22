<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>키즈런</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
?>
    <div id="nav">
        <a href="main.php">
        <img src="../img/logo.png" alt="logo">
        </a>
        <a href="../me/me.php">
        <h4>선생님 소개</h4></a>
        <a href="../board/board.php">
        <h4>게시판</h4></a>
        <?php if(!isset($_SESSION['u_id'])){
        echo '<a href="../sign_in/sign_in.php">';
        echo '<h4>로그인</h4></a>';
        echo '<a href="../sign_up/sign_up.php">';
        echo '<h4>회원 가입</h4></a>';
        }else{
        echo '<a href="../sign_in/logout.php">';
        echo '<h4>로그아웃</h4></a>';
        echo '<a href="../info/info_edit.php">';
        echo '<h4>내 정보</h4></a>';            
        }?>
        <div id="links">
            <a href="https://www.instagram.com/_7_e7_/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://mapoalaba.github.io/" target="_blank"><i class="ri-github-fill"></i></a>
            <a href="https://www.tiktok.com/@_ferro_cat" target="_blank"><i class="ri-tiktok-fill"></i></a>
        </div>
    </div>
    <video autoplay loop muted src="../img/m.mp4"></video>
    <div id="main">
        <div id="page1">
            <h1>밝고, 즐겁고, 행복하게</h1>
            <h2>성장기 아이들에게 필요한건 웃음!</h2>
            <p>아이들은 때론 뛰어놀아야 올바른 사회성과 리더쉽이 길러집니다. 하지만 요즘 아이들은 매일 앉아있는게 대부분이죠. 아이들의 건강을 위해 체계적으로 교육받은 잘큼 선생님들에게 아이들을 믿고 맡겨주세요!</p>
        </div>
        <div id="page2">
            <div id="scroller">
                <div id="scroller-in">
                    <h4>애들아!</h4>
                    <h4>그냥</h4>
                    <h4>와서</h4>
                    <h4>즐기기만 해</h4>
                </div>
                <div id="scroller-in">
                    <h4>애들아!</h4>
                    <h4>그냥</h4>
                    <h4>와서</h4>
                    <h4>즐기기만 해</h4>
                </div>
            </div>
            <div id="about-us">
                <img src="../img/a.JPG" alt="">
                <div id="about-us-in">
                    <h3>키즈런이란 ?</h3>
                    <p>요즘 아이들은 학교와 학원에서 공부만 하거나, 게임으로 대부분의 시간을 보내기에 밖에서 뛰어놀고 활동을 많이 못합니다. 물론 학업도 중요하지만 몸으로 활동하며 길러지는 리더쉽과 창의력, 신체의 건강도 매우 중요하기에 만들어진 프로그램이 바로 " 키즈런 " 입니다.</p>
                </div>
                <img src="../img/b.jpg" alt="">
            </div>
            <div id="cards-container">
                <div class="card" id="card1" style="background-image: url('../img/f.jpg')">
                    <div class="overlay">
                        <h4>물놀이</h4>
                        <p>여름은 역시 물놀이 미만잡~</p>
                    </div>
                </div>
                <div class="card" id="card2" style="background-image: url('../img/g.jpg')">
                    <div class="overlay">
                        <h4>문예</h4>
                        <p>본인이 직접 만들어보고 배우는 종이접기!</p>
                    </div>
                </div>
                <div class="card" id="card3" style="background-image: url('../img/h.jpg')">
                    <div class="overlay">
                        <h4>박물관 탐방</h4>
                        <p>직접 박물관안에서 유물을 찾아다니면서 배우는 역사!</p>
                    </div>
                    </div>
            </div>
            <div id="green-div">
                <img src="../img/green.svg" alt="">
                <h4>회원가입을 하시고 키즈런 프로그램 이용권으로 아이들에게 행복한 추억을 만들어주세요!</h4>
                <img src="../img/green2.svg" alt="">
            </div>
        </div>
        <div id="page3">
            <p>멋지고 착하고 상냥하고 멋진 22살의 에너지가 넘쳐흐르는 선생님이 아이들을 목빠지게 기다리고 있습니다. 선생님의 목이 빠지지 않도록 프로그램 이용권을 구입해주세요!</p>
            <img id="colon1" src="../img/left.svg" alt="">
            <img id="colon2" src="../img/right.svg" alt="">
        </div>
        <div id="page4">
            <h1>어머님 고민하는 시간도 돈입니다.</h1>
            <div class="elem">
                <h2>Activity</h2>
                <img src="../img/q1.jpg" alt="">
            </div>
            <div class="elem">
                <h2>Mini Game</h2>
                <img src="../img/q2.jpg" alt="">
            </div>
            <div class="elem">
                <h2>Sleep</h2>
                <img src="../img/q3.jpg" alt="">
            </div>
        </div>
        <div id="footer">
            <img src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-footer.svg" alt="">
            <div id="f1">
                <img src="../img/logo.png" alt="">
            </div>
            <div id="f2">
                <h3>아쿠아볼</h3>
                <h3>파크레이스</h3>
                <h3>뮤지엄전</h3>
            </div>
            <div id="f3">
                <h3>캠퍼스레이스</h3>
                <h3>파크뮤</h3>
                <h3>해피원데이</h3>
            </div>
            <div id="f4">
                <h4>
                    2023.09.21 <br>
                    메인페이지 제작 완료 <br>
                    사진 : 내가 찍음 <br><br>
                    (주) 잘큼센터 키즈런
                </h4>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="main.js"></script>
</body>
</html>