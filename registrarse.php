<?php
    require 'includes/funciones.php';
    incluirTemplate('header_login');
?>

    <main class="registrarse">
        <div class="contenedor2">
            <h1 class="primero2">Registro</h1>
            <form class="formulario2">
                <fieldset>
                    <div class="elemento">
                        <label for="usuario"><img class="imagenes" src="build/img/usuario.webp" alt="Logotipo de usuario">Usuario</label>
                        <input type="text"  id="usuario" required="true">               
                    </div>
                    <div class="elemento">
                        <label for="contraseña"><img class="imagenes" src="build/img/candado.webp" alt="Logotipo de usuario">Contraseña</label>
                        <input type="text"  id="contraseña" required="true">
                    </div>
                </fieldset>
    
                <input type="submit" value="Crear Cuenta" class="boton-azul centrado3">
            </form>
            <a class="blanco" href="login.php">Volver al ingreso</a>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>