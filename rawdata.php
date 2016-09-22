<html>
<head> <title>Do Screen</title>
 </head>

<body> 
<?php
$r; $r2;
echo "random for 10 iterations <br>";
for ($i=1; $i <=10; $i++) {
	           $r = rand(0,4);
			     if ($r >0) {
					 for ($ii=1; $ii<$r; $ii++)
					 { $r2 = rand(1,4); 
						echo " ", $r2, " ";  }
					 
				 }  /*endif*/


			   
/*				if ( $r > 0 ) 
	               { 
				   for ($ii=1; $ii<=$r; $ii++) {  
				      $r2 = rand(0,4);       
						echo " ", $r2, " "; }  */

				echo $r, " <br> ";  
				
				}       	    
             	  



?>
 
</body>
</html>