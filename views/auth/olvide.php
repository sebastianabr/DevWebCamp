<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebcamp</p>

    <form class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input
                 type="email" 
                 id="email" 
                 placeholder="tu email" 
                 class="formulario__input"
                 name="email"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">


    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar Sesion</a>
        <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta? Crea una</a>
    </div>
</main>