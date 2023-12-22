<?php
session_start();
$conn = mysqli_connect("localhost", "admin", "admin", "admin");
$filtered = array(
  'u_id'=>mysqli_real_escape_string($conn, $_POST['u_id']),
  'pwd'=>mysqli_real_escape_string($conn, $_POST['pwd'])
);

  $sql = "SELECT * FROM memlist";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)){
    if($row['u_id']==$filtered['u_id']){
      if($row['pwd']==$filtered['pwd']){
        $_SESSION['u_id'] = $row['u_id'];
        header('Location: ../main/main.php');

      }
    }
  }

  if(!$u_id){ // 아이디가 존재하지 않으면
    // 메세지 출력 후 이전 페이지로 이동
    echo "
        <script type=\"text/javascript\">
            alert(\"일치하는 계정이 없습니다.\");
            history.back();
        </script>
    ";
    exit;
} else{ // 아이디가 존재하면

    // DB에서 사용자 정보 가져오기
    $array = mysqli_fetch_array($result);
    // $g_idx = $array["idx"];
    // $g_u_name = $array["u_name"];
    // $g_u_id = $array["u_id"];
    $s_pwd = $array["pwd"];

    // 사용자가 입력한 비밀번호와 DB에 저장된 비밀번호가 일치하지 않는다면
    if($pwd != $g_pwd){
        echo "
            <script type=\"text/javascript\">
                alert(\"일치하는 계정이 없습니다.\");
                history.back();
            </script>
        ";
    exit;
    } else{ // 비밀번호가 일치한다면
        // 세션 변수 생성
        // $_SESSION["세션변수명"] = 저장할 값;
        $_SESSION["s_pwd"] = $array["pwd"];
        $_SESSION["s_id"] = $array["u_id"];
        // echo "idx : ".$_SESSION["s_idx"]." / "."NAME : ".$_SESSION["s_name"]." / "."ID : ".$_SESSION["s_id"];

        /* DB 연결 종료 */
        mysqli_close($dbcon);

        /* 페이지 이동 */
        echo "
            <script type=\"text/javascript\">
                location.href = \"../main2/main2.php\";
            </script>
        ";
    };
};
  if($success !=1){ 
    $success = 0;
?>
    <form action="sign_in.php" method="post">
      <h1>로그인에 실패했습니다. 다시 입력해주세요.</h1>
      <input type="hidden" name="success" value="<?=$success?>">
      <input type="submit" name="submit" value="메인창으로 돌아가기">
    </form>
<?php
  }
?>