<?php

function addPicture(pdo $dbConnect, string $name, string $description, array $files, string $idInstrument ){
    
    
    $name = htmlspecialchars(strip_tags(trim($name)), ENT_QUOTES);
    $description = htmlspecialchars(strip_tags(trim($description)), ENT_QUOTES);
    $files = new modelMyUpload($_FILES['customFile']);
    #var_dump($files);
    if ($files->uploaded) {
      $files->file_new_name_body   = $name;
      $files->image_convert = 'jpg';
      $files->image_resize         = true;
      $files->image_x              = 100;
      $files->image_ratio_y        = true;
      $files->process('assets/test');
      if ($files->processed) {
        echo 'image resized';
        $files->clean();
      } else {
        echo 'error : ' . $files->error;
      }
    }
    $pathMini = $files->file_dst_pathname ;
    var_dump($pathMini); 
    var_dump($files);
    $idInstrument = (int) (htmlspecialchars(strip_tags(trim($idInstrument)), ENT_QUOTES));
    

    $sql = $dbConnect->prepare("INSERT INTO picture (name, description, imageMini, imageMiddle, imageFull, id_instrument) VALUES (?,?,?,?,?,?)");

    $sql->bindParam(1, $name ,PDO::PARAM_STR);
    $sql->bindParam(2, $description ,PDO::PARAM_STR);
    $sql->bindParam(3, $pathMini ,PDO::PARAM_STR);
    $sql->bindParam(4,  $path ,PDO::PARAM_STR);
    $sql->bindParam(5,  $path ,PDO::PARAM_STR);
    $sql->bindParam(6,  $idInstrument ,PDO::PARAM_INT);
    
   echo "traitement donnees";
    try{
        $sql->execute();
        echo "execute";
    }catch(Exception $e){
        return $e = throw new Exception ("Problème lors de l'ajout veuillez recommencer");

    }
    
}
#function addPicture($dbConnect);