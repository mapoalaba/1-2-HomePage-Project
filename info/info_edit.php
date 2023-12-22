<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내 정보</title>
    <link rel="stylesheet" href="info_edit.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script type="text/javascript">
    function edit_check(){
var pwd = document.getElementById("pwd");
var pwd_re = document.getElementById("pwd_re");

if(pwd.value == ""){
var err_txt = document.querySelector(".err_id");
alert('비밀번호를 입력하세요.');
pwd.focus();
return false;
};
var pwd_len = pwd.value.length;
if( pwd_len < 4 || pwd_len > 12){
var err_txt = document.querySelector(".err_id");
alert('비밀번호는 4~12글자만 입력할 수 있습니다.');
pwd.focus();
return false;
};

if(pwd_re.value == ""){
var err_txt = document.querySelector(".err_pwd_re");
alert('비밀번호를 다시 입력하세요.');
pwd_re.focus();
return false;
};
var pwd_re_len = pwd_re.value.length;
if( pwd_re_len < 4 || pwd_re_len > 8){
var err_txt = document.querySelector(".err_pwd_re");
alert('비밀번호는 4~8글자만 입력할 수 있습니다.');
pwd_re.focus();
return false;
};
};
</script>
</head>
<body>
<?php
    session_start();
    $u_id = $_SESSION['u_id'];
    $sql = "SELECT * FROM memlist WHERE u_id='$u_id'";
?>
    <div id="nav">
        <a href="../main/main.php">
        <img src="../img/logo.png" alt="logo">
        </a>
        <a href="../me/me.php">
        <h4>선생님 소개</h4></a>
        <a href="../board/board.php">
        <h4>게시판</h4></a>
        <a href="../sign_in/logout.php">
        <h4>로그아웃</h4></a>
        <a href="info_edit.php">
        <h4>내 정보</h4></a>
        <div id="links">
            <a href="https://www.instagram.com/_7_e7_/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://mapoalaba.github.io/" target="_blank"><i class="ri-github-fill"></i></a>
            <a href="https://www.tiktok.com/@_ferro_cat" target="_blank"><i class="ri-tiktok-fill"></i></a>
        </div>
    </div>
<form name="edit_form" action="edit_ok.php" method="post" onsubmit="return edit_check()">
<fieldset>
    <p>
        <label for="u_id">아이디 : <?=$u_id?></label>
    </p>
    <p>
        <label for="pwd" class="txt">수정할 비밀번호</label>
        <input type="password" required name="pwd" id="pwd" class="pwd">
        <br>
    </p>

    <p>
        <label for="pwd_re" class="txt">비밀번호 확인</label>
        <input type="password" required name="pwd_re" id="pwd_re" class="pwd_re">
        <br>
        <span class="err_repwd"></span>
    </p>
    <p class="btn_wrap">
        <button type="button" class="btn" onclick="history.back()">이전으로</button>
        <button type="button" class="btn" onclick="location.href='../main/main.php'">홈으로</button>
        <button type="submit" class="btn">정보수정</button>
    </p>
</fieldset>
</form>
    <video autoplay loop muted src="../img/m.mp4"></video>
</body>
</html>