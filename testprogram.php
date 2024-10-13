<?php
$x=6;
$y=2;
$z=4;	
$p = 23;
$rem = 0;
$flag=0;
echo "</br>";
echo $output = $x/$z;
echo "</br>";
$numberlist = array(1,2,3,4,5,6,7,8,9,10);
if($p%2 == 0)
{
	echo "$p is Even Number";
}
else{
	echo "$p is Odd Number";
		
}
echo "</br>";
foreach($numberlist as $element)
{
	$rem = $element/2;
	 for($i=2;$i<=$rem;$i++)
	 {
		 if($element%$i == 0)
		 {
			  echo "</br>";
			  echo "<b>";
			 print  "Number is not Prime : "  .$element;
			 echo "<b>";
			 echo "</br>";
			 $flag = 1;
		 }
		
	 }
	    if ($flag==0) {
				echo "</br>";			
		print  "Number is  Prime : "  .$element; 
		 echo "</br>";
		}  
}
?>