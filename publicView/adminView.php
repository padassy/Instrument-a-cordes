<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>
<body>
    <?php
    if(isset($e)){
        echo $e;
    }
    if(empty($_SESSION)):
    ?>
    <form action="" method="POST" id="contactForm">
        <label for="userLogin">Login :</label>
        <input type="text" name="userLogin" required>
        <label for="userPassword">Mot de passe :</label>
        <input type="password" name="userPassword" required>
        <input type="checkbox" placeholder="Rester connecter">
        <button type="submit">Se connecter</button>

    </form>
    <?php
    else:

        if (!empty($_SESSION)):
        ?>
        <a href="?p=disconnect">Se deconnecter</a>
        <?php
        endif;

    endif;
    ?>
</body>
</html>

