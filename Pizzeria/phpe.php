<?php
$nombre = $_POST['nombres'];
$apellido = $_POST['Direccion'];
$edad = $_POST['Telefono'];
$pizzas = $_POST['pizzas'];
$Npizzas = $_POST['numerop'];
$precio;

		if ($pizzas == 1) {
			$precio = 11000*$Npizzas;
		}if  ($pizzas == 2) {
			 $precio=9800*$Npizzas;
		}if ($pizzas == 3) {
			$precio = 8600*$Npizzas;
		}if ($pizzas == 4) {
			$precio = 7500*$Npizzas;
		}
		$contenido="
		Nombre: $nombre
		Direccion: $apellido
		Telefono: $edad
		Total Del Pedido: $precio
		";
		$archivo = fopen("RECIBOS/$nombre.txt","w");
		fwrite($archivo,$contenido);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" type="text/css" href="CSS/csphp.css">
 	<title></title>
 	<div class="header">
	<div class="pedir">
		<h1>Tu Pedido Esta Listo</h1>
		<h3>Gracias por confiar en nosotros</h3>
		<a href="ht.html #menu"><button>Volver a Menu</button>
	</div>
	</div>
 </head>
 <body>

 </body>
 </html>