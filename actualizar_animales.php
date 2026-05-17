<?php
include("conexion.php");

$animales = $conexion->query("SELECT * FROM animal");
$estados = $conexion->query("SELECT * FROM estado");

if(isset($_POST['actualizar'])){

    $animal = $_POST['animal'];
    $estado = $_POST['estado'];

    $sql = "UPDATE animal
            SET estado_an='$estado'
            WHERE id_animal='$animal'";

    if($conexion->query($sql)){
        echo "✅ Actualizado";
    }else{
        echo "❌ Error";
    }
}
?>

<form method="POST">

<select name="animal">

<?php while($fila = $animales->fetch_assoc()){ ?>

<option value="<?php echo $fila['id_animal']; ?>">
<?php echo $fila['nombre_animal']; ?>
</option>

<?php } ?>

</select>

<select name="estado">

<?php while($fila = $estados->fetch_assoc()){ ?>

<option value="<?php echo $fila['id_estado']; ?>">
<?php echo $fila['nombre_estado']; ?>
</option>

<?php } ?>

</select>

<button type="submit" name="actualizar">
Actualizar
</button>

</form>