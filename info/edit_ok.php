<?php
/* 세션 시작 */
session_start();

include "../board/board_db.php";

$pwd = $_POST["pwd"];
$pwd_re = $_POST["pwd_re"];

if($pwd == $pwd_re){
    $sql = mq("UPDATE memlist SET pwd='$pwd'");
    echo "
    <script type=\"text/javascript\">
        alert(\"정보가 수정되었습니다.\");
        location.href = \"../sign_in/sign_in.php\";
    </script>
";
} else{
    echo ("비밀번호가 일치하지 않습니다.");
};
?>