<!DOCTYPE html>
<!-- 
    Autor.- Susana Fabián Antón
    Fecha creación.- 13/10/2020
    Última modificación.- 13/10/2020
-->
<html lang="es">
    <head>
        <title>Susana Fabián Antón</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../webroot/css/estilo.css">
    </head>
    <body>
        <header>
            <h1>CFGS Desarrollo de Aplicaciones Web</h1>
            <h2>Ejercicio 08</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Mostrar la dirección IP del equipo desde el que estás accediendo</h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 13/10/2020
                        * @version 13/10/2020
                        */
                    
                        echo "<p>".$_SERVER['REMOTE_ADDR']."</p>";
                    ?> 
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 13 de Octubre 2020 -</p>
        </footer>
    </body>
</html>