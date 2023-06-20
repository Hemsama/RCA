<?php
    include './includes/templates/header.php'
?>

    <main class="inicio">
        <div class="contenedor2">
            <h1 class="primero">Hora Ingreso:</h1>
            <p><?php ini_set('date.timezone', 'America/Bogota'); echo date('g:i A') ?></p>
            <h1>Fecha:</h1>
            <p><?php echo date('d-m-y'); ?></p>
            <h4 class="save primero">Guardar</h4>
        </div>
    </main>

<?php 
    include './includes/templates/footer.php'
?>