<?php
include("conexion.php");

$alimentos = $conexion->query("SELECT * FROM alimentos");

if(isset($_POST['eliminar'])){

    $id = $_POST['alimento'];

    $sql = "DELETE FROM alimentos
            WHERE cod_alimento='$id'";

    if($conexion->query($sql)){
        echo "✅ Eliminado";
    }else{
        echo "❌ Error";
    }
}
?>

<form method="POST">

<select name="alimento">

<?php while($fila = $alimentos->fetch_assoc()){ ?>

<option value="<?php echo $fila['cod_alimento']; ?>">
<?php echo $fila['nombre']; ?>
</option>

<?php } ?>

</select>

<button type="submit" name="eliminar">
Eliminar
</button>

</form>