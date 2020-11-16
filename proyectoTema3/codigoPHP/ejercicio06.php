<!DOCTYPE html>
<!-- 
    Autor.- Susana Fabián Antón
    Fecha creación.- 14/10/2020
    Última modificación.- 14/10/2020
-->
<html>
    <head>
        <title>Susana Fabián Antón</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../webroot/css/estilo.css">
    </head>
    <body>
        <header>
            <h1>CFGS Desarrollo de Aplicaciones Web</h1>
            <h2>Ejercicio 06</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días</h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 14/10/2020
                        * @version 14/10/2020
                        */
                    
                        date_default_timezone_set('Europe/Madrid');
                        $fecha = new DateTime();
                        echo "<p>La fecha de hoy es ".$fecha->format('d-m-Y')."<br>";
                        $fecha->add(new DateInterval('P60D'));
                        echo "La fecha dentro de 60 días será ".$fecha->format('l, d-m-Y')."</p>";
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