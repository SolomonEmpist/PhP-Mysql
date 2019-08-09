<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>freight</title>

<style>
	.ftable tr:nth-child(1){background: rgba(248,255,140,1.00)}
	</style>
</head>

<body>
<?php
	echo date('H:i,jS F Y');
	?>
<form method="post" name="fr_form" action="freight.php">
<input type="number" name="distance" placeholder="dis">
<input type="submit">
	</form>
<table border="1" class="f_table">
<tr>
	<td>Distance</td>
	<td>Cost</td>
	</tr>

<?php
	$distance=$_POST['distance'];
	$i=0;
	while($distance>$i){
		echo "<tr><td>".$i."</td>
		<td>".($i*50)."</tr>";
		$i++;
	}
	?>

</body>
</html>