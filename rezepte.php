<!DOCTYPE html>

<html lang="de">

<head>
    <title>Crème de la Crème | Die Rezept Seite Ihres Vertrauens</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <noscript>
    <style>
            body div {
                display: none;
            }

            @media screen and (max-width: 604px) {
                #top ul li:first-child {
                    display: none;
                }

                #top ul {
                    display: flex;
                    flex-direction: row-reverse;
                    justify-content: space-evenly;
                }

                #top ul li a.hidden {
                    padding: 0px;
                    font-size: 25px !important;
                    display: block;
                    color: black;
                 
                }

                #top #menu.show img{
                    display: none;
                }
            }
        </style>
    </noscript>
</head>

<body>
    <nav id="top">
        <ul>
            <li>
                <h3 id="logo">CC</h3>
                <!-- logobild-->
            </li>
            <li><a class="hidden" href="kontakt.php">Kontakt</a></li>
            <li><a class="hidden" href="services.html">Services</a></li>
            <li><a class="hidden" href="rezepte.php">Rezepte</a></li>
            <li><a class="hidden" href="index.html">Start</a></li>
            <li id="menu" class="show" tabindex="0"><img src="./images/bars-solid.svg"></li>
        </ul>
    </nav>

    <main>
        <section id="neue_rezepte">
            <h2>Hier finden Sie täglich die neuesten Rezepte.</h2>
            <a href="#rezeptlinks">Hier geht es zu den Rezepten</a>
        </section>
        <section id="rezeptlinks">
            <ul>
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
                echo "<li><a href=./rezepte/$d><span style=text-transform:capitalize>$s</span></a><img id=$s alt=$s></li>";
            }
            ?>
            </ul>
        </section>
    </main>
    <footer>
        <ul>
        <li><span>Copyright 2022 | Crème de la Crème</span></li>
            <li><a href="datenschutz.html">Impressum/Datenschutz</a></li>
            <li><a href="sitemap.php">Sitemap</a></li>
        </ul>
    </footer>
    <script src="app.js"></script>
</body>


</html>
