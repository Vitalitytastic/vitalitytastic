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
        <title>Sponsoren</title>
        <link rel="stylesheet" type="text/css" href="css/sponsoren.css">
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
            <h1 class="sponsor">Sponsoren</h1>
            <section class="blokje">
              <h1>Samenwerking</h1>
              <p>Wij van Vitalitytastic staan open voor samenwerkingen met elke onderneming, groot of klein. Dat is dan ook de rede dat wij onder andere de Formule 1 en Ziggo Dome sponsoren. Daarnaast werken wij samen met bedrijven als Albert Heijn, Plus, Jumbo en Kruidvat zodat onze producten overal te vinden zijn. Ook kunt u onze dranken vinden bij de meest bekende fastfood ketens.</p>
            </section>
            <section class="blokje2">
                <h1>Interesse</h1>
                <p>Heeft u interesse in een samenwerking met ons of wilt u dat wij u gaan sponsoren?
                    <br>neem dan <a href="index.contact.html">contact op</a></p>
              </section>
              <section class="grid">
                 <article><img src="images/sponsoren/albert_heijn.png"></article>
                 <article><img src="images/sponsoren/jumbo.png"></article>
                 <article><img src="images/sponsoren/plus.png"></article>
                 <article><img src="images/sponsoren/kruidvat.png"></article>
                 <article><img src="images/sponsoren/formula-1-logo.png"></article>
                 <article><img src="images/sponsoren/ziggo-dome.png"></article>
                 <article><img src="images/sponsoren/mcdonalds.png"></article>
                 <article><img src="images/sponsoren/kfc.png"></article>
                 <article><img src="images/sponsoren/burgerking.png"></article>
              </section>
    </body>
</html>
<?php
        $result->close();
        $conn->close();
?>