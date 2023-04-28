<?php


function addMusician(pdo $dbConnect, string $firstname, string $lastname, string $bio, string $idInstrument ){
    $firstname = htmlspecialchars(strip_tags(trim($firstname)), ENT_QUOTES);
    $lastname = htmlspecialchars(strip_tags(trim($lastname)), ENT_QUOTES);
    $bio = htmlspecialchars(strip_tags(trim($bio)), ENT_QUOTES);
    $idInstrument = (int) (htmlspecialchars(strip_tags(trim($idInstrument)), ENT_QUOTES));
    echo "traitement" ;

    $sql = $dbConnect->prepare("INSERT INTO musician (firstname, lastname, biography, id_instrument) VALUES (?,?,?,?)");

    $sql->bindParam(1, $firstname ,PDO::PARAM_STR);
    $sql->bindParam(2, $lastname ,PDO::PARAM_STR);
    $sql->bindParam(3, $bio ,PDO::PARAM_STR);
    $sql->bindParam(4, $idInstrument ,PDO::PARAM_INT);
    echo"avant le try";
    try{
        $sql->execute();
    }catch(Exception $e){
        return $e = throw new Exception( "Problème lors de l'ajout veuillez recommencer");

    }
    
}