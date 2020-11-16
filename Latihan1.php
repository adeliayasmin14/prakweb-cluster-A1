<!DOCTYPE html>
<html>
<head>
	<title>latihan1</title>
</head>
<body>
	<?php  
		function penjumlahan($a,$b)
		{
			return $a+$b;
		}
		function Pengurangan($a,$b)
		{
			return $a-$b;
        }
        function pembagian($a,$b)
		{
			return $a/$b;
		}
		function perkalian($a,$b)
		{
			return $a*$b;
		}
		function modulus($a,$b)
		{
			return $a%$b;
		}
	?>
	<?php 
	$x = 20; $y = 5;
		echo "Penjumlahan"."<br>";
		echo "Operator: + "."<br>";
		echo "Hasil: ".penjumlahan($x,$y);
		echo "<br><br>";
		echo "Pengurangan"."<br>";
		echo "Operator: - "."<br>";
		echo "Hasil: ".pengurangan($x,$y);
		echo "<br><br>";
		echo "Perkalian"."<br>";
		echo "Operator: * "."<br>";
		echo "Hasil: ".perkalian($x,$y);
		echo "<br><br>";
		echo "Pembagian"."<br>";
		echo "Operator: / "."<br>";
		echo "Hasil: ".pembagian($x,$y);
		echo "<br><br>";
		echo "Modulus"."<br>";
		echo "Operator: % "."<br>";
		echo "Hasil: ".modulus($x,$y);
	 ?>
</body>
</html>
