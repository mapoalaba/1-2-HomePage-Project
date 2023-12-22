<?php

$conn = mysqli_connect("localhost", "admin", "admin", "admin");

	$userid = $_POST['u_id'];
	$userpw = $_POST['pwd'];
  $userpwre = $_POST['pwd_re'];

  $lengthid = mb_strlen($userid, 'utf-8');
  $lengthpw = mb_strlen($userpw, 'utf-8');

if (!$conn) {
  die("연결 실패 : " . mysqli_connect_error());
}
echo "연결 성공";
$sql = "INSERT INTO memlist VALUES('$userid','$userpw')";

if (mysqli_query($conn, $sql)) {
  echo "성공";
} else {
    echo "에러: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

if($userid == ""){
  echo "
      <script type=\"text/javascript\">
          alert(\"아이디를 입력하세요.\");
          history.back();
      </script>
  ";
  exit;
}
if($lengthid < 4 || $lengthid > 12){
  echo "
      <script type=\"text/javascript\">
          alert(\"아이디는 4~12글자만 입력할 수 있습니다.\");
          history.back();
      </script>
  ";
  exit;
}
if($userpw == ""){
  echo "
      <script type=\"text/javascript\">
          alert(\"비밀번호를 입력하세요.\");
          history.back();
      </script>
  ";
  exit;
}
if($lengthpw < 4 || $lengthpw > 8){
  echo "
      <script type=\"text/javascript\">
          alert(\"비밀번호는 4~8글자만 입력할 수 있습니다.\");
          history.back();
      </script>
  ";
  exit;
}
if($userpwre == ""){
  echo "
      <script type=\"text/javascript\">
          alert(\"비밀번호를 다시 입력하세요.\");
          history.back();
      </script>
  ";
  exit;
}
if($userpw !== $userpwre){
  echo "
      <script type=\"text/javascript\">
          alert(\"비밀번호가 일치하지 않습니다.\");
          history.back();
      </script>
  ";
  exit;
}

echo "
<script type=\"text/javascript\">
alert(\"회원가입에 성공하였습니다.\");
    location.href = \"../sign_in/sign_in.php\";
</script>";

?>