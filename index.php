<?php
      include('include/header.php')  ;
      
      
	 
	  
      hed('شبكة | نوعية سات')  ; 
      
?>
<?php

include('include/block.php');
?>
<div id="mnhg">
                                <div id="intro">
                                مركز المناهج التعليمية
                                </div>
                                           <div id="selct">
                                           <form action="go.php" method="post">
                                <select name="mnhg2">

                                   <option name="pr">المرحلة الابتدائية </option>

                                   <option name="sc">المرحلة الاعدادية</option>
                                   <option name="th"> الثانوية العامة</option>
                                   <option name="az1"> الاعدادية الازهرية</option>
                                   <option name="az2"> الثانوية الازهرية</option>

                  </select> <br>

                                <input type="submit" value="ذهاب"/>
                                  </form>
                                  </div>
                 </div>
                 <br>
                     <hr size="2" color="ffffff">
                 <br>

                 <div id="dwora">
                       <div id="intro">
                                مركز  الدورات التدريبة
                                </div>
                                <div id="selct">
                                  <form action="go.php" method="post">
                                <select name="tkwed">
                                   <option name="web">تكويد وتصميم المواقع </option>
                                   <option name="prog">لغات البرمجة</option>
                                   <option name="vedio"> مونتاج الفديو</option>
                                   <option name="computer"> شروحات الكومبيوتر</option>
                                </select>
                                </div>
                                <input type="submit" value="ذهاب" />
                                </form>

                 </div>
				 <hr>
				 <h4 align='right'>اخر المواضيع : </h4><br>
				 <?php
				 $sql=mysql_query("select * from posts ORDER BY id DESC LIMIT 3");
				 while ($send=mysql_fetch_array($sql)){
					$id=$send['id']; 
			     $title=$send['title']; 
				  $user=$send['user']; 
				   $sub=strip_tags(substr($send['sub'],1,203
				   ));
				   $date=$send['date'];
				   
					 echo "<div id='last'><table width='100%' border='1'><tr><td><a href='veiw.php?id=$id'> $title </td><td width='30%'>بواسطة : $user</td></tr><tr><td colspan='2'>$sub <a href='veiw.php?id=$id'>......اقرا المزيد </a></td></tr></table></div>";
				 }
				 ?>
<?php
include('include/block2.php');
?>

<?php
 include ('include/footer.php');
 foot()  ;
 
?>
