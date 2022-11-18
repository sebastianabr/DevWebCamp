<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Coloca tu nuevo password</p>

    <?php
        require_once __DIR__ . "/../templates/alertas.php";
    ?>
    <?php if($token_valido){ ?>
    <form class="formulario"  method="POST">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Tu nuevo password</label>
            <input
                 type="password" 
                 id="password" 
                 placeholder="tu password" 
                 class="formulario__input"
                 name="password"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Guardar Password">


    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar Sesion</a>
        <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta? Crea una</a>
    </div>
    <?php } ?>
</main>