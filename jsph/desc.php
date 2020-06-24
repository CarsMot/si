<head>
	<title>Descuento</title>
</head>
<body> 
	<h1>Rebajas</h1>
<?php
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$marca= $_POST['marca'];
$color = $_POST['color'];

$dine =  ($precio*.15);
$promediot = ($precio-$dine);

echo"<h2> Informacion obetenida</h2>";

echo "El Sr(a): ".$nombre. "<br/>"; 
echo "Compró un automovil marca: ".$marca. "<br/>"; 
echo "De color: ".$color. "<br/>"; 
echo "A un costo de: $".$precio. "<br/>";
echo "Pero al descontarle el 15% el precio que ahora pagará es de: $".$promediot. "<br/>";
echo "Ahorrandose la cantidad de: $".$dine. "<br/>";;
?>
</body>
