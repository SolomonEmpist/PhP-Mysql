<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
	$title=rand(1,3);
    $pic=array('p1.jpg','p2.jpg','p3.jpg','p4.jpg','p5.jpg','p6.jpg','p7.jpg');
	shuffle($pic);
?>
	<title>shuffle</title>
	<style>
		table img{width: 150px;height: 150px}
	</style>
</head>

<body>
	<h1>oh!dog</h1>
	<table>
		<tr>
			<?php
			for($i=0;$i<3;$i++){
				echo "<td><img src=\"".$pic[$i]."\"/></td>";
				
			}
			?>
			
		</tr>
	</table>

</body>
</html>