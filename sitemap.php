<!DOCTYPE html>

<html lang="de">

<head>
    <title>Crème de la Crème | Die Rezept Seite Ihres Vertrauens</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    
</head>

<body>
    <section id="sitemap">
        <h1>Start</h1>
        <a href="./index.html">Start</a></li>
        <a href="./rezepte.php">Neue Rezepte</a></li>
        <a href="./services.html">Services</a></li>
        <a href="./kontakt.php">Kontakt</a></li>
        <h1>Neue_Rezepte</h1>
        <?php
        $dir = new DirectoryIterator(dirname("rezepte/."));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                $t[] = $fileinfo->getFilename();
            }
        }
        for ($i = 0; $i < count($t); $i++) {
            $d = $t[$i];
            $s = str_replace(
                ".html",
                "",
                $d,
            );
            echo "<a href=./rezepte/$d><span style=text-transform:capitalize>$s</span></a></li>";
        }
        ?>
        <h1>Services</h1>
        <a href="services.html#download">DownloadBereich</a>
        <a class="doubleindent" href="./docs/Hirsch-Gulasch.docx" download>Hirsch-Gulasch</a></li>
        <a class="doubleindent" href="./docs/Geschmortes_Kaninchen.docx" download>Geschmortes Kaninchen mit Steinpilzen</a></li>
        <a class="doubleindent" href="./docs/Gemüselasagne.docx" download>Gemüselasagne</a></li>
        <a class="doubleindent" href="./docs/Kalte_Gurkensuppe.docx" download>Kalte Gurkensuppe</a></li>
        <a class="doubleindent" href="./docs/AqA.docx" download>Arche Quinoa Auflauf</a></li>
        <a class="doubleindent" href="./docs/Kürbis-Curry.docx" download>Kürbis-Curry</a></li>
        <h1>Kontakt</h1>
        <a href="Kontakt.php">Kontakt</a>
        <h1>Footer</h1>
        <h3>Sitemap</h3>
        <a class="doubleindent" href="sitemap.php">Sitemap</a>
        <h3>Datenschutz</h3>
        <a class="doubleindent" href="datenschutz.html">Datenschutz/Impressum</a>


    </section>
</body>

</html>