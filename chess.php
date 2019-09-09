<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 

   <table width="270px" cellspacing="0px" cellpadding="0px" Border="1px">
   <!-- for and if statement-->
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
          }
          echo "</tr>";
    }
    
    ?>
          
   <?php
      echo "<h3><left border 5px>Chess Board Designed by DevoBero. </left border 5px></h3>" 
    ?>
    <!-- table -->
   

  </table>
  </body>
  </html>
