<?php
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-azul">Volver</a>
    
        <form class="formulario">
            <fieldset>
                <legend>Información General</legend>
            
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Nombre empleado">
            </fieldset>
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>