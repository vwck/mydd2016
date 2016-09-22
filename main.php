<!DOCTYPE html>

<head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Main Screen</title>
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

<center>	
	<div id="main">
		<div id='article'>
		   <div class='content'>
			
				<h3>Please select the zone area to be cleaned</h3><br>
          <form action="rawdata.php" method="post">
		    <input type="text" name="z1" value="1">Zone 1<br>
		    <input type="text" name="z2" value="2">Zone 2<br>
		    <input type="text" name="z3" value="3">Zone 3<br>
		    <input type="text" name="z4" value="4">Zone 4<br>
		    <input type="text" name="z5" value="0">Zone 5<br>
                           
						     <input type="submit" value="E N T E R" style="height:50px; width:150px;">
          </form> 
		  
		  
		  </P> <h3>
<!--        		  <input type="text" name="z1" value="0" >


           <form action="rawdata.php" method="post">
              <input type="checkbox" name="z1" value="1">Zone 1<br>
			    <input id='testNameHidden' type='hidden' value='No' name='z1'>
              <input type="checkbox" name="z2" value="2">Zone 2<br>
              <input type="checkbox" name="z3" value="3">Zone 3<br>
              <input type="checkbox" name="z4" value="4">Zone 4<br>
              <input type="checkbox" name="z5" value="0">Zone 5<br>
			  <input type="submit" value="E N T E R" style="height:50px; width:150px;">
           </form>
		   -->
		   
                  </h3>

			</div>
		</div>
    </div>	
	
</center>

</body>
</html>