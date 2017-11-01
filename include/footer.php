<?php
include("config.php");
 function foot () {
     echo  "
<div id='footer'>
جميع الحقوق محفوظة لـ
<a href='index.php'>
 نوعية سات <br>
</a>
";
if (isset($_SESSION['username'])){
$sql=mysql_query("SELECT * FROM users WHERE u_name = '".$_SESSION['username']."'");
$sent=mysql_fetch_array($sql);
if ($sent['u_ulv']== 1){
	echo "<font size='1' color='ffff00' ><a href='admin'>لوحة التحكم</a></font>";
}
}
echo "
</div>
</div>
</body>
</html>
";


}

?>