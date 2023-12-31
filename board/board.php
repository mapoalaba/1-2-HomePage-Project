<?php session_start(); ?>
<?php include('board_db.php'); ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="board.css?after">
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div id="nav"> 
        <a href="../main/main.php">
        <img src="../img/logo.png" alt="logo">
        </a>
        <a href="../me/me.php">
        <h4>선생님 소개</h4></a>
        <a href="board.php">
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
<div id="board_area"> 
<div id="search_box">
  <form action="search_result.php" id="search_opt" method="get">
    <select name="catgo" id="catgo">
      <option value="title">제목</option>
      <option value="name">글쓴이</option>
      <option value="content">내용</option>
    </select>
    <input type="text" required name="search" id="search" size="40"/> <button>검색</button>
  </form>
</div>
  <table class="list-table">
    <thead>
        <tr>
            <th width="70">번호</th>
              <th width="500">제목</th>
              <th width="120">글쓴이</th>
              <th width="100">작성일</th>
              <!-- 추천수 항목 추가 -->
              <th width="100">조회수</th>
              <th width="100">추천수</th>
          </tr>
      </thead>
      <?php
         if(isset($_GET['page'])){
          $page = $_GET['page'];
            }else{
              $page = 1;
            }
              $sql = mq("select * from board");
              $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
              $list = 10; //한 페이지에 보여줄 개수
              $block_ct = 5; //블록당 보여줄 페이지 개수

              $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
              $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
              $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

              $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
              if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
              $total_block = ceil($total_page/$block_ct); //블럭 총 개수
              $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

              $sql2 = mq("select * from board order by idx desc limit $start_num, $list");  
              
              while($board = $sql2->fetch_array()){
                $title=$board["title"]; 
                  if(strlen($title)>30)
                  { 
                    $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
                  }
                  $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                  $rep_count = mysqli_num_rows($sql3);
                ?>
      <?php
      // board테이블에서 idx를 기준으로 내림차순해서 10개까지 표시
            // 댓글 수
            $con_idx = $board["idx"];
            $reply_count = mq("SELECT COUNT(*) as cnt FROM reply where con_num=$con_idx");
            $con_reply_count = $reply_count->fetch_array();
      ?>
    <tbody>
      <tr>
        <td width="70"><?php echo $board['idx']; ?></td>
        <td width="500"><?php
        $lockimg = "<img src='../img/lock.jpg' alt='' title='lock' with='20' height='20' />";
        $boardtime = $board['date'];
        $timenow = date("Y-m-d");

        if($boardtime==$timenow){
          $img = "<img src='../img/new.png' alt='new' title='new'/>";
        }else{
          $img ="";
        }

        if($board['lock_post']=="1")
        { ?><a href='ck_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;
        }else{  ?>
        <a href='read.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title; }?><span class="re_ct">[<?php echo $rep_count; ?>]</span></a>
      <td width="120"><?php echo $board['name']?></td>
        <td width="100"><?php echo $board['date']?></td>
        <td width="100"><?php echo $board['hit']; ?></td>
        <!-- 추천수 표시해주기 위해 추가한 부분 -->
        <td width="100"><?php echo $board['thumbup']?></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
  <!-- 페이지 넘버링 -->
  <div id="page_num">
      <ul>
        <?php
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면
            echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시 
          }else{
            echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
          }
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면 빈값
            
          }else{
          $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
            echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
          }
          for($i=$block_start; $i<=$block_end; $i++){ 
            //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
            if($page == $i){ //만약 page가 $i와 같다면 
              echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
            }else{
              echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
            }
          }
          if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
          }else{
            $next = $page + 1; //next변수에 page + 1을 해준다.
            echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
          }
          if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
            echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
          }else{
            echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
          }
        ?>
      </ul>
    </div>
    <div id="write_btn">
    <a href="write.php"><button>글쓰기</button></a>
  </div>
</div>
</body>
</html>