<fieldset class="formulario__fieldset"> 
    <legend class="formulario__legend">Información Personal</legend>
    <div class="formulario__campo">
        <label class="formulario__label">Nombre</label>
        <input
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre Ponente"
            value= "<?php echo $ponente->nombre ?? '' ?>"
        >
    </div>

    <div class="formulario__campo">
        <label class="formulario__label">Apellido</label>
        <input
            type="text"
            class="formulario__input"
            id="apellido"
            name="apellido"
            placeholder="Apellido Ponente"
            value= "<?php echo $ponente->apellido ?? '' ?>"
        >
    </div>

    <div class="formulario__campo">
        <label class="formulario__label">Ciudad</label>
        <input
            type="text"
            class="formulario__input"
            id="ciudad"
            name="ciudad"
            placeholder="Ciudad Ponente"
            value= "<?php echo $ponente->ciudad ?? '' ?>"
        >
    </div>

    <div class="formulario__campo">
        <label class="formulario__label">Pais</label>
        <input
            type="text"
            class="formulario__input"
            id="pais"
            name="pais"
            placeholder="Pais Ponente"
            value= "<?php echo $ponente->pais ?? '' ?>"
        >
    </div>

    <div class="formulario__campo">
        <label class="formulario__label">Imagen</label>
        <input
            type="file"
            class="formulario__input formulario__input--file"
            id="imagen"
            name="imagen"
        >
    </div>
    <?php if(isset($ponente->imagen_actual)){  ?>
        <p class="formulario__texto">Imagen Actual</p>
        <div class="formulario__imagen">
            <img src="<?php echo $_ENV['HOST'] . '/img/speakers/'.$ponente->imagen; ?>.png" alt="Imagen ponente">
        </div>
    <?php } ?>
</fieldset>

<fieldset class="formulario__fieldset"> 
    <legend class="formulario__legend">Información Extra</legend>
    <div class="formulario__campo">
        <label class="formulario__label">Areas de Experiencia (Separadas por coma)</label>
        <input
            type="text"
            class="formulario__input"
            id="tags_input"
            name="tags"
            placeholder="Ej. Node.js, PHP, CSS, Laravel, UX/UI"
        >
        <div id="tags" class="formulario__listado"></div>
        <input type="hidden" id="hidden-tags" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset"> 
    <legend class="formulario__legend">Información Extra</legend>
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[facebook]"
                placeholder="Facebook"
                value="<?php echo $redes->facebook??'' ?>"
            >
        </div>
     </div>

     <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[twitter]"
                placeholder="Twitter"
                value="<?php echo $redes->twitter??'' ?>"
            >
        </div>
     </div>

     <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[youtube]"
                placeholder="Youtube"
                value="<?php echo $redes->youtube??'' ?>"
            >
        </div>
     </div>

     <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[instagram]"
                placeholder="Instagram"
                value="<?php echo $redes->instagram??'' ?>"
            >
        </div>
     </div>

     <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>
            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[tiktok]"
                placeholder="Tiktok"
                value="<?php echo $redes->tiktok??'' ?>"
            >
        </div>
     </div>

     <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-github"></i>
            </div>
            <input
                type="text"
                class="formulario__input--sociales"
                name="redes[github]"
                placeholder="Github"
                value="<?php echo $redes->github??'' ?>"
            >
        </div>
     </div>
</fieldset>