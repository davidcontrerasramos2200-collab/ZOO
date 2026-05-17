<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}
?>

<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zoológico Santa Rita</title>

<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-image: url('fondito.jpg'); /* Imagen de fondo */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: white;
        text-align: center;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.6);
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h1 {
        font-size: 48px;
        margin-bottom: 10px;
        color: #f1c40f;
        text-shadow: 2px 2px 5px black;
    }

    p {
        font-size: 20px;
        color: #f0f0f0;
        margin-bottom: 40px;
    }

    .menu {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .menu a {
        background-color: #27ae60;
        color: white;
        text-decoration: none;
        padding: 15px 30px;
        border-radius: 12px;
        font-size: 18px;
        transition: 0.3s;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    }

    .menu a:hover {
        background-color: #2ecc71;
        transform: scale(1.05);
    }

    footer {
        position: absolute;
        bottom: 10px;
        width: 100%;
        text-align: center;
        font-size: 14px;
        color: #ccc;
    }
</style>
</head>

<body>
    <div class="overlay">
        <h1>🐘 Zoológico del Profe Camilo</h1>
        <p>Sistema de gestión de especies, animales y alimentación</p>

        <div class="menu">
            <a href="insertar_especie.php">➕ Registrar Especie</a>
            <a href="insertar_animal.php">🐾 Registrar Animal</a>
            <a href="consultar_animales.php">🔍 Consultar Animales</a>
            <a href="actualizar_animales.php">🩺 Actualizar Estado</a>
            <a href="eliminar_alimento.php">🗑️ Eliminar Alimento</a>
            <a href="alimentacion_detalle.php">📋 Historial de Alimentación</a>
            <a href="cerrar.php">❌ Cerrar Sesión</a>
            <a href="registrar_alimento.php">
Registrar alimento
</a>
        </div>
    </div>

    <footer>
        Taller PHP + MySQL - Base de Datos I | Universidad Nuevo Horizonte © 2025
        Docente: Camilo Andres Jaramillo Guerrero |Base de Datos I 
    </footer>
</body>
</html>
