<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Susana Fabián Antón</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../webroot/css/estilo.css">
        <style>
            form {
                background-color: white;
            }
            input[type=submit] {
                width: auto;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>CFGS Desarrollo de Aplicaciones Web</h1>
            <h2>Ejercicio 28</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Realizar un formulario utilizando la plantilla para hacer formularios como churros de Nerea Álvarez
                    </h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 24/10/2020
                        * @version 24/10/2020
                        */
                        setlocale(LC_TIME, "es_ES.UTF-8"); // cambiar el lenguaje establecido en la configuración local
                        require '../core/201022libreriaValidacion.php'; //importamos la libreria de validacion
                        //
                        //constantes que contienen datos que necesitan las funciones de la libreria de validacion
                        define('OBLIGATORIO', 1); //si esta variable contiene 1 es que el campo del formulario es OBLIGATORIO
                        define('OPCIONAL', 0); //si esta variable contiene 0 es que el campo del formulario es OPCIONAL
                        
                        $entradaOK = true; //inicializamos una variable que nos ayudara a controlar si todo esta correcto

                        //inicializamos un array que se encargara de recoger los errrorer(Campos vacios)
                        $aErrores = [
                            'alfabeticoObligatorio' => null,
                            'enteroObligatorio' => null,
                            'fechaObligatorio' => null,
                            'textoObligatorio' => null,
                            'radioObligatorio' => null,
                            'listaObligarotio' => null
                        ];
                        //inicializamos un array que se encargara de recoger los datos del formulario(Campos vacios)
                        $aFormulario = [
                            'alfabeticoObligatorio' => null,
                            'enteroObligatorio' => null,
                            'fechaObligatorio' => null,
                            'textoObligatorio' => null,
                            'radioObligatorio' => null,
                            'listaObligarotio' => null
                        ];
                        
                        if (isset($_REQUEST['enviar']) && $_REQUEST['enviar'] == 'Conclusión') { //Código que se ejecuta cuando se envía el formulario
                            //La posición del array de errores recibe el mensaje de error si hubiera
                            //Campo MAX, MIN Y OBLIGATORIO/OPCIONAL
                            $aErrores['alfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], 250, 1, 1); //maximo, mínimo y obligatorio
                            $aErrores['enteroObligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['enteroObligatorio'], 10, 1, 1); //maximo, mínimo y obligatorio
                            $aErrores['fechaObligatorio'] = validacionFormularios::validarFecha($_REQUEST['fechaObligatorio'], date('Y/m/d'), "1900/01/01", 1); //obligatorio                           
                            $aErrores['textoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['textoObligatorio'], 500, 1, 1); //obligatorio
                            if(!isset($_REQUEST['radioObligatorio'])){$aErrores['radioObligatorio'] = "Debe marcarse un valor";}                           
                            $aErrores['listaObligarotio'] = validacionFormularios::validarElementoEnLista($_REQUEST['listaObligarotio'], array("ni idea", "con la familia", "de fiesta", "trabajando", "estudiando DWES"));
                            
                            foreach ($aErrores as $campo => $error) { //recorre el array en busca de mensajes de error
                                if ($error != null) { //Si lo encuentra vacia el campo y cambia la condiccion
                                    $entradaOK = false; //Cambia la condiccion de la variable
                                }
                            }
                        }
                        else {
                            $entradaOK = false; //cambiamos el valor de la variable
                        }

                        if ($entradaOK) { //si el valor es true mostramos los datos que hemos recogido
                            //Guardamos los datos del primer campo en el array del Formulario
                            $aFormulario['alfabeticoObligatorio'] = $_REQUEST['alfabeticoObligatorio'];
                            $aFormulario['enteroObligatorio'] = $_REQUEST['enteroObligatorio'];
                            $aFormulario['fechaObligatorio'] = $_REQUEST['fechaObligatorio'];
                            $aFormulario['textoObligatorio'] = $_REQUEST['textoObligatorio'];
                            $aFormulario['radioObligatorio'] = $_REQUEST['radioObligatorio'];
                            $aFormulario['listaObligarotio'] = $_REQUEST['listaObligarotio'];
                            
                            //Tratamiento de los datos
                            echo "Hoy ".strftime("%A, %e %B", time())." a las ".strftime("%H:%M", time()).".<br>";
                            echo "D. ".$aFormulario['alfabeticoObligatorio'].", nacido hace ".date_diff(date_create(date('Y-m-d')), date_create($aFormulario['fechaObligatorio']))->format('%Y años')." se siente ".$aFormulario['radioObligatorio'].".<br>";
                            echo "Valora su curso actual con un ".$aFormulario['enteroObligatorio']." sobre 10.<br>";
                            echo "Estas navidades las dedicará a ".$aFormulario['listaObligarotio'].".<br>";
                            echo "Además, opina que ".$aFormulario['textoObligatorio'].".<br>";         
                        }
                        else { //Mostramos el formulario hasta que se rellenen los campos correctamentes
                    ?>   
                    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <table>
                            <h4>Encuesta de satisfacción personal</h4>
                            <tr>
                                <td>Nombre y apellidos <?php echo $_REQUEST['alfabeticoObligatorio'] ?></td>
                                <td>
                                    <input type="text" name="alfabeticoObligatorio" value="<?php 
                                        // DUDAS: He tenido que cambiar is_null($array) por $array==null ¿Por qué?
                                        if (isset($_REQUEST['alfabeticoObligatorio']) && $aErrores['alfabeticoObligatorio']==null) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                            echo $_REQUEST['alfabeticoObligatorio'];
                                        } 
                                    ?>">
                                </td>
                                <td> 
                                    <?php if ($aErrores['alfabeticoObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                        echo $aErrores['alfabeticoObligatorio']; //mensaje de error que tiene el array aErrores  
                                     } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha de nacimiento</td>
                                <td>
                                    <input type="date" name="fechaObligatorio" value="<?php
                                        if (isset($_REQUEST['fechaObligatorio']) && is_null($aErrores['fechaObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                            echo $_REQUEST['fechaObligatorio'];
                                        } 
                                    ?>">
                                </td>
                                <td>
                                    <?php if ($aErrores['fechaObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                        echo $aErrores['fechaObligatorio']; //mensaje de error que tiene el array aErrores 
                                    } ?>
                                </td> 
                            </tr>
                            <tr>
                                <td>¿Cómo te sientes hoy?</td>
                                <td>
                                    <input type="radio" id="RO1" name="radioObligatorio" value="muy mal" <?php if(isset($_REQUEST['radioObligatorio']) && $_REQUEST['radioObligatorio'] == "muy mal"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        <label for="RO1">Muy mal</label><br>
                                    <input type="radio" id="RO2" name="radioObligatorio" value="mal" <?php if(isset($_REQUEST['radioObligatorio']) && $_REQUEST['radioObligatorio'] == "mal"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        <label for="RO2">Mal</label><br>
                                    <input type="radio" id="RO3" name="radioObligatorio" value="regular" <?php if(isset($_REQUEST['radioObligatorio']) && $_REQUEST['radioObligatorio'] == "regular"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        <label for="RO3">Regular</label><br>
                                    <input type="radio" id="RO4" name="radioObligatorio" value="bien" <?php if(isset($_REQUEST['radioObligatorio']) && $_REQUEST['radioObligatorio'] == "bien"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        <label for="RO4">Bien</label><br>
                                    <input type="radio" id="RO5" name="radioObligatorio" value="muy bien" <?php if(isset($_REQUEST['radioObligatorio']) && $_REQUEST['radioObligatorio'] == "muy bien"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        <label for="RO5">Muy bien</label>
                                </td>
                                <td>
                                    <?php if ($aErrores['radioObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                        echo $aErrores['radioObligatorio']; //mensaje de error que tiene el array aErrores 
                                    } ?>
                                </td> 
                            </tr>
                            <tr>
                                <td>¿Cómo va el curso?(1 Muy mal, 10 Muy bien)</td>
                                <td>
                                    <input type="text" name="enteroObligatorio" value="<?php
                                        if (isset($_REQUEST['enteroObligatorio']) && is_null($aErrores['enteroObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                            echo $_REQUEST['enteroObligatorio'];
                                        } 
                                    ?>">
                                </td>
                                <td> 
                                    <?php if ($aErrores['enteroObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error
                                        echo $aErrores['enteroObligatorio']; //mensaje de error que tiene el array aErrores
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>¿Cómo se presentan las vacaciones de navidad?</td>
                                <td>
                                    <select name="listaObligarotio">
                                        <option value="ni idea" <?php if(isset($_REQUEST['listaObligarotio'])){if($aErrores['listaObligarotio'] == NULL && $_REQUEST['listaObligarotio'] == "ni idea"){ echo "selected";}} ?>>Ni idea</option>
                                        <option value="con la familia" <?php if(isset($_REQUEST['listaObligarotio'])){if($aErrores['listaObligarotio'] == NULL && $_REQUEST['listaObligarotio'] == "con la familia"){ echo "selected";}} ?>>Con la familia</option>
                                        <option value="de fiesta" <?php if(isset($_REQUEST['listaObligarotio'])){if($aErrores['listaObligarotio'] == NULL && $_REQUEST['listaObligarotio'] == "de fiesta"){ echo "selected";}} ?>>De fiesta</option>
                                        <option value="trabajando" <?php if(isset($_REQUEST['listaObligarotio'])){if($aErrores['listaObligarotio'] == NULL && $_REQUEST['listaObligarotio'] == "trabajando"){ echo "selected";}} ?>>Trabajando</option>
                                        <option value="estudiando DWES" <?php if(isset($_REQUEST['listaObligarotio'])){if($aErrores['listaObligarotio'] == NULL && $_REQUEST['listaObligarotio'] == "estudiando DWES"){ echo "selected";}} ?>>Estudiando DWES</option>
                                    </select>
                                </td>
                                <td>
                                    <?php if ($aErrores['listaObligarotio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                        echo $aErrores['listaObligarotio']; //mensaje de error que tiene el array aErrores 
                                    } ?>
                                </td> 
                            </tr>
                            <tr>
                                <td>Describe brevemente tu estado de animo</td>
                                <td>
                                    <textarea name="textoObligatorio">
                                        <?php
                                            if (isset($_REQUEST['textoObligatorio']) && $aErrores['textoObligatorio']==null) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['textoObligatorio'];
                                            }
                                        ?>
                                    </textarea>
                                </td>
                                <td> 
                                    <?php if ($aErrores['textoObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                        echo $aErrores['textoObligatorio']; //mensaje de error que tiene el array aErrores  
                                     } ?>
                                </td> 
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input id="enviar" type="submit" value="Conclusión" name="enviar"> <!--Boton de ENVIAR--></td>
                            </tr>
                        </table>
                    </form>
                    <?php
                        } 
                    ?>
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 24 de Octubre 2020 -</p>
        </footer>
    </body>
</html>