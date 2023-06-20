<?php
    include './includes/templates/header_login.php'
?>

    <main class="registrarse">
        <div class="contenedor2">
            <h1 class="primero3">Recuperación </br> de cuenta</h1>
            <form class="formulario2">
                <fieldset>
                    <div class="elemento">
                        <label for="usuario"><img class="imagenes" src="build/img/correo-electronico.webp" alt="Logotipo de usuario">Ingrese su email</label>
                        <input type="email"  id="usuario" required="true">               
                    </div>
                </fieldset>
    
                <input type="submit" value="Enviar Contraseña" class="boton-azul centrado4">
            </form>
            <a class="blanco" href="login.php">Volver al ingreso</a>
        </div>
    </main>

<?php 
    include './includes/templates/footer.php'
?>