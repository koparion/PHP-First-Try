<?php
	$name = "Rus";
	$numCr = 7;
	$floatval = 10.0;
	
	echo "Name: ";
    var_dump($name);
	echo "<br>";
	echo "Credit: ";
    var_dump($numCr);
	echo "Float #: ";
    var_dump($floatval);
	//echo "\n";
	echo "<br>";
	//echo "Using vardump function";
	//var_dump($name,$numCr,floatval);
	echo "<br>";echo "<br>";
    echo "Hello " , $name;
    echo "\n<br>You are: ";
	if ($numCr >= 12)
		  echo "FULL TIME STUDENT";
    else
		  echo "PART TIME STUDENT";
	// displaying server information and file
	echo "<br>";
	echo "File Name: ",$_SERVER['PHP_SELF'];
	echo "<br>";
	echo "SERVER_NAME: ",$_SERVER['SERVER_NAME'];
	echo "<br>";
	echo "HTTP_HOST: ",$_SERVER['HTTP_HOST'];
	echo "<br>";
	//echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo "SCRIPT_NAME: \t",$_SERVER['SCRIPT_NAME'];
?>

