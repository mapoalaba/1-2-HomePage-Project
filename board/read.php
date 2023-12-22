<?php session_start(); ?>
<?php include('board_db.php'); ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="read.css" />
<link rel="stylesheet" type="text/css" href="jquery-ui.css" />
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<script type="text/javascript" src="jquery-ui.js"></script>
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
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_form">
<div id="board_read">
	<h2><?php echo $board['title']; ?></h2>
		<div id="user_info">
			<?php echo $board['name']; ?> <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?> 추천수:<?php echo $board['thumbup']; ?>
				<div id="bo_line"></div>
			</div>
			<div id="bo_content">
				<?php echo nl2br("$board[content]"); ?>
			</div>
			<div id="bo_line2"></div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="board.php">[목록으로]</a></li>
            <li><a href="thumbup.php?idx=<?php echo $board['idx']; ?>">[추천]</a></li>
			<li><a href="modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
			<li><a href="delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
		</ul>
	</div>
</div>
<!--- 댓글 불러오기 -->
<div class="reply_view">
	<h3>댓글목록</h3>
	<?php
			$sql3 = mq("select * from reply where con_num='".$bno."' order by idx desc");
			while($reply = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo $reply['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
			</div>
		</div>
	<?php } ?>

	<!--- 댓글 입력 폼 -->
	<div class="dap_ins">
	<form action="reply_ok.php?idx=<?php echo $bno; ?>" method="post">
		<input type="hidden" name="bno" class="bno" value="<?php echo $bno; ?>">
			<input type="text" name="dat_user" id="dat_user" class="dat_user" size="15" placeholder="아이디">
			<input type="password" name="dat_pw" id="dat_pw" class="dat_pw" size="15" placeholder="비밀번호">
			<div style="margin-top:10px; ">
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button id="rep_bt" class="re_bt">댓글</button>
			</div>
			</form>
	</div>
</div><!--- 댓글 불러오기 끝 -->
</div>
<div id="foot_box"></div>
</div>
</body>
</html>