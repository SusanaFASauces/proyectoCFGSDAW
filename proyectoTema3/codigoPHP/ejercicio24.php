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
            <h2>Ejercicio 24</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Completar la validación del ejercicio anterior de manera que si necesita recargarse el formulario,
                        las respuestas que se hayan tecleado correctamente aparezcan y no tengamos que volver a teclearlas
                    </h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 15/10/2020
                        * @version 19/10/2020
                        */
                    
                        require_once '../core/201022libreriaValidacion.php'; // incluimos la librería de validaciones
                        $entradaOK = true; // creamos una variable que indicará que el formulario está bien rellenado
                        $aErrores = [ // creamos un array para guardar los errores que surjan durante la validación
                            'texto' => null,
                            'int' => null
                        ]; 
                        $aFormulario = [ // creamos un array para guardar los valores correctos de los campos del formulario
                            'texto' => null,
                            'int' => null
                        ];
                        
                        if (isset($_POST['enviar'])) { // si se ha pulsado enviar
                            // validamos los datos utilizando los métodos de la librería de validaciones
                            $aErrores['texto'] = validacionFormularios::comprobarAlfabetico($_POST['texto'], 25, 1, 1);
                            $aErrores['int'] = validacionFormularios::comprobarEntero($_POST['int'], PHP_INT_MAX, -PHP_INT_MAX, 1);
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
                            // guardamos los datos en el $aFormulario
                            $aFormulario['texto']= $_POST['texto'];
                            $aFormulario['int']= $_POST['int'];
                            
                            // procesamos de los datos
                            echo "<p>Texto: ".$aFormulario['texto']."</p>";
                            echo "<p>Número: ".$aFormulario['int']."</p>";
                        }
                        else { // si NO se ha pulsado enviar o los datos enviados no son válidos
                            // mostramos el formulario
                        ?>   
                    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <p>
                            <label for="lblTexto">Introduce un texto</label><br>
                            <input type="text" id="lblTexto" name="texto" value="<?php
                                if (isset($_POST['texto']) && $aErrores['texto']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['texto']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['texto'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['texto']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p>
                            <label for="lblInt">Introduce un entero</label><br>
                            <input type="text" id="lblInt" name="int" value="<?php
                                if (isset($_POST['int']) && $aErrores['int']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['int']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['int'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['int']; // mostramos el error
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
            <p>- 19 de Octubre 2020 -</p>
        </footer>
    </body>
</html>