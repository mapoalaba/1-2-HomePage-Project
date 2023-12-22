<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인</title>
  <link rel="stylesheet" href="sign_in.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <script type="text/javascript">
function login_check(){
var u_id = document.getElementById("u_id");
var pwd = document.getElementById("pwd");

if(u_id.value == ""){
var err_txt = document.querySelector(".err_id");
alert('아이디를 입력하세요.');
u_id.focus();
return false;
};
var u_id_len = u_id.value.length;
if( u_id_len < 4 || u_id_len > 12){
var err_txt = document.querySelector(".err_id");
alert('아이디는 4~12글자만 입력할 수 있습니다.');
u_id.focus();
return false;
};

if(pwd.value == ""){
var err_txt = document.querySelector(".err_pwd");
alert('비밀번호를 입력하세요.');
pwd.focus();
return false;
};
var pwd_len = pwd.value.length;
if( pwd_len < 4 || pwd_len > 8){
var err_txt = document.querySelector(".err_pwd");
alert('비밀번호는 4~8글자만 입력할 수 있습니다.');
pwd.focus();
return false;
};
};
</script>
</head>
<body>
<?php
    session_start();
?>
    <div id="nav">
        <a href="../main/main.php">
        <img src="../img/logo.png" alt="logo">
        </a>
        <a href="../me/me.php">
        <h4>선생님 소개</h4></a>
        <a href="../board/board.php">
        <h4>게시판</h4></a>
        <a href="../sign_in/sign_in.php">
        <h4>로그인</h4></a>
        <a href="../sign_up/sign_up.php">
        <h4>회원 가입</h4></a>
        <div id="links">
            <a href="https://www.instagram.com/_7_e7_/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://mapoalaba.github.io/" target="_blank"><i class="ri-github-fill"></i></a>
            <a href="https://www.tiktok.com/@_ferro_cat" target="_blank"><i class="ri-tiktok-fill"></i></a>
        </div>
    </div>
    <form name="login_form" action="login_ok.php" method="post" onsubmit="return login_check()">
        <h2>로그인</h2>
         <p>
        <label for="u_id" class="txt">아이디</label>
        <input type="text" name="u_id" id="u_id" class="u_id" autofocus placeholder = "id">
        <br>
        <span class="err_id"></span>
      </p>
      <p>
        <label for="pwd" class="txt">비밀번호</label>
        <input type="password" name="pwd" id="pwd" class="pwd" placeholder = "password">
        <br>
        <span class="err_pwd"></span>
      </p>

      <p class="btn_wrap">
        <button type="submit" class="btn">로그인</button>
      </p>
         <a href="../sign_up/sign_up.php" class="ca">계정이 없으신가요 ?</a>
    </form>
    <video autoplay loop muted src="../img/m.mp4"></video>
</body>
</html>