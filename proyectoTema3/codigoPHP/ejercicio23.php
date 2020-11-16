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
            <h2>Ejercicio 23</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Validar el formulario del ejercicio anterior, de manera que si se da el caso de que
                        alguna respuesta esté vacía o errónea vuelva a salir el formulario con el mensaje correspondiente
                    </h3>
                </header>
                <article>
                    <?php   
                        /**
                        * @author Susana Fabián Antón
                        * @since 15/10/2020
                        * @version 15/10/2020
                        */
                    
                        require_once '../core/201022libreriaValidacion.php'; // incluimos la librería de validaciones
                        $entradaOK = true; // creamos una variable que indicará que el formulario está bien rellenado
                        $aErrores = [ // creamos un array para guardar los errores que surjan durante la validación
                            'eTexto' => null,
                            'eInt' => null
                        ]; 
                        $aFormulario = [ // creamos un array para 
                            fTexto => null,
                            fInt => null
                        ];
                        
                        if (isset($_POST['enviar'])) { // si se ha pulsado enviar
                            // validamos los datos utilizando los métodos de la librería de validaciones
                            $aErrores['eTexto'] = validacionFormularios::comprobarAlfabetico($_POST['texto'], 25, 1, 1);
                            $aErrores['eInt'] = validacionFormularios::comprobarEntero($_POST['int'], PHP_INT_MAX, -PHP_INT_MAX, 1);
                            foreach ($aErrores as $campo => $error) { // recorremos el vector en busca de errores
                                if ($error != null) { // si encontramos errores
                                    $entradaOK = false;
                                }
                            }
                        }
                        else { // si NO se ha pulsado enviar
                            $entradaOK = false;
                        }
                        
                        if ($entradaOK) { // si el formulario se ha rellenado y los datos son correctos
                            // procesamos de los datos
                            echo "<p>Texto: ".$_POST['texto']."</p>";
                            echo "<p>Número: ".$_POST['int']."</p>";
                        }
                        else { // si NO se ha pulsado enviar o los datos enviados no son válidos
                            // mostramos el formulario
                        ?>   
                    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <p> 
                            <label for="lblTexto">Introduce un texto</label><br>
                            <input type="text" id="lblTexto" name="texto">
                            <?php
                                if ($aErrores['eTexto'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['eTexto']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p>
                            <label for="lblInt">Introduce un entero</label><br>
                            <input type="text" id="lblInt" name="int">
                            <?php
                                if ($aErrores['eInt'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['eInt']; // mostramos el error
                                }
                            ?>
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