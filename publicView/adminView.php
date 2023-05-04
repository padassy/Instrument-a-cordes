<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/icone/lecteur-de-musique.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>
<body>
    <div id="adminPage" >
        
    <?php
    if(isset($e)){
        echo $e;
    }
    if(empty($_SESSION)):
    ?>
    <form action="" method="POST" id="adminForm">
        <div class="boxLabelInputAdmin">
            <label for="userLogin">Login :</label>
            <input type="text" name="userLogin" required>
        </div>
        <div class="boxLabelInputAdmin">
            <label for="userPassword">Mot de passe :</label>
            <input type="password" name="userPassword" required>
        </div>
        <input type="checkbox" placeholder="Rester connecter">
        <button type="submit" id="buttonAdmin">Se connecter</button>
        

    </form>
    <a href="./"><button id="buttonAdmin">Retour sur notre site...</button></a>
    <?php
    endif;
    ?>
    </div>
    <footer>
        <?php
    include_once "../publicView/src/footer.php";
        ?>
    </footer>
</body>
</html>

