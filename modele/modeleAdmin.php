<?php

// connexion admin
function connectadmin (pdo $dbConnect, string $userLogin, string $userPassword): string|bool {

    // sql - récupération via le username uniquement
    $userLogin = $_POST['username'];
    $userPassword= $_POST['password'];
    $sqlAdmin=$dbConnect -> prepare("SELECT * FROM user WHERE login='$userLogin'");

    try{
        $sqlAdmin->execute();
    }catch(PDOException $e){
        $e = throw new Exception ($e -> getMessage());
    }
    $recup = $sqlAdmin->fetch(PDO::FETCH_ASSOC);

    if(password_verify($userPassword, $recup['password'])){
        $_SESSION['nomDuChamps'];
        // on envoie vraie si la connexion est une réussite
        return true;
    }else{
        $e = throw new Exception( "Login ou mot de passe incorrecte");
    }
        
    }
