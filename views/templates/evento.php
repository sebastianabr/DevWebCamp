<div class="evento swiper-slide">
    <p class="evento__hora"><?php echo $evento->hora->hora ?></p>
    <div class="evento__informacion">
        <h4 class="evento__nombre"><?php echo $evento->nombre  ?></h4>
        <div>
            <p class="evento__introduccion"><?php echo $evento->descripcion ?></p>
        </div>
        <div clas="evento__autor-info">
            <img loading="lazy" width="200" height="300" class="evento__imagen-autor" src="<?php echo $_ENV['HOST'] . '/img/speakers/'.$evento->ponente->imagen; ?>.png" alt="Imagen ponente">
            <p class="evento__autor-nombre">
                <?php echo $evento->ponente->nombre . " " . $evento->ponente->apellido ?>
            </p>
        </div>
    </div>
</div>