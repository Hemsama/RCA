<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="inicio">
        <div class="info contenedor2">
            <h1 class="primero">Datos usuario</h1>
            <p>Nombre:</p>
            <p>Apellido:</p> 
            <p>Cédula:</p>
            <p>Correo:</p>
            <p>Identificador empleado:</p>
            <p>Telefono:</p>
            <p>Area trabajo:</p>
            <h4 class="save">Guardar</h4>
        </div>
        <div class="logout">
            <a href="login.php">Cerrar Sección</a>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>