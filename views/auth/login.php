<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Inicia sesión en DevWebcamp</p>

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

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input 
                type="Password" 
                id="password" 
                placeholder="tu password" 
                class="formulario__input"
                name="password"
            >
        </div>
        <input type="submit" class="formulario__submit">


    </form>
    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aun no tienes cuenta? Obtener una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>