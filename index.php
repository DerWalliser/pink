<?php
$a = "";
 if(isset($_GET['a'])){
	$a = $_GET['a'];
 }
 $b = "";
 if(isset($_GET['b'])){
	$b = $_GET['b'];
 }
 $name = "";
 if(isset($_GET['name'])){
	$b = $_GET['name'];
 }
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
		$c = $a * $b;
		echo "<h1>Moin Leute " .$c."</h1>";
		?>
		<form>
		<input type="number" name="a">
		
		<input type="number"  name="b">
		<p>
		</p>
		<input type="submit">
		</form>


	</body>
</html>

