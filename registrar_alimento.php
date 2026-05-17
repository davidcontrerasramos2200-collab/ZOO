<?php
include("conexion.php");

if(isset($_POST['guardar'])){

    $nombre = $_POST['nombre'];
    $unidad = $_POST['unidad_medida'];

    $sql = "INSERT INTO alimentos(nombre, unidad_medida)
            VALUES('$nombre', '$unidad')";

    if($conexion->query($sql)){
        echo "Alimento registrado correctamente";
    }else{
        echo "Error: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Alimento</title>
</head>
<body>

<h2>Registrar Alimento</h2>

<form method="POST">

<input type="text" 
       name="nombre" 
       placeholder="Nombre alimento" 
       required>

<br><br>

<input type="text" 
       name="unidad_medida" 
       placeholder="Unidad de medida" 
       required>

<br><br>

<button type="submit" name="guardar">
Guardar
</button>

</form>

</body>
</html>