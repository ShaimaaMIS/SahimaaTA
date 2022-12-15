
<?php
$Num1 = $Num2 ="";
$Num1error = $Num2error ="";

if ($_SERVER["REQUEST_METHOD"] == "GET")
{

	$Num1=$_GET["Input1"];
	$Num2=$_GET["Input2"];
	errors($Num1,$Num2);
	CalcInputs($Num1,$Num2); 

}

function errors($Num1,$Num2) 
	 {
		 $errosMsg ="";
		 
 //if(is_null($_GET["Input1"])) 
// {
//   die('ggggg');
// }
if (!$_GET["Input1"])
{
die('Please fill in the text');
}
else if  (!$_GET["Input2"])
{
die('Please fill in the text');
}

else if(!is_numeric($_GET["Input1"])) 
{
	die('Strings ISNOT allowed - Numbers only ');
}
else if(!is_numeric($_GET["Input2"])) 
{
	die('Strings ISNOT allowed - Numbers only ');

}
else
return $errosMsg;
	 }
	 
	 
	 
function CalcInputs($Num1,$Num2) 
{
$Result="";
$Result=($Num1*$Num2)/100;
 return $Result;
}

?>

Result:<input type="text" value="<?php print_r(CalcInputs($Num1,$Num2));?>">
