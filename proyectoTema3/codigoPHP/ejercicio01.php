<!DOCTYPE html>
<html>
    <head>
        <title>Susana Fabián Antón</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../webroot/css/estilo.css">
    </head>
    <body>
        <header>
            <h1>CFGS Desarrollo de Aplicaciones Web</h1>
            <h2>Ejercicio 01</h2>
        </header>
        <main>
            <section>
                <header>
                    <h3>Inicializar variables de los distintos tipos de datos básicos y mostrar los datos por pantalla</h3>
                </header>
                <?php
                    /**
                        * @author Susana Fabián Antón
                        * @since 06/10/2020
                        * @version 14/10/2020
                        */
                
                    // Incicialización de las variables
                        $string = "Susana";
                        $int = 10;
                        $float = 2.5;
                        $boolean = true;
                ?>
                <article class="inline-block">
                    <header>
                        <h4>Mostrando los datos con echo</h4>
                    </header>
                    <?php
                        echo("<p>$string es de $int tipo ".gettype($string)."</p>");
                        echo("<p>$int es de tipo ".gettype($int)."</p>");
                        echo("<p>$float es de tipo ".gettype($float)."</p>");
                        echo("<p>$boolean es de tipo ".gettype($boolean)."</p>");
                    ?>
                </article>
                <article class="inline-block">
                    <header>
                        <h4>Mostrando los datos con print</h4>
                    </header>
                    <?php
                        print("<p>$string es de tipo ".gettype($string)."</p>");
                        print("<p>$int es de tipo ".gettype($int)."</p>");
                        print("<p>$float es de tipo ".gettype($float)."</p>");
                        print("<p>$boolean es de tipo ".gettype($boolean)."</p>");
                    ?>
                </article>
                <article class="inline-block">
                    <header>
                        <h4>Mostrando los datos con printf</h4>
                    </header>
                    <?php
                        printf("<p>%s es de tipo ".gettype($string)."</p>",$string);
                        printf("<p>%d es de tipo ".gettype($int)."</p>",$int);
                        printf("<p>%.1f es de tipo ".gettype($float)."</p>",$float);
                        printf("<p>%b es de tipo ".gettype($boolean)."</p>",$boolean);
                    ?>
                </article>
                <article class="inline-block">
                    <header>
                        <h4>Mostrando los datos con print_r</h4>
                    </header>
                    <?php
                        print_r("<p>$string es de tipo ".gettype($int)."</p>");
                        print_r("<p>$int es de tipo ".gettype($int)."</p>");
                        print_r("<p>$float es de tipo ".gettype($float)."</p>");
                        print_r("<p>$boolean es de tipo ".gettype($boolean)."</p>");
                    ?>
                </article>
                <article class="inline-block">
                    <header>
                        <h4>Mostrando los datos con var_dump</h4>
                    </header>
                    <?php
                        echo "<p>"; var_dump($string); echo "</p>";
                        echo "<p>"; var_dump($int); echo "</p>";
                        echo "<p>"; var_dump($float); echo "</p>";
                        echo "<p>"; var_dump($boolean); echo "</p>";
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

