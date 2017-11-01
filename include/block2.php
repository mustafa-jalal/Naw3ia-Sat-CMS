<?php 

?>
</div>

</td>
        <td width="25%" id="cblock" valign="top"s>
        <div id="title">احصائيات الموقع</div>
<div id="panel"><?php $sql=mysql_query("SELECT * FROM users");
$sent=mysql_num_rows($sql);
$sql2=mysql_query("SELECT * FROM posts");
$sent2=mysql_num_rows($sql2);
echo "عدد الاعضاء : $sent"."<br>";
echo "عدد المواضيع : $sent2"."<br>";

 ?></div>
                               <div id="title">تابعنا ايضا</div>
<div id="panel">المحتوى</div>
                  <div id="title">اعلانات</div>
<div id="panel">المحتوى</div></td>
</td>

   </tr>
</table>