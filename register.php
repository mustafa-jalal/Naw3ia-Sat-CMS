<?Php
  include('include/config.php');
  include('include/header.php');
  hed('تسجيل عضو جديد')    ;
  if (isset($_SESSION['username'])){echo "غير مسموح لانك قيد الدخول باسم"." ".$_SESSION['username'];}
  else {
?>
<table width="100%">
<tr>
<td width="55%" id="bblock" valign="top">
                                <div id="con">
								<div id="reg">
<form action="register.php" method="post">
<table border="0" width="100%">
<tr>
<td width="30%">اسم العضو</td>
<td><input type="text" size="30" name="name"  style="width:250px;"/></td>
</tr>
<tr>
<td width="30%">البريد الالكترونى </td>
<td><input type="text" name="email" size="30"  style="width:250px;"/></td>
</tr>
<tr>
<td width="30%">الباسورد</td>
<td><input type="password" name="pass" size="30" style="width:250px;"/></td>
</tr>
<tr>
<td width="30%">الصورة الرمزية</td>
<td><input type="text" name="img" size="30" style="width:250px;"/></td>
</tr>
<tr>
<td colspan="3"><input type="submit" name="submit" value="تسجيل" style="width:85px;"></td>
</tr>
</table>
</div>
</form>

<?php
$name=strip_tags($_POST['name']);
$email=strip_tags($_POST['email']);
$pass=md5($_POST['pass']);
$sub=$_POST['submit'];
$img=$_POST['img'];
if($sub){
	if(!$name or !$email or !$pass){
		echo "<font color='ff0000'>الرجاء ملىء جميع الحقول </font>";
	}
	else {
		if (strlen($name) < 4){echo "<font color='ff0000'>   الرجاء كتابة الاسم بصورة صحيحة </font>";}		 
		 else {
			 $sent=mysql_query("insert into users values ('','$name','$email','$pass','3','$img')");
			 if ($sent){echo "<font color='00ff00'>تم تسجيلك بنجاح جارى تحويلك لصفحة الدخول   </font>
<img src='images/loading.gif' width='150' height='100'>
			 <meta http-equiv=\"Refresh\" CONTENT=\"6; url=login.php\">";}
		 }
	
	}
	
}
else {echo"املىء البيانات اعلاه للتسجيل";}
  
?>
<?php
  }
include('include/block2.php');
?>

<?php
  include ('include/footer.php');
 foot()  ;
?>