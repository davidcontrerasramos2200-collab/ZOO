<?php
include("conexion.php");

$sql = "SELECT

a.id_animal,
a.nombre_animal,
a.fecha_ingreso,
e.nombre AS especie,
es.nombre_estado

FROM animal a

INNER JOIN especies e
ON a.cod_esp_an = e.codigo_esp

INNER JOIN estado es
ON a.estado_an = es.id_estado";

$resultado = $conexion->query($sql);
?>

<h1>Listado Animales</h1>

<table border="1">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Ingreso</th>
<th>Especie</th>
<th>Estado</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()){ ?>

<tr>

<td><?php echo $fila['id_animal']; ?></td>
<td><?php echo $fila['nombre_animal']; ?></td>
<td><?php echo $fila['fecha_ingreso']; ?></td>
<td><?php echo $fila['especie']; ?></td>
<td><?php echo $fila['nombre_estado']; ?></td>

</tr>

<?php } ?>

</table>