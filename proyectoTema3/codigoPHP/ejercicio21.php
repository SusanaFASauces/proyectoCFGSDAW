<!DOCTYPE html>
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
            <h2>Ejercicio 21</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Construir un formulario para recoger un cuestionario realizado a una persona
                        y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas
                    </h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 15/10/2020
                        * @version 15/10/2020
                        */
                    ?>
                    <form name="formulario" action="tratamientoEjercicio21.php" method="post">
                        <p>
                            <label for="lblTexto">Introduce un texto</label><br>
                            <input type="text" id="lblTexto" name="texto">
                        </p>
                        <p>
                            <label for="lblInt">Introduce un entero</label><br>
                            <input type="text" id="lblInt" name="int">
                        </p>
                        <p>
                            <input type="submit" value="Enviar" name="enviar">
                        </p>
                    </form>
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 15 de Octubre 2020 -</p>
        </footer>
    </body>
</html>