<!DOCTYPE html>
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
            <h2>Ejercicio 05</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Inicializar y mostrar una variable que tiene una marca de tiempo</h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 06/10/2020
                        * @version 14/10/2020
                        */
                    
                        date_default_timezone_set('Europe/Madrid'); // establecemos la zona horaria
                        $fecha = new DateTime(); // instanciamos un objeto de la clase DateTime
                        // usamos los métodos format() y getTimestamp() de la clase DateTime
                        echo "<p>La fecha de hoy es ".$fecha->format('d-m-Y H:i:s')."<br>";
                        echo "El timpestamp de esta fecha es ".$fecha->getTimestamp()."</p>";
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