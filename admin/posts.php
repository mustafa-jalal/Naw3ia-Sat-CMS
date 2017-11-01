<html>
<head>
<title>اعدادت المواضيع </title>
</head>
<body>
<a href='../new_post.php'>اضافة موضوع</a> <br>
<a href='posts.php?type=edit'>تعديل المواضيع </a>
<br>
<hr>
<?php 

 if ($_REQUEST['type'] == 'edit') {
	echo "تعديل ياريس";
}

?>
</body>
</html>