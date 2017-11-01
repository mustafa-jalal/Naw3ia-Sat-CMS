<?php include("../include/config.php");
echo "<meta charset='utf8'>";
  ?>
<a href="cat.php?type=add"> اضافة قائمة جديدة</a> <br>
<a href="cat.php?type=edit">تعديل قائمة</a> <br>
<a href="cat.php?type=delet">حذف قائمة</a> <br>
<hr>
 <?PHP
 if ($_REQUEST['type']== 'add'){
	 echo "
	 <table border='0' style='margin:auto;'>
<form action='cat.php?type=add' method='post'>
<tr>
<td>
<input type='text' name='title' value=''/>
</td>
<td>
: اسم القائمة 
</td>
</tr>

<tr><td colspan='3' align='center'><input type='submit' name='submit' value='اضف القائمة'/></td></tr>
</form>";
 }
 // varibles of adding 
$title=$_POST['title'];
$submit=$_POST['submit'];
if ($submit){
if (!$title){
	echo "<font color='ff00ff' >فضلا ادخل بيانات القائمة</font>";
}
else {
	$sql=mysql_query("insert into cat values ('','$title')");
	if ($sql){echo "<font color='00ff00'>تم اضافة القائمة بنجاح</font>";}
}
}
if ($_REQUEST['type'] == 'delet'){
	echo "حذف" ;
}

