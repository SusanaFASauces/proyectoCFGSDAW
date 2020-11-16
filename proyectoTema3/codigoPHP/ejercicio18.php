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
            <h2>Ejercicio 18</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Recorrer el array anterior utilizando funciones para obtener el mismo resultado
                    </h3>
                </header>
                <article>
                   <?php
                        /**
                         * @author Susana Fabián Antón
                         * @since 20/10/2020
                         * @version 20/10/2020
                         */
                   
                        //definición de constantes
                        define("FILAS", 20); // constante que indica el número de filas
                        define("ASIENTOS", 15); // constante que indica el número de asientos por fila
                        
                        // creación del array
                        for ($fila=1; $fila<=FILAS; $fila++) { 
                            for ($asiento=1; $asiento<=ASIENTOS; $asiento++) {
                                $aTeatro[$fila][$asiento] = null; // inicializamos el $aTeatro a null
                            }
                        }
                        
                        // asignación de valores -> colocamos espectadores en los asientos
                        $aTeatro[3][7] = "Espectador 1";
                        $aTeatro[3][8] = "Espectador 2";
                        $aTeatro[5][10] = "Espectador 3";
                        $aTeatro[11][15] = "Espectador 4";
                        $aTeatro[20][7] = "Espectador 5";
                    ?>
                    <article class="inline-block">
                        <header>
                            <h4>Utilizando each()</h4>
                        </header>
                        <div class="margin">
                            <?php
                                // recorremos el array
                                while ($fila = each($aTeatro)) { // recorremos las filas
                                    while ($asiento = each($fila[value])) { // recorremos los asientos -> $fila[value] nos devuelve el array de asientos de cada fila)
                                        if($aTeatro[$fila[key]][$asiento[key]] != null){ // si el asiento tiene un espectador 
                                            echo "<strong>Fila $fila[key], asiento $asiento[key]:</strong> ".$asiento[value]."<br>"; // mostramos el asiento
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </article>
                    <article class="inline-block">
                        <header>
                            <h4>Utilizando key(), current() y next()</h4>
                        </header>
                        <div class="margin">
                            <?php
                                // recorremos el array
                                reset($aTeatro);
                                while (key($aTeatro) != null) { 
                                    $aAsientos = current($aTeatro); // variable que contiene el array de asientos de esta fila
                                    while (key($aAsientos) != null) { 
                                        if(current($aAsientos) != null){ // si el asiento tiene un espectador 
                                            echo "<strong>Fila ".key($aTeatro).", asiento ".key($aAsientos).":</strong> ". current($aAsientos)."<br>"; // mostramos el asiento
                                        }
                                        next($aAsientos);
                                    }
                                    next($aTeatro);
                                }
                            ?>
                        </div>
                    </article>
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 20 de Octubre 2020 -</p>
        </footer>
    </body>
</html>