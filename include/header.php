<?php
include('include/config.php')  ;
 
				 
function hed($title){

  echo"

<html>
<head>
<title> $title </title>
<meta charset='utf8'>
<link rel='stylesheet' href='styles/style.css' type='text/css'>
</head>
<body>
<div id='home'>
<div id='header'>
<div id='logo'>
<a href='index.php'><img src='images/main-logo.png'></a>
</div>
<div id='paner'>
<img src='images/paner.png'>
</div>
";
echo "</div>
<div id='nb'>
<ul>
<li><a href='index.php'><b>الرئيسية</a></li>
<li><a href='#'>الاعلان فى الموقع</a></li>
<li><a href='#'>مركز رفع نوعية سات</a></li>";
if (isset($_SESSION['username'])){$query=mysql_query("select * from users where u_name ='".$_SESSION['username']."'");
$sen=mysql_fetch_array($query);
$id=$sen['u_id'];	
}
if (isset($_SESSION['username'])){echo "<li><a href='logout.php'>خروج</a></li>";}else{echo "<li><a href='register.php'>التسجيل</a></li>";}
if (!isset($_SESSION['username'])){echo "<li><a href='login.php'>منطقة الدخول</a></li>";}
echo "<li><a href='about.php'>اتصل بنا</a></li>";
if(isset($_SESSION['username'])){echo "اهلا ومرحبا بك يا <a href='profile.php?user=$id'>".$_SESSION['username']."</a>";}
echo "</ul></div> <td ><div id='title'>منصة نوعية سات</div>";
echo "<div id='panel'> </div>";
				 
}
?>