<?php
      $op=$_POST['mnhg2'];
      $ko=$_POST['tkwed'];
       if ($op=='الثانوية العامة')  {
           echo "........ جارى التحويل     ";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=thanawya.php?cat=3\">";
         exit;
       }
       else if ($op=='المرحلة الابتدائية')
       {
           echo "........ جارى التحويل     ";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=school1.php?cat=1\">";
           exit ;
       }

       else if ($op=='المرحلة الاعدادية')
       {
             echo "...... جارى التحويل";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=praimary.php?cat=2\">";
       }
       else if ($op=='الاعدادية الازهرية')
       {
           echo "...... جارى التحويل";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=azhria2.php?cat=4\">";
           exit ;
       }
       else if ($op=='الثانوية الازهرية')
       {
           echo "...... جارى التحويل";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=azhria3.php?cat=5\">";
           exit ;
            
       }
       if ($ko=='تكويد وتصميم المواقع')
       {
           echo "...... جارى التحويل";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=webdes.php?cat=6\">";
           exit ;
       }
	   else if ($ko=='لغات البرمجة'){
		   echo "...... جارى التحويل";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=prog.php?cat=7\">";
           exit ;
	   }
	    else if ($ko=='مونتاج الفديو'){
		   echo "...... جارى التحويل";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=montag.php?cat=8\">";
           exit ;
	   }
	    else if ($ko=='شروحات الكومبيوتر'){
		   echo "...... جارى التحويل";
          echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; url=computer.php?cat=9\">";
           exit ;
	   }






?>