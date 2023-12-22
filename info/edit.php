<?php
session_start();

/* 로그인 사용자 */
$s_idx = $_SESSION["s_idx"];

/* DB 연결 */
include "../dbcon.php";

/* 쿼리 작성 */
$sql = "select * from members where idx=$s_idx;";

/* 쿼리 전송 */
$result = mysqli_query($dbcon, $sql);

/* 결과 가져오기 */
$array = mysqli_fetch_array($result);

?>