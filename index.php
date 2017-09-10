<?php
session_start();
if (!isset($_SESSION['contador'])) {$_SESSION['contador']=0;
}
include 'conexion.php';
include 'header.php';
$peticion = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $peticion);
echo "<meta charset='UTF-8'>";
echo "<br>";
echo "<br>";
echo "<section>";
echo "<div class='container-fluid'>";
echo "<div class='col-12'>";
echo "<div class='row'>";
echo "<ul class='list-unstyled'>";
while ($fila = mysqli_fetch_array($resultado)) {
     echo "<li class='media'>";
     echo "<div class='media'>";
     $peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto =".$fila['idproducto']." LIMIT 1";
     $resultado2 = mysqli_query($conexion, $peticion2)or die(mysql_error());
     while ($fila2 = mysqli_fetch_array($resultado2)) {
          echo "<img class='d-flex align-self-center mr-3' src='img/".$fila2['imagen']."' alt='Generic placeholder image' width='200px'>";
    }
    echo "<div class='media-body'>";
    echo "<h3 class='mt-0'>".$fila['nombre']."</h3>";
    echo "<p class='mb-0'> Precio: $".$fila['precio']."</p>";
    echo "<a class='mb-0' href='producto.php?idproducto=".$fila['idproducto']."'><button class='btn btn-info'>Más información</button></a>";
    echo "<button class='mb-0 btn btn-primary botoncompra' value='".$fila['idproducto']."'>Comprar ahora</button>";
    echo "</div>";
    echo "</li>";
}
echo "</ul>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</section>";
mysqli_close($conexion);
?>
