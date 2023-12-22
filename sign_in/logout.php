<?php
include "../board/board_db.php";
session_start();
session_unset();
echo "
<script type=\"text/javascript\">
    location.href = \"../main/main.php\";
</script>
";
?>
<meta http-equiv="refresh" content="0; url=/">