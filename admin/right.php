<?php 
session_start();
echo "<meta charset='utf8'";
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<div id="wrapright">
<?php if(isset($_SESSION['username'])){echo "انت المدير"." "."<FONT COLOR='FFFFFF'><U>".$_SESSION['username']."</FONT>";}else {echo "فى حاجة غلط";}?><br>
<img src="../images/control.png">
<ul>
<li><a href="#" target="left">اعدادت الموقع العامة</a></li>
<li><a href="posts.php" target="left">المواضيــع</a></li>
<li><a href="users.php"  target="left">الاعضاء</a></li>
<li><a href="cat.php" target="left">التحكم فى القوائم</a></li>
<li><a href="#">المنصة والاعلانات</a></li>
</ul>
</div>
<div id='site'>
<table border="0">
<tr>
<td width="50%"><a href="../logout.php" target="_top">خروج</a></td>
<td width="50%"><a href="../index.php" target="_top">معاينة الموقع</a></td>
</tr>
</table>
</div>