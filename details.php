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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanbieding</title>
    <link rel="stylesheet" type="text/css" href="css/details.css">
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
<section class="titelbox">
<?php
        $sql = "SELECT * FROM aanbiedingen WHERE aanbieding_id=".$_GET['id'];
        if($result = $conn->query($sql)){
            $row = $result->fetch_object();
                echo "<section class='titeldet'>".$row->titel."</section>";
        }
?>
</section>
<section class="infobox">
<?php
        $sql = "SELECT * FROM aanbiedingen WHERE aanbieding_id=".$_GET['id'];
        if($result = $conn->query($sql)){
            $row = $result->fetch_object();
                echo 'begindatum:'.' '.$row->begindatum.'<br>';
                echo 'einddatum:'.' '.$row->einddatum.'<br>';
                echo '<br>'.$row->omschrijving;
        }
?>
</section>
</body>
</html>
<?php
        $result->close();
        $conn->close();
?>