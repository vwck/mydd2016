<html>
<head> <title>Do Screen</title>
 </head>

<body> 


<?php 
 $status; $answer=6;
 echo "Input Screen 1 is ", $_POST["input1"] ,"<p><p>";

$filedate = "data.csv";
if ( file_exists($filedate) ==0 )
  { die("Data not found!"); }

$myfile=fopen($filedate,"r");

$row = 0; $x=0; $y=0; 
$ind; $inmm; $indd;  /*var for index mm and index dd to show current date   */
$temp=array(); $index=array(); $preyr; $premm; $predd;/*to make data always available */

if ( $myfile !== FALSE) {
   while ( ($data = fgetcsv($myfile, 1024, "|") ) !== FALSE) {
       $num = count($data);   /*count number of columns */
            for ($y=0; $y < $num; $y++) {
                    $temp[$x][$y]= $data[$y];   } /*end for */
		 $row++;
         $x++;     } /*end if*/

}  /*end if*/

    fclose($myfile);

 
 
 
for ($x=1; $x <=$_POST["input1"]; $x++) {
	 /* for ($xx=0; $xx <=1000; $xx++) { }  */
	    if ($x == $answer)  
          { die (" <p> Status screen 2 is done ");  } 
        else {       echo " do ", $x, " "; }
      	              	    
             }	  

echo "<p><p>";
			
 if ($_POST["input1"] != $answer)
    	 { echo "Status screen 2 is not available "; }	   
			
 
 /* comment 
 if ($_POST["input1"] == $_POST["gotit"])  
          { echo "Status screen 2 is done "; }   

 if ($_POST["input1"] != $_POST["gotit"]) 
          { echo "Status screen 2 is not available "; }	   

 */
?>
 
</body>
</html>