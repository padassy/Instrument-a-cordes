<?php
function allSound(pdo $dbConnect){
  $sql= $dbConnect->query('SELECT s.id as idSound, s.name as soundName, s.audio as sound, s.description as soundDescription  FROM  sound s');
        $dataSound= $sql->fetchAll(PDO::FETCH_ASSOC);
        $sql->closeCursor();
        return $dataSound;
}


function addSound(pdo $dbConnect, string $name, string $description, array $files, string $idInstrument ){
    
    
    $name = htmlspecialchars(strip_tags(trim($name)), ENT_QUOTES);
    $description = htmlspecialchars(strip_tags(trim($description)), ENT_QUOTES);
    $files = new modelMyUpload($_FILES['addSound']);
 
    #var_dump($files);
   
    if ($files->uploaded) {
      $files->file_new_name_body   = $name;
     # $files->file_safe_name = true;
     $files->allowed = array('audio/mp3', '*/*');
    # $files->forbidden = array('');
      $files->process('assets/soundInstrument');
      $path = $files->file_dst_pathname ;
      $files->file_new_name_body   = $name;
      #$$files->file_safe_name = true;


      if ($files->processed) {
        echo 'image resized ';
        $files->clean();
        
      } else {
        echo 'error : ' . $files->error;
      }
    
  }
    
  
    var_dump($path);  
    $path = str_replace("\\", "/", $path); 
    $idInstrument = (int) (htmlspecialchars(strip_tags(trim($idInstrument)), ENT_QUOTES));
    $path = htmlspecialchars(strip_tags(trim($path)), ENT_QUOTES);
    

    $sql = $dbConnect->prepare("INSERT INTO sound (name, audio, description, id_instrument) VALUES (?,?,?,?)");

    $sql->bindParam(1, $name ,PDO::PARAM_STR);
    $sql->bindParam(2, $path ,PDO::PARAM_STR);
    $sql->bindParam(3, $description ,PDO::PARAM_STR);
    $sql->bindParam(4,  $idInstrument ,PDO::PARAM_INT);
    
   echo "traitement donnees";
    try{
        $sql->execute();
        echo "execute";
    }catch(Exception $e){
        return $e = throw new Exception ("Problème lors de l'ajout veuillez recommencer");

    }
    
}

function deleteSound(pdo $dbConnect, int $idInstrumentDelete){
    $sql= $dbConnect->prepare('DELETE FROM sound WHERE id='.$idInstrumentDelete.'');
    $sql->execute();
    header("Location:./");
    return "Projet bien effacé";
}
#function addPicture($dbConnect);