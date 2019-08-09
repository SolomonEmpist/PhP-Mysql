<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
  $pic=array('p1.jpg','p2.jpg','p3.jpg','p4.jpg','p5.jpg','p6.jpg','p7.jpg');
	shuffle($pic);
	$word=array('太棒了','哇哦','cool','awesome');
	$sex=array('男','女','保密');
	
	
?>
	<title>shuffle</title>
	<style>
		table img{width: 150px;height: 150px}
		td{width: 188px;border-right: 2px rgba(0,0,0,1.00) solid}
	</style>
</head>

<body>
	<h1>oh!dog</h1>
	<table>
		
			<?php
		
			for($i=0;$i<3;$i++){
				$word_rand=rand(0,3);
				$sex_rand=rand(0,2);
				echo "<tr><td><img src=\"".$pic[$i]."\"/></td>";
				echo "<td>".$word[$word_rand]."</td>";
				echo "<td>".$sex[$sex_rand]."</td>";
				echo "</tr>";
				
			}
			?>
			
		
	</table>

</body>
</html>