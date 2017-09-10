<?php
 if (!isset($_SESSION['contador'])) {
  $_SESSION['contador']=0;
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<title>La Tiendona</title>
</head>
<body>
	<div id="contenedor" class="container-fluid">
		<header>
			<a href="index.php"><h1>La Tiendona</h1></a>
			<h2>Tiena maciza, hecha y derecha</h2>
		</header>
		<section>
			<div id="contienecarrito">
				<div id="carrito" class="alert alert-dark">
					Carrito
      </div>
      <a href="destruir.php"><button class="btn btn-warning">Vaciar carrito</button></a>
      <a href="confirmar.php"><button class="btn btn-primary">Confirma compra</button></a>
    </div>
		</section>
	</div>
</body>
</html>
