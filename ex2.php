<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$i = 12;
	$tipus_de_i = gettype( $i );
	$a = 12.7;
	$tipus_de_a = gettype( $a );
	$e = False;
	$tipus_de_e = gettype( $e );
	$u = "adios";
	$tipus_de_u = gettype( $u );
		echo "La variable \$i conté el valor $i i és del tipus $tipus_de_i</br>";
		echo "La variable \$a conté el valor $a i és del tipus $tipus_de_a</br>";
		echo "La variable \$e conté el valor $e i és del tipus $tipus_de_e</br>";
		echo "La variable \$u conté el valor $u i és del tipus $tipus_de_u";
	?>
</body>
</html>