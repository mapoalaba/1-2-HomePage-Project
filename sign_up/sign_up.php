<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="../sign_in/sign_in.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<body>
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
    <form action="signup-check.php" name="regform" method="post">
        <h2>회원 가입</h2>

        <label for="u_id">아이디</label>
        <input type="text" name="u_id" id="u_id" class="u_id" placeholder="id">
        
        <label for="pwd">비밀번호</label>
        <input type="password" 
                name="pwd"
                id="pwd"
                placeholder="Password"><br>

         <label for="pwd_re">2차 입력</label>
         <input type="password" 
                name="pwd_re" 
                id="pwd_re"
                placeholder="Re_Password"><br>

        <button type="submit" id="signup-button">회원 가입</button>
         <a href="../sign_in/sign_in.php" class="ca">이미 계정이 있으신가요 ?</a>
    </form>
    <video autoplay loop muted src="../img/m.mp4"></video>
    <script src="../main/main.js"></script>
</body>
</html>