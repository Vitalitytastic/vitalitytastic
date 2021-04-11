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
    <title>Aanbiedingen</title>
    <link rel="stylesheet" type="text/css" href="css/aanbiedingen.css">
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
            <h1>Aanbiedingen</h1>
            
<section class="mainsec">
<?php
        $sql = "SELECT titel FROM aanbiedingen WHERE aanbieding_id = '1'";
        if($result = $conn->query($sql)){
            while($row = $result->fetch_object()){
                echo "<section class='titel'><a href='details.php?id=".$row->aanbieding_id='1'."'>".$row->titel."</a></section>";
            }
        }

?>
<img class="foto" src="images/Knalkorting.png" alt="">
</section>
<section class="mainsec">
<?php
        $sql = "SELECT titel FROM aanbiedingen WHERE aanbieding_id = '2'";
        if($result = $conn->query($sql)){
            while($row = $result->fetch_object()){
                echo "<section class='titel'><a href='details.php?id=".$row->aanbieding_id='2'."'>".$row->titel."</a></section>";
            }
        }

?>
<img class="foto" src="images/Volle_voor_lege.png" alt="">
</section>
<section class="mainsec">
<?php
        $sql = "SELECT titel FROM aanbiedingen WHERE aanbieding_id = '3'";
        if($result = $conn->query($sql)){
            while($row = $result->fetch_object()){
                echo "<section class='titel'><a href='details.php?id=".$row->aanbieding_id='3'."'>".$row->titel."</a></section>";

            }
        }

?>
<img class="foto" src="images/vroegdrinkkorting.png" alt="">
</section>
<section class="mainsec">
<?php
        $sql = "SELECT titel FROM aanbiedingen WHERE aanbieding_id = '4'";
        if($result = $conn->query($sql)){
            while($row = $result->fetch_object()){
                echo "<section class='titel'><a href='details.php?id=".$row->aanbieding_id='4'."'>".$row->titel."</a></section>";

            }
        }

?>
<img class="foto" src="images/grote_x_knaller.png" alt="">
</section>
<section class="mainsec">
<?php
        $sql = "SELECT titel FROM aanbiedingen WHERE aanbieding_id = '5'";
        if($result = $conn->query($sql)){
            while($row = $result->fetch_object()){
                echo "<section class='titel'><a href='details.php?id=".$row->aanbieding_id='5'."'>".$row->titel."</a></section>";

            }
        }

?>
<img class="foto" src="images/voorjaarsaanbieding.png" alt="">
</section>
<section class="mainsec">
<?php
        $sql = "SELECT titel FROM aanbiedingen WHERE aanbieding_id = '6'";
        if($result = $conn->query($sql)){
            while($row = $result->fetch_object()){
                echo "<section class='titel'><a href='details.php?id=".$row->aanbieding_id='6'."'>".$row->titel."</a></section>";

            }
        }

?>
<img class="foto" src="images/doldwaze_dagen.png" alt="">
</section>
<section class="mainsec">
<?php
        $sql = "SELECT titel FROM aanbiedingen WHERE aanbieding_id = '7'";
        if($result = $conn->query($sql)){
            while($row = $result->fetch_object()){
                echo "<section class='titel'><a href='details.php?id=".$row->aanbieding_id='7'."'>".$row->titel."</a></section>";

            }
        }

?>
<img class="foto" src="images/lenteactie.png" alt="">
</section>
</body>
</html>
<?php
        $result->close();
        $conn->close();
?>