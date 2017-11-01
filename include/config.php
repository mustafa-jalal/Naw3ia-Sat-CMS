<?php
session_start();
$con=mysql_connect("localhost","root","root");
if (!$con) {echo "غير قادر على الاتصال بقاعدة ةالبيانات الرجا مراسلة الادارة بهذا الخطأ <a href='connect.php'>من هنا</a>";}
mysql_select_db("naw3ia_sat");
define('DB_CHARSET', 'utf8');

?>