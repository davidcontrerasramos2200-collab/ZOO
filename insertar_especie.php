<?php
include("conexion.php");

if(isset($_POST['guardar'])){

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $ambiente = $_POST['ambiente'];

    $sql = "INSERT INTO especies
    (nombre, cantidad_esp, ambiente_esp)

    VALUES

    ('$nombre','$cantidad','$ambiente')";

    if($conexion->query($sql)){
        echo "✅ Especie registrada";
    }else{
        echo "❌ Error";
    }
}

$ambientes = $conexion->query("SELECT * FROM ambiente");
?>

<form method="POST">

<input type="text" name="nombre" placeholder="Nombre especie">

<input type="number" name="cantidad" placeholder="Cantidad">

<select name="ambiente">

<?php while($fila = $ambientes->fetch_assoc()){ ?>

<option value="<?php echo $fila['id_ambiente']; ?>">
<?php echo $fila['nombre']; ?>
</option>

<?php } ?>

</select>

<button type="submit" name="guardar">
Guardar
</button>

</form>