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
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="EN">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
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
</header>

    <section class="achtergrond">
        <div class="container-contact">
            <div class="contactInfo"><div>
                <h2 class="h2-contactInfo">Contact Info</h2>
                <ul class="contact-list-info">
                    <li class="contact-text">
                        <span class="infoSpan"><img src="images/contact/location.png" alt=""></span>
                        <span class="infoSpan">Ergens op aarde</span>
                    </li>
                    <li class="contact-text">
                        <span class="infoSpan"><img src="images/contact/mail.png" alt=""></span>
                        <span class="infoSpan">Vitalytastic@gmail.com</span>
                    </li>
                    <li class="contact-text">
                        <span class="infoSpan"><img src="images/contact/call.png" alt=""></span>
                        <span class="infoSpan">+316 456 507 89</span>
                    </li>
                </ul>
            </div>
                <ul class="social-icons">
                    <li class="social-list"><a href="#"><img src="images/contact/1.png" alt=""></a></li>
                    <li class="social-list"><a href="#"><img src="images/contact/2.png" alt=""></a></li>
                    <li class="social-list"><a href="#"><img src="images/contact/3.png" alt=""></a></li>
                    <li class="social-list"><a href="#"><img src="images/contact/4.png" alt=""></a></li>
                    <li class="social-list"><a href="#"><img src="images/contact/5.png" alt=""></a></li>
                </ul>
            </div>

            <div class="contactForm">
                <h2 class="h2-contactForm">Stuur bericht</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span class="formSpan">Voornaam</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span class="formSpan">Achternaam</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="email" required>
                        <span class="formSpan">Email</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span class="formSpan">Telefoonnummer</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea required></textarea>
                        <span class="formSpan">Schrijf uw bericht hier...</span>
                    </div>
                </div>
                <div class="inputBox w100">
                    <input class="rond-godverdomme" type="submit" value="Verstuur">
                </div>
            </div>
        </div>
    </section>


</body>
</html>
<?php
        $result->close();
        $conn->close();
?>