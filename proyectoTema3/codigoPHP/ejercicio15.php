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
            <h2>Ejercicio 15</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Crear e inicializar un array con el sueldo percibido de lunes a domingo.
                        Recorrer el array para calcular el sueldo percibido durante la semana
                    </h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 13/10/2020
                        * @version 13/10/2020
                        */
                    
                        // rellenar vector
                        $aSueldo = [
                            "Lunes" => 35,
                            "Martes" => 35,
                            "Miércoles" => 0,
                            "Jueves" => 56,
                            "Viernes" => 56,
                            "Sábado" => 56,
                            "Domingo" => 42
                        ];
                        // mostrar vector
                        echo("<pre>");
                        print_r($aSueldo);
                        echo("</pre>");
                        // recorrer vector
                        $sueldoSemanal = 0;
                        echo("<p>");
                        foreach ($aSueldo as $dia => $sueldo) {
                            echo("El ".$dia." ganó ".$sueldo."€.<br>");
                            $sueldoSemanal += $sueldo;
                        }
                        echo("</p>");
                        // resultado
                        echo("<p>El sueldo total percibido durante la semana es ".$sueldoSemanal."€.</p>");
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