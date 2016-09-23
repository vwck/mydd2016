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
		     <li><a href="main.php"> Main</a></li>
			 <li><a href="exit.php"> Exit </a></li>
		</ul>
		<div class="clearfix"></div>
	</div>

	<div id="main">
		<div id='article'>
		   <div class='content'>

<?php
$r; $r2; $zero=0; $one=0; $two=0; $three=0; $four=0; $counter=0; $p0; $p1; $p2; $p3; $p4; $a; $b; $c; $d; $e;
$zone=array();



/* echo "recent values: ", $_POST["z1"], $_POST["z2"], $_POST["z3"], $_POST["z4"], $_POST["z5"];  */
echo "<hr size=1>";	

echo "past data is shown below for demostration only and will not be shown in release version<br>";

                      if ($_POST["z5"] == 1) { $zero = $zero + 1; }
			          if ($_POST["z1"] == 1) { $one = $one + 1; }
			          if ($_POST["z2"] == 1) { $two = $two + 1; }
			          if ($_POST["z3"] == 1) { $three = $three + 1; }
			          if ($_POST["z4"] == 1) { $four = $four + 1; }


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

					echo $r, " <br> ";  
				
				}  /*end for */     	    
             	  
/* analysze data for next prediction - artifical intelligence */

      echo "<br> The zone frequency: zero = ", $zero, " one = ", $one, " two = ", $two, " three = ", $three, " four = ", $four;
	  echo "<hr size=1>";	
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

<br><p><p>					 
   <!-- <div style="overflow-x:auto;"> -->
<table style="border=1; border-spacing: 15px 20px;"> <tr><td> Zone 1</td> <td> Zone 2</td></tr>
        <tr><td> Zone 3</td> <td> Zone 4</td></tr>
 </table>					 
	<!--	</div> -->
<br> Zone 0 shows the area is clean <br>
			</div>
		</div>
</div>


</body>
</html>