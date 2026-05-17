<?php
include("conexion.php");

$sql = "SELECT

a.nombre_animal,
al.nombre AS alimento,
p.cantidad_alimento,
p.fecha

FROM porciones p

INNER JOIN animal a
ON p.cod_animal_por = a.id_animal

INNER JOIN alimentos al
ON p.cod_alimento_por = al.cod_alimento";

$resultado = $conexion->query($sql);
?>

<table border="1">

<tr>
<th>Animal</th>
<th>Alimento</th>
<th>Cantidad</th>
<th>Fecha</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()){ ?>

<tr>

<td><?php echo $fila['nombre_animal']; ?></td>
<td><?php echo $fila['alimento']; ?></td>
<td><?php echo $fila['cantidad_alimento']; ?></td>
<td><?php echo $fila['fecha']; ?></td>

</tr>

<?php } ?>

</table>