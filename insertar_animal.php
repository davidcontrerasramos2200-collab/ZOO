<?php
include("conexion.php");

$especies = $conexion->query("SELECT * FROM especies");
$estados = $conexion->query("SELECT * FROM estado");

if(isset($_POST['guardar'])){

    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $especie = $_POST['especie'];

    $sql = "INSERT INTO animal
    (nombre_animal,fecha_ingreso,estado_an,cod_esp_an,imagen)

    VALUES

    ('$nombre','$fecha','$estado','$especie','sinimagen.jpg')";

    if($conexion->query($sql)){
        echo "✅ Animal registrado";
    }else{
        echo "❌ Error";
    }
}
?>

<form method="POST">

<input type="text" name="nombre" placeholder="Nombre animal">

<input type="date" name="fecha">

<select name="estado">

<?php while($fila = $estados->fetch_assoc()){ ?>

<option value="<?php echo $fila['id_estado']; ?>">
<?php echo $fila['nombre_estado']; ?>
</option>

<?php } ?>

</select>

<select name="especie">

<?php while($fila = $especies->fetch_assoc()){ ?>

<option value="<?php echo $fila['codigo_esp']; ?>">
<?php echo $fila['nombre']; ?>
</option>

<?php } ?>

</select>

<button type="submit" name="guardar">
Guardar
</button>

</form>