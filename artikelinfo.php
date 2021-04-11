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
        <title>Artikel informatie</title>
        <link rel="stylesheet" type="text/css" href="css/style.artikelinfo.css">
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
            <img class="blikje" src="images/blikje.png" alt="Blikje">
            <section id="table-all">
            <article class="item-border"></article>
                <table>
                        <caption>Voedingswaarde</caption>
                        <tr>
                        <th></th>
                        <th>Per 100ml</th>
                        <th>Per 250ml</th>
                        </tr>
                        <tr>
                        <td class="AMO1">Energie</td>
                        <td>201 KJ</td>
                        <td>503 KJ</td>
                        </tr>
                        <tr>
                        <td class="AMO2"></td>
                        <td>47kcal</td>
                        <td>118kcal(6%)</td>
                        </tr>
                        <tr>
                        <td class="AMO2">Koolhydraten</td>
                        <td>12g</td>
                        <td>30g(12%)</td>
                        </tr>
                        <tr>
                        <td class="AMO3">Waarvan suikers</td>
                        <td>11g</td>
                        <td>23g(31%)</td>
                        </tr>
                        <tr>
                        <td class="AMO4">Zout</td>
                        <td>0,19g</td>
                        <td>0,48g(8%)</td>
                        </tr>
                       
                    </table>
       
                <table class="vita">
                        <caption>Vitamines</caption>
                        <tr>
                        <th></th>
                        <th>Per 100ml (40%)</th>
                        <th>Per 250ml (100%)</th>
                        </tr>
                        <tr>
                        <td>Vitamine B2</td>
                        <td>0,56mg</td>
                        <td>1,4mg</td>
                        </tr>
                        <tr>
                        <td >Vitamine B3</td>
                        <td>6,4mg</td>
                        <td>16mg</td>
                        </tr>
                        <tr>
                        <td>Vitamine B6</td>
                        <td>0,56mg</td>
                        <td>1,4mg</td>
                        </tr>
                        <tr>
                        <td>Vitamine B12</td>
                        <td>1µg</td>
                        <td>2,5µg</td>
                        </tr>
                        <tr>
                        <td class="caf">Cafeïne (0,03%)</td>
                        </tr>
                    </table>
             </article>
            </section>
            <section id="bronwater">
            <article class="blok"></article>
            <h1>Bronwater</h1>
            <p>Wij maken gebruik van bronwater in onze product(en).</p>
            </section>
            <section id="zwanger">
                <article class="blok"></article>
                <h1>Zwangerschap</h1>
                <p>Wij raden dit product af voor vrouwen die zwanger zijn <bR>of borstvoeding geven.</p>
                </section>
    </body>
</html>
<?php
        $result->close();
        $conn->close();
?>