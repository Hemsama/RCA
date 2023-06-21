<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="inicio">
        <div class="contenedor2 ">
            <h1 class="primero reg">Registros</h1>
            <div class="registro">
                <h1>Fecha:</h1>
                <p>00/00/0000</p>
            </div>
            <div class="registro">
                <h1>Hora Salida:</h1>
                <p>00:00:00</p>
            </div>
            <div class="registro">
                <h1>Hora Ingreso:</h1>
                <p>00:00:00</p>
            </div>
            <div class="registro">
                <div>
                    <p>Anterior</p>
                    <img src="build/img/arrow-left.svg" alt="Flecha Izquierda">
                </div>
                <div>
                    <p>Siguiente</p>
                    <img src="build/img/arrow-right.svg" alt="Flecha Derecha">
                </div>
            </div>
            <p class="centrar">Editar Registro</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>