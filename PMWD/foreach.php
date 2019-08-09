<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>forech</title>
</head>

<body>
<?php
	$price=array('name'=>"AMD",'version'=>1256,'Price'=>5600);
	
	foreach($price as $key => $value){
		echo $key."-".$value."<br/>";
	}
	
	echo "<hr>";
	
	$price2=array('name'=>"Itl",'version'=>9800,'Price'=>15600);
	while($element=each($price2)){
		echo $element['key'];
			echo "_";
		echo $element['value'];
		echo "<br/>";
	}
	?>
</body>
</html>