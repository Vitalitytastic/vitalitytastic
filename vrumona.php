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
        <title>Over vrumona</title>
        <link rel="stylesheet" type="text/css" href="css/style.vrumona.css">
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
            <img class="vrumona" src="images/vrumona/vrumona logo.png" alt="logo vrumona">
            <section class="blokje">
              <h1>Doel</h1>
              <p>Vrumona was in Nederland de eerste frisdrankproducent die laagcalorische frisdranken op de markt bracht. Zo introduceerden zij al in 1957 Rivella, een frisdrank met zo weinig suiker dat zelfs het Diabetesfonds het voor patiënten voorschreef. Later kwamen daar vele andere merken bij, zoals Crystal Clear en Sourcy Water met toegevoegde smaken en zonder suiker.<br> <br> Ons doel is dat laagcalorische frisdranken in 2030 de standaard zijn. Daarmee zijn wij voortrekker van het gezonder maken van Nederland. Inmiddels is meer dan 52 procent van de dranken die wij verkopen een frisdrank met weinig calorieën.
                Omdat we graag consumenten willen helpen een gezondere keuze te maken, besteden we ruim 85 procent van ons marketing- en promotiebudget aan laagcalorische frisdranken.</p>
            </section>
            <section class="blokje2">
                <h1>Gezonde levensstijl en keuzes in frisdrank</h1>
                <p>Voldoende drinken is goed voor lichaam en geest. Dat wil toch iedereen? Toch zien we dat het niet iedereen lukt om invulling te geven aan een gezonde levensstijl. 
                    Gezondere keuzes zijn niet bij alle consumenten bekend en ook niet overal beschikbaar. 
                    Bovendien is ‘gezond’ vaak ook even wennen, want het brengt nieuwe smaken met zich mee. 
                    Wij overtuigen ondernemers en consumenten graag van onze vele gezondere keuzes. 
                    Zo hebben we samen met Subway het assortiment frisdranken helemaal omgezet naar frisdranken met weinig calorieën. 
                    Het resultaat mag er zijn. De klanten missen de dranken met suiker niet, want de omzet in frisdrank nam zelfs toe.
                    <br><br>Bij Vrumona willen we de drempels wegnemen die mensen nu nog weerhouden van een gezonde, goede en duurzame levensstijl. 
                    Dat gaat niet in één keer, maar stapsgewijs komen we heel ver.
                    We reduceren het aantal calorieën in ons huidige portfolio en innoveren met laagcalorische frisdranken. 
                    Op termijn verrijken we onze producten bovendien met gezonde voedingssupplementen. 
                    Ook verduurzamen wij door een zuiniger productieproces en gebruiken we door slimme oplossingen jaarlijks tienduizenden kilo’s minder verpakkingsmateriaal. Elke dag houden we nieuwe gezonde en goede kansen tegen het licht, en grijpen we de meest veelbelovende.
                    Door deze gezonde en duurzame keuzes te maken, maken we bij Vrumona elke dag actief werk van Goed en Gezond Drinken voor Iedereen.</p>
              </section>
              <section class="blokje">
                <h1>Gezond en duurzaam ondernemen</h1>
                <p>Maar goed en gezonder drinken gaat volgens ons nog veel verder. Bij Vrumona hebben we steeds meer oog voor onze leefomgeving, net als veel consumenten. Naast gezondheid is dus ook duurzaamheid een heel nadrukkelijke keuze van Vrumona.
                   <br><br> Gezondheid en duurzaamheid vragen om minder CO2-uitstoot en vermindering van de hoeveelheid water die we samen verbruiken. Het vraagt ook om een hoger gehalte recyclebaar materiaal in onze verpakkingen. En dus zijn we daar altijd mee bezig. Lees hier verder over Vrumona en duurzaamheid en Maatschappelijk Verantwoord Ondernemen (MVO).</p>
              </section>
              <img class="info" src="images/vrumona/Duurzaamheid_Infographic_2020.jpg">
              <section class="blokje3">
              <h1>Onze merken</h1>
            </section>
              <section class="grid">
                 <article><img src="images/merken/rivella logo.jpg"></article>
                 <article><img src="images/merken/royal club logo.png"></article>
                 <article><img src="images/merken/Pepsi-Logo.png"></article>
                 <article><img src="images/merken/ranja logo.png"></article>
                 <article><img src="images/merken/sourcy logo.png"></article>
                 <article><img src="images/merken/sourcy vitamin water logo.jpg"></article>
                 <article><img src="images/merken/7up logo.png"></article>
                 <article><img src="images/merken/sisi logo.png"></article>
                 <article><img src="images/merken/crystal clear logo.png"></article>
                 <article><img src="images/merken/gatorade logo.jpg"></article>
                 <article><img src="images/merken/lipton logo.png"></article>
                 <article><img src="images/merken/climax logo.jpg"></article>
              </section>
    </body>
</html>
<?php
        $result->close();
        $conn->close();
?>