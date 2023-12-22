<?php session_start(); ?>
<?php include('board_db.php'); ?>
<!doctype html>
<head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" type="text/css" href="board.css" />
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
<?php
  /* 검색 변수 */
  $catagory = $_GET['catgo'];
  $search_con = $_GET['search'];
  $list = 10;
?>
    <?php if($catagory=='title'){
        $catname = '제목';
    } else if($catagory=='name'){
        $catname = '작성자';
    } else if($catagory=='content'){
        $catname = '내용';
    } ?>
  <h1><?php echo $catname; ?>:<?php echo $search_con; ?> 검색결과</h1>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>

        
        <?php
          $sql = mq("select * from board order by idx desc limit $list");  
          $sql2 = mq("select * from board where $catagory like '%$search_con%' order by idx desc");
          while($board = $sql2->fetch_array()){
           
          $title=$board["title"]; 
            if(strlen($title)>30)
              { 
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
            $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
            $rep_count = mysqli_num_rows($sql3);
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['idx']; ?></td>
          <td width="500">
            <?php 
              $lockimg = "<img src='../img/lock.png' alt='lock' title='lock' with='20' height='20' />";
              if($board['lock_post']=="1")
              { ?><a href='ck_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;
              }else{?>

        <!--- 추가부분 18.08.01 --->
        <?php
          $boardtime = $board['date']; //$boardtime변수에 board['date']값을 넣음
          $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음
          
          if($boardtime==$timenow){
            $img = "<img src='../img/new.png' alt='new' title='new' />";
          }else{
            $img ="";
          }
          ?>
        <!--- 추가부분 18.08.01 END -->
        <a href='read.php?idx=<?php echo $board["idx"]; ?>'>
        <span style="background:yellow;"><?php echo $title; }?></span>
        <span class="re_ct">[<?php echo $rep_count;?>]
        </span>
        </a>
        </td>
          <td width="120"><?php echo $board['name']?></td>
          <td width="100"><?php echo $board['date']?></td>
          <td width="100"><?php echo $board['hit']; ?></td>

        </tr>
      </tbody>
      <?php } ?>
    </table>
    <!-- 18.10.11 검색 추가 -->
    <div id="search_box">
      <form action="search_result.php" id = "s1" method="get">
      <select name="catgo" id="catgo">
        <option value="title">제목</option>
        <option value="name">글쓴이</option>
        <option value="content">내용</option>
      </select>
      <input type="text" required size="40"/> <button>검색</button>
    </form>
  </div>
</div>
</body>
</html>