<!DOCTYPE html>
<html>
<head>
	<title>explode-implode</title>
</head>
<body>
<?php
	//explode-implode examples
	$sentence01 = "Javanese Indonesian Arabic English Japanese";
	$sentence02 = "Kambing Domba Sapi Kerbau Unta";
	$sentence03 = "Redmi Xperia Galaxy Zenfone Iphone";
	$sentence04 = "Sarimi Supermi Indomie MieSedap MieABC";
	$sentence05 = "Merbabu Merapi Lawu Sumbing Sindoro";
	$language = explode(" ",$sentence01);
	$qurban = explode(" ",$sentence02);
	$hp = explode(" ",$sentence03);
	$miinstan = explode(" ",$sentence04);
	$gunung = explode(" ",$sentence05);
	print_r($language);
	echo "<br/>";
	echo implode(", ", $language);
	echo "<br/>";
	print_r($qurban);
	echo "<br/>";
	echo implode("/", $qurban);
	echo "<br/>";
	print_r($hp);
	echo "<br/>";
	echo implode("||", $hp);
	echo "<br/>";
	print_r($miinstan);
	echo "<br/>";
	echo implode("_", $miinstan);
	echo "<br/>";
	print_r($gunung);
	echo "<br/>";
	echo implode(" /\ ", $gunung);
	echo "<br/>";
?>
</body>
</html>