<html>
<head> <title>Do Screen</title>
 </head>

<body> 
<?php
$r; $r2; $zero=0; $one=0; $two=0; $three=0; $four=0; $zone;
echo "random for 10 iterations <br>";
for ($i=1; $i <=10; $i++) {
	           $r = rand(0,4);
			       /* store zone values for analysis and next predictions */
			          if ($r == 0) { $zero = $zero + 1; }
			          if ($r == 1) { $one = $one + 1; }
			          if ($r == 2) { $two = $two + 1; }
			          if ($r == 3) { $three = $three + 1; }
			          if ($r == 4) { $four = $four + 1; }


					  
			     if ($r >0) {
					 for ($ii=1; $ii<$r; $ii++)
					 { $r2 = rand(1,4); 
			          if ($r2 == 1) { $one = $one + 1; }
			          if ($r2 == 2) { $two = $two + 1; }
			          if ($r2 == 3) { $three = $three + 1; }
			          if ($r2 == 4) { $four = $four + 1; }

					      echo " ", $r2, " "; } /*end for loop*/
					          
					 
				              }  /*endif*/


			   
/*				if ( $r > 0 ) 
	               { 
				   for ($ii=1; $ii<=$r; $ii++) {  
				      $r2 = rand(0,4);       
						echo " ", $r2, " "; }  */

				echo $r, " <br> ";  
				
				}  /*end for */     	    
             	  
/* analysze data for next prediction - artifical intelligence */

      echo "<br> zero = ", $zero, " one = ", $one, " two = ", $two, " three = ", $three, " four = ", $four;
      echo "<br> The next prediction is in the highest priority to the lowest priority order <br>"; 
      $zone = array ($zero, $one, $two, $three, $four );          
      rsort($zone);
        for ($y=0; $y<=4; $y++ ) 
		{ echo " zone ", $zone[$y], "<br>";  }
?>
 
</body>
</html>