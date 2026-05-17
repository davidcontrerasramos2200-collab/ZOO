<?php
session_start();
include("conexion.php");

if(isset($_POST['ingresar'])){

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sql = "SELECT * FROM acceso 
            WHERE usuario='$usuario' 
            AND clave='$clave'";

    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){

        $_SESSION['usuario'] = $usuario;

        header("Location: index.php");

    }else{

        echo "<script>
                alert('Usuario o clave incorrecta');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Acceso Zoológico</title>

<style>

body{
    font-family: Arial;
    background: #1e5631;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.login{
    background:white;
    padding:40px;
    border-radius:15px;
    width:350px;
    text-align:center;
}

input{
    width:90%;
    padding:10px;
    margin:10px;
}

button{
    background:#2e8b57;
    color:white;
    border:none;
    padding:12px 20px;
    cursor:pointer;
    border-radius:10px;
}

h1{
    color:#2e8b57;
}

</style>

</head>
<body>

<div class="login">

<h1>🐘 Zoológico</h1>

<form method="POST">

<input type="text" name="usuario" placeholder="Usuario" required>

<input type="password" name="clave" placeholder="Clave" required>

<button type="submit" name="ingresar">
Ingresar
</button>

</form>

</div>

</body>
</html>