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
    <title>website</title>
    <link rel="stylesheet" type="text/css" href="css/style.logo-animatie.css">
</head>
<body>
  <!-- Achtergrond animatie -->
    <div class="container">
        <h2>Vitalitastic</h2>
    </div>

</body>
<script src="js/animation-background.js"></script>
</html>
<?php
        $result->close();
        $conn->close();
?>