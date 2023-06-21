<?php
    require 'includes/funciones.php';
    incluirTemplate('header_login');
?>
    <main class="login">
        <div class="contenedor3">
            <img class="perfil" src="build/img/perfil.webp" alt="Logotipo de usuario">
            <form class="formulario">
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
    
                <input type="submit" value="Ingresar" class="boton-azul centrado2">
            </form>
            <a class="centrado" href="recuperar_cuenta.php">¿Olvidaste tu Contraseña?</a>
            <a class="centrado" href="registrarse.php">Registrarse</a>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>