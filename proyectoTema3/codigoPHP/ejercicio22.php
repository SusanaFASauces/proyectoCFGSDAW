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
            <h2>Ejercicio 22</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas</h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 15/10/2020
                        * @version 15/10/2020
                        */
                        if (isset($_POST['enviar'])) {  // el formulario ha sido enviado
                            // procesado de los datos
                            echo "<p>Texto: ".$_POST['texto']."</p>";
                            echo "<p>Número: ".$_POST['int']."</p>";
                        }
                        else { // el formulario no ha sido enviado
                            // muestra del formulario
                    ?>   
                    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
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
                    <?php
                        }
                    ?>
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 15 de Octubre 2020 -</p>
        </footer>
    </body>
</html>