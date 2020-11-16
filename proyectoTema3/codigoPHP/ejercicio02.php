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
            <h2>Ejercicio 02</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Inicializar y mostrar una variable heredoc</h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 06/10/2020
                        * @version 06/10/2020
                        */
                    
                        $info = <<< SUSANA
                        <p>Hola me llamo Susana <br>
                        y soy estudiante del ciclo superior: <br>
                        Desarrollo de Aplicaciones Web</p>
                        SUSANA;
                        echo $info;
                    ?>
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 6 de Octubre 2020 -</p>
        </footer>
    </body>
</html>