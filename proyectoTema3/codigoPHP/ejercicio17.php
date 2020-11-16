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
            <h2>Ejercicio 17</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Inicializar un array donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila.
                        Recorrer el array para mostrar los asientos ocupados en cada fila y las personas que lo ocupan
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
                        
                        // asignación de valores - colocamos espectadores en los asientos
                        $aTeatro[3][7] = "Espectador 1";
                        $aTeatro[3][8] = "Espectador 2";
                        $aTeatro[5][10] = "Espectador 3";
                        $aTeatro[11][15] = "Espectador 4";
                        $aTeatro[20][7] = "Espectador 5";
                    ?>
                    <article class="inline-block">
                        <header>
                            <h4>Utilizando foreach()</h4>
                        </header>
                        <div class="margin">
                            <?php
                                // recorremos el array
                                foreach ($aTeatro as $fila => $aAsientos) { // recorremos las filas
                                    foreach ($aAsientos as $asiento => $espectador) { // recorremos los asientos
                                        if($espectador != null){ // si el asiento tiene un espectador 
                                            echo "<strong>Fila $fila, asiento $asiento:</strong> $espectador<br>"; // mostramos el asiento
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </article>
                    <article class="inline-block">
                        <header>
                            <h4>Utilizando while()</h4>
                        </header>
                        <div class="margin">
                            <?php
                                // recorremos el array
                                $fila = 1;
                                while ($fila <= FILAS) { // recorremos las filas
                                    $asiento = 1;
                                    while ($asiento <= ASIENTOS) { // recorremos los asientos
                                        if($aTeatro[$fila][$asiento] != null){ // si el asiento tiene un espectador 
                                            echo "<strong>Fila $fila, asiento $asiento:</strong> ".$aTeatro[$fila][$asiento]."<br>"; // mostramos el asiento
                                        }
                                        $asiento++;
                                    }
                                    $fila++;
                                }
                            ?>
                        </div>
                    </article>
                    <article class="inline-block">
                        <header>
                            <h4>Utilizando for()</h4>
                        </header>
                        <div class="margin">
                            <?php
                                // recorremos el array
                                for ($fila=1; $fila<=FILAS; $fila++) { // recorremos las filas
                                    for ($asiento=1; $asiento<=ASIENTOS; $asiento++) { // recorremos los asientos
                                        if($aTeatro[$fila][$asiento] != null){ // si el asiento tiene un espectador 
                                            echo "<strong>Fila $fila, asiento $asiento:</strong> ".$aTeatro[$fila][$asiento]."<br>"; // mostramos el asiento
                                        }
                                    }
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