<!--- 게시글 수정 -->
<?php session_start(); ?>
<?php
	include('board_db.php');
   
	$bno = $_GET['idx'];
	$sql = mq("select * from board where idx='$bno';");
	$board = $sql->fetch_array();
 ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="modify.css" />
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
            <div id="write_area">
                <form action="modify_ok.php?idx=<?php echo $bno; ?>" method="post">
                    <div id="in_title">
                        <textarea name="title" id="utitle" placeholder="제목" maxlength="100" required><?php echo $board['title']; ?></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <textarea name="name" id="uname" placeholder="글쓴이" maxlength="100" required><?php echo $board['name']; ?></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required><?php echo $board['content']; ?></textarea>
                    </div>
                    <div id="in_pw">
                        <input type="password" name="pw" id="upw"  placeholder="비밀번호" required />  
                    </div>
                    <div class="bt_se">
                        <button type="submit" id="bte">글 수정</button>
                    </div>
                </form>
            </div>
    </body>
</html>