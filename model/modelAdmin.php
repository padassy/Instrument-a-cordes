<?php

// connexion admin
function connectAdmin (pdo $dbConnect, string $userLogin, string $userPassword): string|bool {


    try{
        $sqlAdmin=$dbConnect -> query("SELECT login, password FROM admin WHERE login='$userLogin'");
    }catch(Exception $e){
        $e = throw new Exception ($e -> getMessage());
    }
    $recup = $sqlAdmin->fetch(PDO::FETCH_ASSOC);

    if(password_verify($userPassword, $recup['password'])){


        $_SESSION = $recup;

        unset($_SESSION['password']);

        $_SESSION['uniqueId'] = session_id();

        #echo "<h1>Admin connecté</h1>";

        // on envoie vraie si la connexion est une réussite
        return true;
    }else{
        $e = throw new Exception( "Login ou mot de passe incorrecte");
    }
        
    }




    function disconnect(){
        
        $_SESSION = [];
    
        
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
    
        
        session_destroy();
    }




