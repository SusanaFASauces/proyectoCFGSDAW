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
            <h2>Ejercicio 14</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación.
                        Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación
                    </h3>
                </header>
                <article>
                    <?php
                        /**
                         * @author Susana Fabián Antón
                         * @since 14/10/2020
                         * @version 20/10/2020
                         */
                    
                        require_once '../core/libreriaOperaciones.php'; // incluimos la librería de operaciones con la que vamos a trabajar
                        // declaramos e inicializamos las variables con las que vamos a trabajar
                        $num1 = 10;
                        $num2 = 5;
                        echo "<p>Operando con los números $num1 y $num2</p>";
                        echo "<p><strong>Suma: </strong>". sumar($num1, $num2)."</p>"; // llamamos a la función sumar()
                        echo "<p><strong>Resta: </strong>". restar($num1, $num2)."</p>"; // llamamos a la función restar()
                        echo "<p><strong>Multiplicación: </strong>". multiplicar($num1, $num2)."</p>"; // llamamos a la función multiplicar()
                        echo "<p><strong>División: </strong>". dividir($num1, $num2)."</p>"; // llamamos a la función dividir()
                    ?> 
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 20 de Octubre 2020 -</p>
        </footer>
    </body>
</html>