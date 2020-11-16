<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Susana Fabián Antón</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../webroot/css/estilo.css">
    </head>
    <body>
        <header>
            <h1>CFGS Desarrollo de Aplicaciones Web</h1>
            <h2>Ejercicio 03</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Mostrar la fecha y hora actual formateada en castellano</h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 06/10/2020
                        * @version 14/10/2020
                        */
                    
                        setlocale(LC_TIME, "es_ES.UTF-8"); // cambiar el lenguaje establecido en la configuración local
                        $fecha = strftime("%A, %e %B %Y<br> %H:%M:%S", time()); // formatear una fecha según el lenguaje establecido
                        echo "<p>".$fecha."</p>";
                    ?>
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 14 de Octubre 2020 -</p>
        </footer>
    </body>
</html>