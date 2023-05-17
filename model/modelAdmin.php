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

   function searching(pdo $dbConnect, string $terme ){
    $terme = trim($terme);
    $terme = strip_tags($terme); 
    $terme = strtolower($terme);
    $select_terme_instrument = $dbConnect->prepare("SELECT i.id as idInstrument, i.title,i.description as description , i.history, i.intro, i.technics as technics ,i.visible,i.date as dateArticle FROM instrument i WHERE i.title  LIKE ? OR i.intro LIKE ? OR i.description LIKE ? OR i.technics LIKE ? OR i.history LIKE ?");
    
    $select_terme_musician = $dbConnect->prepare("SELECT m.id as idMusician , m.firstname as musicianFirstname, m.lastname as musicianLastname, m.biography as musicianBio, m.bornDate as musicianBorn,m.deathDate as musicianDeath FROM musician m WHERE m.firstname LIKE ? OR m.lastname LIKE ? OR m.biography LIKE ?");
    
    $select_terme_picture = $dbConnect->prepare("SELECT p.id as idPicture , p.name as pictureName, p.description as pictureDescription,p.date as pictureDate,p.dateFetch as pictureDateFetch  FROM  picture p WHERE p.name LIKE ? OR p.description LIKE ?");
       
    $select_terme_sound = $dbConnect->prepare("SELECT s.id as idSound, s.name as soundName, s.audio as sound, s.description as soundDescription,s.date as soundDate  FROM  sound s WHERE s.name LIKE ? OR s.description LIKE ?");
    try{

    $select_terme_instrument->execute(array("%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%"));
    $instrumentSearchResult = $select_terme_instrument->fetchAll(PDO::FETCH_ASSOC);

    $select_terme_musician->execute(array("%".$terme."%", "%".$terme."%", "%".$terme."%"));

    $musicianSearchResult = $select_terme_musician->fetchAll(PDO::FETCH_ASSOC);

        $musicianCount = $select_terme_musician->rowCount();


    $select_terme_picture->execute(array("%".$terme."%", "%".$terme."%"));

    $pictureSearchResult = $select_terme_picture->fetchAll(PDO::FETCH_ASSOC);
    
    $pictureCount = $select_terme_picture->rowCount();


    $select_terme_sound->execute(array("%".$terme."%", "%".$terme."%"));

    $soundSearchResult = $select_terme_sound->fetchAll(PDO::FETCH_ASSOC);

    $soundCount = $select_terme_sound-> rowCount();

    for($i = 0;$i<$musicianCount;$i++){
    array_push($instrumentSearchResult ,$musicianSearchResult[$i]);
    }

    for($i = 0;$i<$pictureCount;$i++){
    array_push($instrumentSearchResult , $pictureSearchResult[$i]);
    }
    for($i = 0;$i<$soundCount;$i++){
    array_push($instrumentSearchResult , $soundSearchResult[$i]);
    }
    #var_dump($instrumentSearchResult);
    unset($musicianSearchResult);
    unset($pictureSearchResult);
    unset($soundSearchResult);
    return $instrumentSearchResult;
}catch(Exception $e){
        $e = throw new Exception('Un problème est survenu lors de la requête');
    }
   }




