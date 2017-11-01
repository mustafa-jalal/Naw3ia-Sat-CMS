<?php
include("include/config.php");
session_destroy();
echo"تم تسجيل خروجك ,نتمنى عودتك مرة اخرى";
echo "<meta charset='utf8'";
echo "
<META HTTP-EQUIV=\"Refresh\" CONTENT=\"5; url=index.php\">";
?>