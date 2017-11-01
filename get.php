 <?php
 include ('include/config.php');
$cat= $_GET['cat'];
$sql=mysql_query("select * from posts where cat = '".$cat."'");
echo "<div id='show'>
<table border='0' width='100%'>
<tr bgcolor='00ffff'> 
<td width='60%'>اسم الموضوع</td>
<td width='20%' align='center'>بواسطة</td>
<td width='20%' align='center'>عدد المشاهدات</td>

</tr>";
while ($sent=mysql_fetch_array($sql)){
$id=$sent['id']	;
$name=$sent['title'];
$user=$sent['user'];
$visit=$sent['count'];
$sel=mysql_query("select * from users where u_name = '".$user."'");
$que=mysql_fetch_array($sel);
$u_id=$que['u_id'];
echo "
<tr>
<td><a href='veiw.php?id=$id'>$name</a></td>
<td><a href='profile.php?user=$u_id'>$user</a></td>
<td>$visit مشاهدات</td>
</tr>";}
echo "</table>
</div>" ;

?>