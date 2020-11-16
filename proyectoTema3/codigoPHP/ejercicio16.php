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
            <h2>Ejercicio 16</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Recorrer el array anterior utilizando funciones para obtener el mismo resultado</h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 13/10/2020
                        * @version 14/10/2020
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
                        echo "<pre>";
                        print_r($aSueldo);
                        echo "</pre>";
                    ?> 
                </article>
                <article class="inline-block">
                    <header>
                        <h4>Usando la función each</h4>
                    </header>
                    <div class="margin">
                        <?php
                            // recorrer usando each
                            $sueldoSemanal = 0;
                            echo("<p>");
                            while ($sueldo = each($aSueldo)) {
                                echo("El ".$sueldo[key]." ganó ".$sueldo[value]."€.<br />");
                                $sueldoSemanal += $sueldo[value];
                            }
                            echo("</p>");
                            // resultado
                            echo("</p><p>El sueldo total percibido durante la semana es ".$sueldoSemanal."€.</p>");
                        ?>
                    </div>
                </article>
                <article class="inline-block">
                    <header>
                        <h4>Usando las funciones key, current y next</h4>
                    </header>
                    <div class="margin">
                        <?php
                            // recorrer usando key, current y next
                            $sueldoSemanal = 0;
                            echo("<p>");
                            reset($aSueldo);
                            while (key($aSueldo) != null) {
                                echo("El ".key($aSueldo)." ganó ". current($aSueldo)."€.<br />");
                                $sueldoSemanal += current($aSueldo);
                                next($aSueldo);
                            }
                            echo("</p>");
                            // resultado
                            echo("</p><p>El sueldo total percibido durante la semana es ".$sueldoSemanal."€.</p>");
                        ?>
                    </div>
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 14 de Octubre 2020 -</p>
        </footer>
    </body>
</html>