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
            <h2>Ejercicio 25</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>
                        Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros
                    </h3>
                </header>
                <article>
                    <?php
                        /**
                        * @author Susana Fabián Antón
                        * @since 25/10/2020
                        * @version 25/10/2020
                        */
                    
                        require_once '../core/201022libreriaValidacion.php'; // incluimos la librería de validaciones
                        // DECLARACIÓN E INICIALIZACIÓN DE VARIABLES
                        //constantes que contienen datos que necesitan las funciones de la libreria de validacion
                        define('OBLIGATORIO', 1);
                        define('OPCIONAL', 0);
                        $entradaOK = true; // creamos una variable que indicará que el formulario está bien rellenado
                        $aErrores = [ // creamos un array para guardar los errores que surjan durante la validación
                            'alfabetico' => null,
                            'alfanumerico' => null,
                            'entero' => null,
                            'float' => null,
                            'fecha' => null,
                            'hora' => null,
                            'email' => null,
                            'telefono' => null,
                            'password' => null,
                            'dni' => null,
                            'cp' => null,
                            'url' => null,
                            'lista' => null,
                            'radio' => null,
                            'checkbox' => null,
                            'rango' => null,
                            'texto' => null
                        ]; 
                        $aFormulario = [ // creamos un array para guardar los valores correctos de los campos del formulario
                            'alfabetico' => null,
                            'alfanumerico' => null,
                            'entero' => null,
                            'float' => null,
                            'fecha' => null,
                            'hora' => null,
                            'email' => null,
                            'telefono' => null,
                            'password' => null,
                            'dni' => null,
                            'cp' => null,
                            'url' => null,
                            'lista' => null,
                            'radio' => null,
                            'checkbox' => null,
                            'rango' => null,
                            'texto' => null
                        ];
                        
                        if (isset($_REQUEST['enviar'])) { // si se ha pulsado enviar
                            // VALIDACIÓN DE LOS DATOS -> utilizando los métodos de la librería de validaciones
                            $aErrores['alfabetico'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabetico'], 100, 1, OBLIGATORIO); // maximo, mínimo y obligatoriedad
                            $aErrores['alfanumerico'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumerico'], 100, 1, OBLIGATORIO); // maximo, mínimo y obligatoriedad
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
                            
                            // TRATAMIENTO DE LOS DATOS
                            echo "<p>Texto: ".$aFormulario['texto']."</p>";
                            echo "<p>Número: ".$aFormulario['int']."</p>";
                        }
                        else { // si NO se ha pulsado enviar o los datos enviados no son válidos
                            // mostramos el formulario
                        ?>
                    <!-- FORMULARIO -->
                    <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <p> <!-- Alfabético -->
                            <label for="lblAlfabetico">Alfabético</label>
                            <input type="text" id="lblAlfabetico" name="alfabetico" value="<?php
                                if (isset($_POST['alfabetico']) && $aErrores['alfabetico']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['alfabetico']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['alfabetico'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['alfabetico']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Alfanumérico -->
                            <label for="lblAlfanumerico">Alfanumérico</label>
                            <input type="text" id="lblAlfanumerico" name="alfanumerico" value="<?php
                                if (isset($_POST['alfanumerico']) && $aErrores['alfanumerico']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['alfanumerico']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['alfanumerico'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['alfanumerico']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Entero -->
                            <label for="lblEntero">Entero</label>
                            <input type="text" id="lblEntero" name="entero" value="<?php
                                if (isset($_POST['entero']) && $aErrores['entero']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['entero']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['entero'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['entero']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Float -->
                            <label for="lblFloat">Float</label>
                            <input type="text" id="lblFloat" name="float" value="<?php
                                if (isset($_POST['float']) && $aErrores['float']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['float']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['float'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['float']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Fecha -->
                            <label for="lblFecha">Fecha</label>
                            <input type="date" id="lblFecha" name="fecha" value="<?php
                                if (isset($_POST['fecha']) && $aErrores['fecha']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['fecha']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['fecha'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['fecha']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Hora -> FALTA VALIDACIÓN -->
                            <label for="lblHora">Hora</label>
                            <input type="time" id="lblHora" name="hora" value="<?php
                                if (isset($_POST['hora']) && $aErrores['hora']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['hora']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['hora'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['hora']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Email -->
                            <label for="lblEmail">Email</label>
                            <input type="email" id="lblEmail" name="email" value="<?php
                                if (isset($_POST['email']) && $aErrores['email']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['email']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['email'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['email']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Teléfono -->
                            <label for="lblTelefono">Teléfono</label>
                            <input type="tel" id="lblTelefono" name="telefono" value="<?php
                                if (isset($_POST['telefono']) && $aErrores['telefono']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['telefono']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['telefono'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['telefono']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Password -->
                            <label for="lblPassword">Password</label>
                            <input type="password" id="lblPassword" name="password" value="<?php
                                if (isset($_POST['password']) && $aErrores['password']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['password']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['password'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['password']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- DNI -->
                            <label for="lblDNI">DNI</label>
                            <input type="text" id="lblDNI" name="dni" value="<?php
                                if (isset($_POST['dni']) && $aErrores['dni']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['dni']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['dni'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['dni']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Código Postal -->
                            <label for="lblCP">Código Postal</label>
                            <input type="text" id="lblCP" name="cp" value="<?php
                                if (isset($_POST['cp']) && $aErrores['cp']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['cp']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['cp'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['cp']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- URL -->
                            <label for="lblURL">Introduce un texto</label>
                            <input type="url" id="lblURL" name="url" value="<?php
                                if (isset($_POST['url']) && $aErrores['url']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['url']; // mostramos el valor
                                }
                            ?>">
                            <?php
                                if ($aErrores['url'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['url']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Lista -->
                            <label for="lblLista">Lista</label>
                            <input list="lista" id="lblLista" name="lista" value="<?php
                                if (isset($_POST['lista']) && $aErrores['lista']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['lista']; // mostramos el valor
                                }
                            ?>">
                            <datalist id="lista">
                                <option value="Opción 1">
                                <option value="Opción 2">
                                <option value="Opción 2">
                            </datalist>
                            <?php
                                if ($aErrores['lista'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['lista']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p> <!-- Radio -->
                            <input type="radio" id="lblRd1" name="radio" value="radio1">
                            <label for="lblRd1">Radio 1</label>
                            <input type="radio" id="lblRd2" name="radio" value="radio2">
                            <label for="lblRd1">Radio 2</label>
                            <input type="radio" id="lblRd3" name="radio" value="radio3">
                            <label for="lblRd1">Radio 3</label>
                        </p>
                        <p> <!-- Checkbox -> CREAR VALIDACIÓN -->
                            <input type="checkbox" id="lblCh1" name="checkbox" value="checkbox1">
                            <label for="lblCh1">Checkbox 1</label>
                            <input type="checkbox" id="lblCh2" name="checkbox" value="checkbox2">
                            <label for="lblCh2">Checkbox 2</label>
                            <input type="checkbox" id="lblCh3" name="checkbox" value="checkbox3">
                            <label for="lblCh3">Checkbox 3</label>
                        </p>
                        <p> <!-- Rango -->
                            <label for="lblRango">Rango</label>
                            <input type="range" id="lblRango" name="rango" min="0" max="10" value="<?php
                                if (isset($_POST['rango']) && $aErrores['rango']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                    echo $_POST['rango']; // mostramos el valor
                                }
                            ?>">
                        </p>
                        <p> <!-- Área de texto -->
                            <label for="lblTexto">Área de texto</label>
                            <textarea id="lblTexto" name="texto" rows="10" cols="50" style="display:block">
                                <?php
                                    if (isset($_POST['ejemplo']) && $aErrores['ejemplo']==null) { // si se ha insertado un valor en este campo y no hay nigún error
                                        echo $_POST['ejemplo']; // mostramos el valor
                                    }
                                ?>
                            </textarea>
                            <?php
                                if ($aErrores['texto'] != null) { // si hay un error en este campo
                                    echo "&nbsp;".$aErrores['texto']; // mostramos el error
                                }
                            ?>
                        </p>
                        <p style="text-align: center">
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
            <p>- 25 de Octubre 2020 -</p>
        </footer>
    </body>
</html>