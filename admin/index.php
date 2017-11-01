<?php
include("../include/config.php");
echo "<meta charset='utf8'>";
if(!isset($_SESSION['username'])) {
	
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; url=../login.php\">";	}
	
	else {
			
	$sql5=mysql_query("select * from users where u_name = '".$_SESSION['username']."'");
	while ($sent5=mysql_fetch_array($sql5)){
	$ulv=$sent5['u_ulv'];
	if ($ulv != 1) {echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3; url=../index.php\">";
	
	echo "<table border='0' width='50%' style='margin:auto;background:#f00;'><tr><td colspan='3' align='center'>هذه الصفحة خاصة وغير مسموح بالدخول اليها</td></tr></table> ";
	} else {echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=frame.php\">";
	
	
	}
	}
	
	
	}
	

require_once('frame.php')



?>