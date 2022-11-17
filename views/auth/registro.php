<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Regístrate en DevWebcamp</p>

    <form class="formulario">
    <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input
                 type="nombre" 
                 id="nombre" 
                 placeholder="tu nombre" 
                 class="formulario__input"
                 name="nombre"
            >
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input
                 type="apellido" 
                 id="apellido" 
                 placeholder="tu apellido" 
                 class="formulario__input"
                 name="apellido"
            >
        </div>

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

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repite tu Password</label>
            <input 
                type="Password2" 
                id="password2" 
                placeholder="Repite tu password" 
                class="formulario__input"
                name="password2"
            >
        </div>
        <input type="submit" class="formulario__submit" value="Crear cuenta">


    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>