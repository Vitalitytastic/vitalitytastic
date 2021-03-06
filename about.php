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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="language" content="NL">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Vitalitytastic Energy">
<meta name="author" content="Marieke van Rijn, Moos ter Haak, Marco Eitens, Kane de Rode">
<meta name="keywords" content="Vitalitytastic Energy">
<title>Vitalitytastic</title>
     <link rel="stylesheet" type="text/css" href="css/about-us.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<title>about us page</title>
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
	
	
	<div class="blokken">
                    <article class="blok1">
                        <h1 class="h1-titel">About us</h1>
                        <h2 class="h1-blokken">Wij zijn VatalityTastic, een nieuw, jong, innovatief bedrijf dat streeft naar gezonde energie dranken. Daarbij denken wij ook aan duurzaamheid en milieuvriendelijkheid.</h2>
						<img class="fles-image" src="images/Flesje.png" alt="fles-img">
                    </article>
                    <article class="blok2">
                        <h1 class="titel-duurzaam">Duurzaamheid en milieuvriendelijkheid</h1>
                        <h2 class="milieu">Omdat het niet goed gaat met de aarde proberen wij er een zo goed mogelijke bijdrage aan te leveren, dit betekent dat wij onze producten verpakken in biologisch afbreekbaar karton, en ook worden al onze flesjes en bidons van biologisch afbreekbaar plastic gemaakt.</h2>
                    </article>
                    <article class="blok3">
                        <h1 class="titel-ing">Ingrediënten</h1>
                        <h2 class="ingr">Onze producten zijn zorgvuldig samengesteld van de beste ingrediënten en worden eerlijk verhandeld. </h2>
                    </article>
                    <article class="blok">
                    </article>
                </div>
</body>
</html>
<?php
        $result->close();
        $conn->close();
?>