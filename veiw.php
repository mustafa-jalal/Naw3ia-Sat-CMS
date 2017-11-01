<?php
include ('include/config.php');
include ('include/header.php');
$id=$_GET['id'];
if ($id){
	$mus=mysql_query("update posts set count = count + 1 where id = '".$id."'");
  $sql=mysql_query("SELECT * FROM posts WHERE id = '".$id."'");
  while ($sent=mysql_fetch_array($sql)){
$name=$sent['title'];
$user=$sent['user'];
$id=$sent['id'];
$sub=$sent['sub'];
$sql2=mysql_query("SELECT * FROM users WHERE u_name = '".$user."'");
  while ($sent2=mysql_fetch_array($sql2)){
	  $u_name=$sent2['u_name'];
	  $img=$sent2['img'];
	  $u_ulv=$sent2['u_ulv'];
	  if ($u_ulv == 1){$u_ulv="الادارة";} else if ($u_ulv == 2){$u_ulv="مشرف";} else {$u_ulv="عضو";}
  }
  hed($name."| نوعية سات");
echo "<table width='100%' dir='rtl' border='1' height='100%'>";
echo "<h4 align='center'><a href='veiw.php?id=$id'>$name</a> </h5>";
  echo "<tr>
  <td width='17%' valign='top'><div id='user'>";

  echo "<center><h2>$u_name</h2> <br> <img src='$img' width='85%' height'300'> <br> $u_ulv";
echo"</div></td>";
 echo "<td valign='top' width='80%'>$sub</td>
  <td width='3%'></td>

  </tr>";
  echo "</table>";
 echo "<hr>";
 }
  }
  ?>
 
<?php
  include ('include/footer.php');
 foot() ;
?>