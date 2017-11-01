<?php
include("../include/config.php");
echo "<meta charset='utf8'>";
?>
<a href="users.php?type=edit">تعديل بيانات الاعضاء</a><br>
<a href="users.php?type=ulv">رتب وصلاحيات الاعضاء</a>
<hr>
<?php
if ($_GET['type'] == 'edit'){
$sql4=mysql_query("select * from users");
echo "<table border='1' width='90%' style='margin:auto;'>
<tr>
<td></td>
<td align='center'>كلمة المرور</td>
<td align='center'>الرتبة </td>
<td align='center'>البريد الالكترونى</td>
<td align='center'>اسم العضو</td>
<td align='center'>#</td>
</tr>
";
while ($sent4=mysql_fetch_array($sql4)){
	$name=$sent4['u_name'];
	$id=$sent4['u_id'];
	$email=$sent4['u_email'];
	$ulv=$sent4['u_ulv'];
	if ($ulv == 1) {$ulv="مدير";} else if($ulv == 2){$ulv="مشرف";} else {$ulv="عضو";};
	$pass=($sent4['u_pass']);
	
		echo"<tr>
		<td> <a href='users.php?type=edit?redite=$id'>تعديل</a></td>
		<td> $pass </td>
		<td> $ulv </td>
		<td> $email </td>
		<td> $name </td>
		<td> $id </td>
		
		</tr>";
		if ($_GET['redite'] == $id){
			
			echo "
			<table border='1' width='100%'>
			<form method='post' action='users.php?type=edit?redit=$id'>
			<tr>
		<td> اسم العضو</td>
		<td> <input type='txet'name='name'> </td>
		</tr>
		<tr>
		<td> البريد الالكترونى </td>
		<td> <input type='txet'name='email'> </td>
		</tr>
		<tr>
		<td> كلمة المرور  </td
		<td>  <input type='txet'name='pass'>  </td
		</tr>
		</form>
			
			";
			
		}
		
		
	}
}
else if($_GET['type'] == 'ulv'){
	$sql5=mysql_query("select * from users");
echo "<table border='1' width='90%' style='margin:auto;'>
<tr>
<td align='center'> الرتبة </td>
<td align='center'>اسم العضو</td>
</tr>
";
while ($sent5=mysql_fetch_array($sql5)){
	$name=$sent5['u_name'];
	$ulv=$sent5['u_ulv'];
if ($ulv == 1) {$ulv="مدير";} else if($ulv == 2){$ulv="مشرف";} else {$ulv="عضو";};

	

}
}
?>