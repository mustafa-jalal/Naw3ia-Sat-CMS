<?php
 include('include/config.php');
 echo "<meta charset='utf8'";
 mysql_select_db("naw3ia_sat");
$name=strip_tags($_POST['name']);
$pass=md5($_POST['pass']);
$sub=$_POST['submit'];
if($submit){
if(!$name or !$pass)
{echo "عفو اكتب جميع البيانات المطلوبة";}	
else {
$sent=mysql_query("SELECT * FROM users WHERE u_name = '".$name."' AND u_pass = '".$pass."' ");
if (mysql_num_rows($sent) > 0 ){$user=mysql_fetch_object($sent);
$id=$user->id;
$uname=$user->u_name;
$upass=$user->pass;
$uemail=$user->u_email;
if ($uname != $name and $upass != $pass){
	echo "عفو البيانات المدخلة غير صحيحة";
}
else{
$_SESSION['username']=$uname;
echo "اهلا ومرحبا بعودتك"." ".$_SESSION['username'];
echo "'<META HTTP-EQUIV='Refresh' CONTENT='2; url=index.php'>";

}



}
else {echo "عفو البيانات المدخلة غير صحيحة";}
}	
	

	
}
?>