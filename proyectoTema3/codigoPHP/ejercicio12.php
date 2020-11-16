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
            <h2>Ejercicio 12</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Mostrar el contenido de las variables superglobales</h3>
                </header>
                <article>
                    <header>
                        <h4>$GLOBALS</h4>
                    </header>
                    <h5>Mostrando con print_r</h5>
                    <p>
                        <?php
                            /**
                            * @author Susana Fabián Antón
                            * @since 13/10/2020
                            * @version 14/10/2020
                            */
                        
                            echo "<pre>";
                            print_r($GLOBALS);
                            echo "</pre>";
                        ?>
                    </p>
                    <h5>Mostrando con foreach</h5>
                    <table class="margin">
                        <tbody>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                foreach ($GLOBALS as $variable => $valor) {
                                    echo "<tr>";
                                    echo "<td>".$variable."</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </article>
                <article>
                     <header>
                        <h4>$_SERVER</h4>
                    </header>
                    <h5>Mostrando con print_r</h5>
                    <p>
                        <?php
                            echo "<pre>";
                            print_r($_SERVER);
                            echo "</pre>";
                        ?>
                    </p>
                    <h5>Mostrando con foreach</h5>
                    <table class="margin">
                        <tbody>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                foreach ($_SERVER as $variable => $valor) {
                                    echo "<tr>";
                                    echo "<td>".$variable."</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </article>
                <article>
                     <header>
                        <h4>$_GET</h4>
                    </header>
                    <h5>Mostrando con print_r</h5>
                    <p>
                        <?php
                            echo "<pre>";
                            print_r($_GET);
                            echo "</pre>";
                        ?>
                    </p>
                    <h5>Mostrando con foreach</h5>
                    <table class="margin">
                        <tbody>
                            <tr>
                                <th>Variable</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                                foreach ($_GET as $variable => $valor) {
                                    echo "<tr>";
                                    echo "<td>".$variable."</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </article>
            </section>
        </main>
        <footer>
            <address>Contacta conmigo en: susana.fabant@educa.jcyl.es</address>
            <p>- 14 de Octubre 2020 -</p>
        </footer>
    </body>
</html>