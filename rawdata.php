<!DOCTYPE html>
<head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Display Screen</title>
         <meta name="viewport" content="width=device-width">
         <link rel="stylesheet" href="style.css">
		<script src="modernizr-2.6.1-respond-1.1.0.min.js"></script>

 </head>

<body> 
	<div id="nav">
		<ul>
			 <li><a href="help.php"> Help</a></li>
		     <li><a href="exit.php"> Exit </a></li>
		</ul>
		<div class="clearfix"></div>
	</div>

	<div id="main">
		<div id='article'>
		   <div class='content'>

<?php
$r; $r2; $zero=0; $one=0; $two=0; $three=0; $four=0; $zone; $counter=0; $p0; $p1; $p2; $p3; $p4; $a; $b; $c; $d; $e;

/*echo "recent values: ", $_POST["zone1"], $_POST["zone2"], $_POST["zone3"], $_POST["zone4"], $_POST["zone5"]; */
echo "random for 10 iterations <br>";

                      if ($_POST["zone5"] == 0) { $zero = $zero + 1; }
			          if ($_POST["zone1"] == 1) { $one = $one + 1; }
			          if ($_POST["zone2"] == 2) { $two = $two + 1; }
			          if ($_POST["zone3"] == 3) { $three = $three + 1; }
			          if ($_POST["zone4"] == 4) { $four = $four + 1; }


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

      echo "<br> The zone frequency: zero = ", $zero, " one = ", $one, " two = ", $two, " three = ", $three, " four = ", $four;
      echo "<p><br><u> The next prediction is in the highest priority to the lowest priority order </u> <p>"; 
      $zone = array ($zero, $one, $two, $three, $four );          
 
 $p1= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
  
 for ($z=0; $z<=4; $z++) {
	   if ($zone[$z] == $p1) 
		  { echo " First task is zone ", $z, " (interval 15mins)<br>";  
			$a=$z;     /*store ranking order*/
			$zone[$z] = -1; 
            $counter=$counter +1;			/* priority 1 identified and remove it to select priority 2 */
			                                          }          
					 }
 
  if ($counter!=5) {
         $p2= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
            for ($z=0; $z<=4; $z++) {	  
	          if ($zone[$z] == $p2) 
		         { echo " Second task is zone ", $z, " (interval 30mins)<br>";  
	                  $b=$z;     /*store ranking order*/
					  $zone[$z] = -1; 
					  $counter=$counter +1; /* priority 2 identified and remove it to select priority 3 */
				 }                               }          
					  }

 if ($counter!=5) {
 $p3= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
  for ($z=0; $z<=4; $z++) {
	   if ($zone[$z] == $p3) 
		  { echo " Third task is zone ", $z, " (interval 60mins)<br>";  
	        $c=$z;     /*store ranking order*/
			$zone[$z] = -1; 
			$counter=$counter +1; 			/* priority 3 identified and remove it to select priority 4 */
		  }                                }          
					 }
if ($counter!=5) {
 $p4= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
  for ($z=0; $z<=4; $z++) {
	   if ($zone[$z] == $p4) 
		  { echo " Fourth task is zone ", $z, " (interval 80mins)<br>";  
	        $d=$z;     /*store ranking order*/
			$zone[$z] = -1; 
			$counter=$counter +1;			/* priority 4 identified and remove it to select priority 5 */
		  }                                     }          
					 }
if ($counter!=5) {
 $p5= max($zone[0], $zone[1], $zone[2], $zone[3], $zone[4]);
  for ($z=0; $z<=4; $z++) {
	   if ($zone[$z] == $p5) 
		  {  echo " Fifth task is zone ", $z, " (interval 120mins)<br>"; 
	        $e=$z;     /*store ranking order*/
			$zone[$z] = -1; 
			$counter=$counter +1; /* priority 5 identified */
		  }                                     }          
					 }
?>

<p>					 
<div style="overflow-x:auto;">
<table border="1"> <tr><td> Zone 1</td> <td> Zone 2</td></tr>
        <tr><td> Zone 3</td> <td> Zone 4</td></tr>
 </table>					 
		</div>
<br> Zone 0 shows the area is clean <br>
			</div>
		</div>
</div>


</body>
</html>