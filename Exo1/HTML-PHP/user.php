<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exo 1</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?Php
        echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
        echo $_SERVER["REMOTE_ADDR"] . "<br>"; // adresse ip
        echo $_SERVER["SERVER_NAME"] . "<br>";
    ?>
</body>
</html>
