<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="icon/png" href="https://images.rappi.com.ar/products/1465150-1596563848178.png">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>PAÍS INVIABLE</title>
</head>
<img src="">
<body bgcolor="blue">
     <nav class="nav">
     	<h1>¿LABURAR? NO MAESTRO, NO CONOZCO ESE MAPA</h1>
     	<img src="https://images.vexels.com/media/users/3/210395/isolated/preview/08179cb3a3331d928f3bf2f1cc3746b6-dibujado-a-mano-oficial-sol-argentino.png">
     </nav>

     <h1 class="titulo">QUÉ ONDA PA</h1>

     <div class="presentacion">
     	<p>
     		<h3>¿TODO BIEN? ACÁ ABAJO 👇 TE DEJO SABER CUANTO TE ROBA EL GOBIERNO</h3>
     	</p>
     </div>

<form method="post" action=""><br>
<h1 class="jugo">INSERTE VALOR DE LA COMPRA</h1><br>
<input type="text" name="numero"><br><br>
<input type="submit" value="CALCULAR"><br>
</form><br>


</body>

<?php

$valor = $_POST['numero'];
$resultado = $valor * 64 / 100;
$resultado2 = $valor + $resultado;
echo "<p>EL GOBIERNO TE ESTÁ ROBANDO: $resultado PESOS </p>";
echo "<p>Y TENDRÍAS QUE PAGAR: $resultado2 PESOS </p>";



?> 

</html>
