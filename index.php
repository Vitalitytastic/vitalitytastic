<?php
        $host = "localhost:8889";
        $user = "root";
        $pass = "root";
        $database =  "energy";
        $conn = new mysqli($host, $user, $pass, $database);
        if ($conn->connect_error) {
            echo $conn->connect_error;
        }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="language" content="NL">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Vitalitytastic Energy">
        <meta name="author" content="Marieke van Rijn, Moos ter Haak, Marco Eitens, Kane de Rode">
        <meta name="keywords" content="Vitalitytastic Energy">
        <title>Vitalitytastic</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>
    <body>
            <header>
                <input type="checkbox" id="menu-toggle"/>
                <label id="trigger" for="menu-toggle"></label>
                <label id="burger" for="menu-toggle"></label>
                <ul id="menu">
                    <li class="menu-list"><a class="menu-a" href="index.php">Home</a></li>
                    <li class="menu-list"><a class="menu-a" href="artikelinfo.php">Product Informatie</a></li>
                    <li class="menu-list"><a class="menu-a" href="vrumona.php">Over Vrumona</a></li>
                    <li class="menu-list"><a class="menu-a" href="aanbiedingen.php">Aanbiedingen</a></li>
                    <li class="menu-list"><a class="menu-a" href="#">Evenementen</a></li>
                    <li class="menu-list"><a class="menu-a" href="#">Artiesten</a></li>
                    <li class="menu-list"><a class="menu-a" href="sponsoren.php">Sponsoren</a></li>
                    <li class="menu-list"><a class="menu-a" href="about.php">About Us</a></li>
                    <li class="menu-list"><a class="menu-a" href="index.contact.php">Contact</a></li>
                </ul>
                <img class="logo" src="images/logo.png" alt="Logo Vitalitytastic">
            </header>

            <div class="page-intro"> <!--------------------- extra div geplaats om stukken duidelijker te scheiden --------------------->
                <img class="blikje" src="images/Blikje.png" alt="Blikje">
                <article id="intro-tekst">
                    <h1 class="h1-titel">NIEUW: Vitalitytastic energy</h1>
                    <p class="p-ondertitel">Probeer nu Vitalitytastic, verkrijgbaar op diverse evenementen en in diverse winkels. </p>
                </article>
            </div>

            <div class="blokken">
                <div class="blokken-groot"> <!--------------------- extra div's geplaatst om stukken duidelijker te scheiden --------------------->
                <div class="blok1-groot">
                    <article class="blok1">
                        <h1 class="h1-blokken">Huidige aanbiedingen</h1>
                        <?php $sql = "SELECT * FROM aanbiedingen";
                            if ($result = $conn->query($sql)) {
                                while ($row = $result->fetch_object()) {
                                    echo "<p class='aanbiedingen-titel'><a" . $row->aanbiedingen_id . "'>" . $row->titel . "</a></p>";
                                }
                            }
                        $sql = "SELECT * FROM aanbiedingen";
                        if ($result = $conn->query($sql)) {
                            while ($row = $result->fetch_object()) {
                                echo "<p class='aanbiedingen-begindatum'><a" . $row->aanbiedingen_id . "'>" . $row->begindatum . "</a></p>";
                            }
                        }
                        $sql = "SELECT * FROM aanbiedingen";
                        if ($result = $conn->query($sql)) {
                            while ($row = $result->fetch_object()) {
                                echo "<p class='aanbiedingen-einddatum'><a" . $row->aanbiedingen_id . "'>" . $row->einddatum . "</a></p>";
                            }
                        }
                        $sql = "SELECT * FROM aanbiedingen";
                        if ($result = $conn->query($sql)) {
                            while ($row = $result->fetch_object()) {
                                echo "<p class='aanbiedingen-omschrijving'><a" . $row->aanbiedingen_id . "'>" . $row->omschrijving . "</a></p>";
                            }
                        }
//                        $sql = "SELECT * FROM aanbiedingen";
//                        if ($result = $conn->query($sql)) {
//                            while ($row = $result->fetch_object()) {
//                                echo "<div class='aanbiedingen-img'><img" . $row->aanbiedingen_id . "'>" . $row->afbeelding . "</img></div>";
//                            }
//                        }
//                            ?>
                    </article>
                </div>
                <div class="blok2-groot">
                    <article class="blok2">
                        <h1 class="h1-blokken">Aankomende evenementen</h1>

                    </article>
                </div>
                </div>
                <div class="blokken-klein"> <!--------------------- extra div's geplaatst om stukken duidelijker te scheiden --------------------->
                <div class="blok3-klein">
                    <article class="blok3">
                        <h1 class="h1-blokken">Artikel informatie</h1>
                    </article>
                </div>
                <div class="blok4-klein">
                    <article class="blok4">
                        <h1 class="h1-blokken">Over Vitalitytastic</h1>
                    </article>
                </div>
                <div class="blok5-klein">
                    <article class="blok5">
                        <h1 class="h1-blokken">Over Vrumona</h1>
                    </article>
                </div>
                <div class="blok6-klein">
                    <article class="blok6">
                        <h1 class="h1-blokken">Artiesten</h1>
                    </article>
                </div>
                <div class="blok7-klein">
                    <article class="blok7">
                        <h1 class="h1-blokken">Sponsoren</h1>
                    </article>
                </div>
                <div class="blok8-klein">
                    <article class="blok8">
                        <h1 class="h1-blokken">Contact</h1>
                    </article>
                </div>
                </div>
            </div>

    </body>
</html>
<?php
        $result->close();
        $conn->close();
?>