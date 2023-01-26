<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exo 3</title>
</head>

<body>
    <?php
        $login = $_POST["login"];
        $password = $_POST["password"];

        setcookie("login", $login);
        setcookie("password", $password);

        echo "identifiant : " .$login . "<br>";
        echo "mot de passe : " .$password . "<br>";
    ?>
</body>
</html>
