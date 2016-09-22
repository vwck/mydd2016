<html>
<head> <title>Do Screen</title>
 </head>

<body> 
<?php
$r; $r2; $zero=0; $one=0; $two=0; $three=0; $four=0; $zone; $counter=0; $p0; $p1; $p2; $p3; $p4; $a; $b; $c; $d; $e;
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
 
 $p1= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
  
 for ($z=0; $z<=4; $z++) {
	   if ($zone[$z] == $p1) 
		  { echo " First task is zone ", $z, "<br>";  
			$a=$z;     /*store ranking order*/
			$zone[$z] = -1; 
            $counter=$counter +1;			/* priority 1 identified and remove it to select priority 2 */
			                                          }          
					 }
 
  if ($counter!=5) {
         $p2= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
            for ($z=0; $z<=4; $z++) {	  
	          if ($zone[$z] == $p2) 
		         { echo " Second task is zone ", $z, "<br>";  
	                  $b=$z;     /*store ranking order*/
					  $zone[$z] = -1; 
					  $counter=$counter +1; /* priority 2 identified and remove it to select priority 3 */
				 }                               }          
					  }

 if ($counter!=5) {
 $p3= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
  for ($z=0; $z<=4; $z++) {
	   if ($zone[$z] == $p3) 
		  { echo " Third task is zone ", $z, "<br>";  
	        $c=$z;     /*store ranking order*/
			$zone[$z] = -1; 
			$counter=$counter +1; 			/* priority 3 identified and remove it to select priority 4 */
		  }                                }          
					 }
if ($counter!=5) {
 $p4= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
  for ($z=0; $z<=4; $z++) {
	   if ($zone[$z] == $p4) 
		  { echo " Fourth task is zone ", $z, "<br>";  
	        $d=$z;     /*store ranking order*/
			$zone[$z] = -1; 
			$counter=$counter +1;			/* priority 4 identified and remove it to select priority 5 */
		  }                                     }          
					 }
if ($counter!=5) {
 $p5= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
  for ($z=0; $z<=4; $z++) {
	   if ($zone[$z] == $p5) 
		  { echo " Fifth task is zone ", $z, "<br>";  
	        $e=$z;     /*store ranking order*/
			$zone[$z] = -1; 
			$counter=$counter +1; /* priority 5 identified */
		  }                                     }          
					 }
?>

<p>					 
<table> <tr><td> Zone 1</td> <td> Zone 2</td></tr>
        <tr><td> Zone 3</td> <td> Zone 4</td></tr>
 </table>					 
					 		 
</body>
</html>