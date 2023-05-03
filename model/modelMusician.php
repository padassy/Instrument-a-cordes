<?php
function allMusician(pdo $dbConnect){
    $sql= $dbConnect->query('SELECT m.id as idMusician , m.firstname as musicianFirstname, m.lastname as musicianLastname, m.biography as musicianBio, m.bornDate as musicianBorn,m.deathDate as musicianDeath FROM  musician m ');
          $dataMusician= $sql->fetchAll(PDO::FETCH_ASSOC);
          $sql->closeCursor();
          return $dataMusician;
  }
function musicianById(pdo $dbConnect, int $idMusician){
    $sql= $dbConnect->query("SELECT i.title,m.id as idMusician , m.firstname as musicianFirstname, m.lastname as musicianLastname, m.biography as musicianBio, m.bornDate as musicianBorn,m.deathDate as musicianDeath, m.id_instrument as idInstrument FROM  musician m INNER JOIN instrument i ON m.id_instrument = i.id WHERE m.id = '$idMusician'");
          $dataMusician= $sql->fetch(PDO::FETCH_ASSOC);
          $sql->closeCursor();
          return $dataMusician;
  }

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
function updateMusician(pdo $dbConnect, string $firstname, string $lastname, string $bio, string $idInstrument,$idMusician ){
    $firstname = htmlspecialchars(strip_tags(trim($firstname)), ENT_QUOTES);
    $lastname = htmlspecialchars(strip_tags(trim($lastname)), ENT_QUOTES);
    $bio = htmlspecialchars(strip_tags(trim($bio)), ENT_QUOTES);
    $idInstrument = (int) (htmlspecialchars(strip_tags(trim($idInstrument)), ENT_QUOTES));
    echo "traitement" ;

    $sql = $dbConnect->prepare("UPDATE musician SET firstname=?, lastname=?, biography=?, id_instrument=? WHERE id = $idMusician");
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

function deleteMusician(pdo $dbConnect, int $idInstrumentDelete){
    $sql= $dbConnect->prepare('DELETE FROM musician WHERE id='.$idInstrumentDelete.'');
    $sql->execute();
    header("Location:./");
    return "Projet bien effacé";
}