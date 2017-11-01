<?Php
  include('include/header.php')   ;
  
?>
<?php
$id=$_GET['user'];
if(isset($id)){
$query=mysql_query("select * from users where u_id ='$id'");
$num=mysql_num_rows($query);
if ($num <= 0){echo "<center><img src='images/false.png' height='55'><br><font color='ff0000'>عفو لم نجد بروفايل لذلك العضو رجاء راجع الادارة <br> ";}else {

$sen=mysql_fetch_array($query);
$id=$sen['u_id'];
$name=$sen['u_name'];
$img=$sen['img'];
$email=$sen['u_name'];
$ulv=$sen['u_ulv'];

hed("  الصفحة الشخصية لـ $name ")    ;
if ($ulv == 1){$ulv ="مدير";} elseif ($ulv == 2){$ulv ="مشرف";} else {$ulv= "عضو";}
	if ($_SESSION['username'] == $name){
		echo "
		<div id='de'>
		
		<ul>
		<li><a href='profile?user=$id?type=edit'>تعديل البيانات </a></li>
		<li><a href='profile?user=$id?type=img'>تغيير الصورة الرمزية</a></li>
		<li><a href='profile?user=$id?type=msg'>الرسائل الخاصة</a></li>
		<li><a href='profile?user=$id?type=cp'>تغيير كلمة المرور</a></li>
		</ul>
		</div><br>
		";
	}
	echo "
	<div id='us'>
	<h1>$name</h1> <br>
	الرتبة : $ulv <br>
	$name هو العضو رقم $id فى نوعية سات <br><br>
	اخر نشاط : <br>
	";
	$squ=mysql_query("select * from posts where user = '".$name."' ORDER BY id DESC LIMIT 1");
while ($seo=mysql_fetch_array($squ)){
echo $seo['title'];
}

echo "</div>";
	echo "<div id='im'><img src='$img' alt='الصورة الرمزية للعضو $name' width='300' height='400' border='1'></div>";
	
	
}
}
else {echo "<center><img src='images/false.png' height='55'><br><font color='ff0000'>عفو لم نجد بروفايل لذلك العضو رجاء راجع الادارة <br> ";}

?>



<?php
  include ('include/footer.php');
 foot()  ;
?>