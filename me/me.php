<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>선생님 소개</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700'><link rel="stylesheet" href="me.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
</head>
<body>
  <?php
  session_start();
  ?>
      <div id="nav">
          <a href="../main/main.php" style="text-decoration:none">
          <img src="../img/logo.png" alt="logo">
          </a>
          <a href="me.php" style="text-decoration:none">
          <h4>선생님 소개</h4></a>
          <a href="../board/board.php" style="text-decoration:none">
          <h4>게시판</h4></a>
          <?php if(!isset($_SESSION['u_id'])){
          echo '<a href="../sign_in/sign_in.php" style="text-decoration:none">';
          echo '<h4>로그인</h4></a>';
          echo '<a href="../sign_up/sign_up.php" style="text-decoration:none">';
          echo '<h4>회원 가입</h4></a>';
          }else{
          echo '<a href="../sign_in/logout.php" style="text-decoration:none">';
          echo '<h4>로그아웃</h4></a>';
          echo '<a href="../info/info_edit.php" style="text-decoration:none">';
          echo '<h4>내 정보</h4></a>';            
          }?>
          <div id="links">
              <a href="https://www.instagram.com/_7_e7_/" style="text-decoration:none" target="_blank"><i class="ri-instagram-line"></i></a>
              <a href="https://mapoalaba.github.io/" style="text-decoration:none" target="_blank"><i class="ri-github-fill"></i></a>
              <a href="https://www.tiktok.com/@_ferro_cat" style="text-decoration:none" target="_blank"><i class="ri-tiktok-fill"></i></a>
          </div>
      </div>
<body data-spy="scroll" data-target="#navbar-example">


  <div class="wrapper" >

    <nav class="nav__wrapper" id="navbar-example">
      <ul class="nav">

        <li role="presentation" class="active">
          <a href="#section1">
            <span class="nav__counter">2007년</span>
            <h3 class="nav__title">6살</h3>
            <p class="nav__body"><strong>[ 귀여운 유치원 뽀찌래기 시절 ]</strong><br>권미경 선생님 사랑합니다. 아직도 이름이 잊혀지지 않아요.</p>
          </a>
        </li>

        <li role="presentation">
          <a href="#section2">
            <span class="nav__counter">2013년</span>
            <h3 class="nav__title">12살</h3>
            <p class="nav__body"><strong>[ 잼민이 그 잡채 시절 ]</strong><br>하루종일 놀아도 지치는 법을 모르던 그 시절. 안녕는 영원한 헤어짐은 아니겠지요~</p>
          </a>
        </li>

        <li role="presentation">
          <a href="#section3">
            <span class="nav__counter">2015년</span>
            <h3 class="nav__title">14살</h3>
            <p class="nav__body"><strong>[ 무적의 중학생 시절 ]</strong><br>King 너네 나 못이겨</p>
          </a>
        </li>
        
        <li role="presentation">
          <a href="#section4">
            <span class="nav__counter">2018년</span>
            <h3 class="nav__title">17살</h3>
            <p class="nav__body"><strong>[ 미필 남고생 시절 ]</strong><br>제일 재밌었고, 기억도 많이 남던 고등학교</p>
          </a>
        </li>
        
        <li role="presentation">
          <a href="#section5">
            <span class="nav__counter">2023년</span>
            <h3 class="nav__title">22살</h3>
            <p class="nav__body"><strong>[ 현재 진행형 ]</strong><br>봄, 여름, 가을에는 축구와 바이크<br>겨울엔 스키장으로 기릿!</p>
          </a>
        </li>
        
        <li role="presentation">
          <a href="#section6">
            <span class="nav__counter">번외</span>
            <h3 class="nav__title">3살</h3>
            <p class="nav__body"><strong>[ 페로 ]</strong><br>비오는날 죽어가던 아기 고양이<br>이 날 이후로 내 삶의 큰 변화가 생겼다.</p>
          </a>
        </li>
      </ul>
    </nav>

    <section class="section section1" id="section1">
          <div class="s_wrapper">
            <div class="item">
              <div class="polaroid">
                <img src="../img/1.jpg" alt="">
                <div class="caption">폴라 정석 포즈</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/2.jpeg" alt="">
                <div class="caption">확 마 !</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/3.jpeg" alt="">
                <div class="caption">오늘의 먹방은 ~?</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/4.jpeg" alt="">
                <div class="caption">스트롱보이</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/5.jpeg" alt="">
                <div class="caption">겨울은 군고구마 미만 잡</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/6.jpeg" alt="">
                <div class="caption">김치> <</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/9.jpeg" alt="">
                <div class="caption">저희 사귀는거 아닙니다 !</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/8.jpeg" alt="">
                <div class="caption">된장이 고소하이 처 즉이네 !</div>
              </div>
            </div>
          </div>
    </section>

    <section class="section section2" id="section2">
    <div class="s_wrapper">
            <div class="item">
              <div class="polaroid">
                <img src="../img/a1.jpg" alt="">
                <div class="caption">나도 했었지 박물관 탐방</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/a2.jpeg" alt="">
                <div class="caption">풍선껌 크게 불기 장인</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/a3.jpeg" alt="">
                <div class="caption">뭘 봐</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/a4.jpeg" alt="">
                <div class="caption">아는 형님의~ 아는 동생이요!</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/a5.jpg" alt="">
                <div class="caption">이을용의 축구 교실</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/a6.jpg" alt="">
                <div class="caption">초등학생이 이런 카리스마가</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/a7.jpg" alt="">
                <div class="caption">환자분 입 크게 벌리세요 ~</div>
              </div>
            </div>
          </div>
    </section>

    <section class="section section3" id="section3">
    <div class="s_wrapper">
            <div class="item">
              <div class="polaroid">
                <img src="../img/b1.jpg" alt="">
                <div class="caption">롯데월드에서 찰칵</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/b2.jpg" alt="">
                <div class="caption">수빈아 잘 지내지?</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/b3.jpg" alt="">
                <div class="caption">학교폭력 아님</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/b4.jpg" alt="">
                <div class="caption">축구부 회식 > <</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/b5.jpg" alt="">
                <div class="caption">이젠 안녕</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/b6.jpg" alt="">
                <div class="caption">고등학교 가서도 연락하자~ 국룰</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/b7.jpg" alt="">
                <div class="caption">길가다 육중완 만난썰 푼다</div>
              </div>
            </div>
          </div>
    </section>

    <section class="section section4" id="section4">
    <div class="s_wrapper">
            <div class="item">
              <div class="polaroid">
                <img src="../img/c1.jpg" alt="">
                <div class="caption">우승 미만 잡</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/c3.jpg" alt="">
                <div class="caption">우승 2222222</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/c4.jpg" alt="">
                <div class="caption">고1 회장 출신 홍화랑</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/c9.jpg" alt="">
                <div class="caption">노래방에서</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/c6.jpg" alt="">
                <div class="caption">소고기 회식 > <</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/c7.jpg" alt="">
                <div class="caption">돼지고기 회식 > <</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/c8.jpg" alt="">
                <div class="caption">수학여행 가고 싶어</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/c5.jpg" alt="">
                <div class="caption">얼 빡 샷</div>
              </div>
            </div>
          </div>
    </section>

    <section class="section section5" id="section5">
    <div class="s_wrapper">
            <div class="item">
              <div class="polaroid">
                <img src="../img/d1.jpg" alt="">
                <div class="caption">비발디에서 찰칵</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/d2.jpg" alt="">
                <div class="caption">땀흘리고 찰칵</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/d3.jpg" alt="">
                <div class="caption">슈퍼커브 잘 지내지 ?</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/d4.jpg" alt="">
                <div class="caption">귀엽고 깜찍하게 화랑 ~</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/d5.png" alt="">
                <div class="caption">텐덤의 매력</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/d6.jpeg" alt="">
                <div class="caption">패닝샷 감사합니다 > <</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/d7.jpeg" alt="">
                <div class="caption">양만장 갬성</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/d8.jpeg" alt="">
                <div class="caption">풋살 시작전</div>
              </div>
            </div>
          </div>
    </section>

    <section class="section section6" id="section6">
    <div class="s_wrapper">
            <div class="item">
              <div class="polaroid">
                <img src="../img/f5.jpg" alt="">
                <div class="caption">배까는게 취미</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/f6.jpg" alt="">
                <div class="caption">빼꼼</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/f7.jpg" alt="">
                <div class="caption">너 사람아니야?</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/f4.jpg" alt="">
                <div class="caption">떡잎부터 남다른 고냥이</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/f1.jpg" alt="">
                <div class="caption">쪼꼬미 시절</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/f3.jpg" alt="">
                <div class="caption">움직이면 깰까봐 못움직임 ㅋㅋ</div>
              </div>
            </div>

            <div class="item">
              <div class="polaroid">
                <img src="../img/f2.jpg" alt="">
                <div class="caption">내 옆에서 잘때가 제일 귀여워</div>
              </div>
            </div>
            <div class="outer">
  <script src="me.js"></script>
</body>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script  src="me.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="jquery.hislide.js" ></script>
</body>
</html>
