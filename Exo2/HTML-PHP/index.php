<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exo 2</title>

</head>
<body>
    <a href="newPage.php">newPage</a><br>
    <?Php
        echo $_SESSION["nom"]."<br>";
        echo $_SESSION["prenom"]."<br>";
        echo $_SESSION["age"];
    ?>
</body>
</html>

<?php

session_start();

$_SESSION["nom"] = "LECLERCQ";
$_SESSION["prenom"] = "Jean-Michel";
$_SESSION["age"] = "37";
