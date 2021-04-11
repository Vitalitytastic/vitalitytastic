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
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>website</title>
    <link rel="stylesheet" type="text/css" href="style.event.css">
</head>
<body>

 <!--MENU-->
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
    </header>
 <!-- MENU END-->
 <div class="container">
     <div class="section">
         <div class="content b1">
             <h2>Titel 1</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate enim eum fuga laudantium maiores natus non odit officia porro possimus quibusdam
                     quisquam ratione rem temporibus, velit voluptatem? Aliquam architecto
                     aspernatur corporis delectus ducimus, facilis, illo illum minus nam natus, odio omnis pariatur placeat quam quis repellat repudiandae rerum tempora!
                 </p>
         </div>
     </div>
     <div class="section">
         <div class="content b2">
             <h2>Titel 2</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate enim eum fuga laudantium maiores natus non odit officia porro possimus quibusdam
                 quisquam ratione rem temporibus, velit voluptatem? Aliquam architecto
                 aspernatur corporis delectus ducimus, facilis, illo illum minus nam natus, odio omnis pariatur placeat quam quis repellat repudiandae rerum tempor
             </p>
         </div>
     </div>
     <div class="section">
         <div class="content b3">
             <h2>Titel 3</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate enim eum fuga laudantium maiores natus non odit officia porro possimus quibusdam
                 quisquam ratione rem temporibus, velit voluptatem? Aliquam architecto
                 aspernatur corporis delectus ducimus, facilis, illo illum minus nam natus, odio omnis pariatur placeat quam quis repellat repudiandae rerum tempora!
             </p>
         </div>
     </div>
     <div class="section">
         <div class="content b4">
             <h2>Titel 4</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate enim eum fuga laudantium maiores natus non odit officia porro possimus quibusdam
                 quisquam ratione rem temporibus, velit voluptatem? Aliquam architecto
                 aspernatur corporis delectus ducimus, facilis, illo illum minus nam natus, odio omnis pariatur placeat quam quis repellat repudiandae rerum tempora!
             </p>
         </div>
     </div>
     <div class="section">
         <div class="content b5">
             <h2>Titel 5</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate enim eum fuga laudantium maiores natus non odit officia porro possimus quibusdam
                 quisquam ratione rem temporibus, velit voluptatem? Aliquam architecto
                 aspernatur corporis delectus ducimus, facilis, illo illum minus nam natus, odio omnis pariatur placeat quam quis repellat repudiandae rerum tempora!
             </p>
         </div>
     </div>



<script src="index.js"></script>
</body>
</html>
<?php
        $result->close();
        $conn->close();
?>