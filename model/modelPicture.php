<?php

function addPicture(pdo $dbConnect, string $name, string $description, $files, string $idInstrument ){
    
    
    $name = htmlspecialchars(strip_tags(trim($name)), ENT_QUOTES);
    $description = htmlspecialchars(strip_tags(trim($description)), ENT_QUOTES);
    $files = new modelMyUpload($_FILES['customFile']);
    echo "$files";
    if ($files->uploaded) {
      $files->file_new_name_body   = 'image_resized';
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
    /*$path = file_dst_path ;*/
    $name = 
    $idInstrument = (int) (htmlspecialchars(strip_tags(trim($idInstrument)), ENT_QUOTES));
    

    $sql = $dbConnect->prepare("INSERT INTO musician (name, description, id_instrument, imageMini, imageMiddle, imageFull) VALUES (?,?,?,?)");

    $sql->bindParam(1, $name ,PDO::PARAM_STR);
    $sql->bindParam(2, $description ,PDO::PARAM_STR);
    /*$sql->bindParam(3, $imageMini ,PDO::PARAM_STR);
    $sql->bindParam(4, $imageMiddle ,PDO::PARAM_STR);
    $sql->bindParam(5, $imageFull ,PDO::PARAM_STR);*/
    $sql->bindParam(3, $idInstrument ,PDO::PARAM_INT);
   
    try{
        $sql->execute();
    }catch(Exception $e){
        return $e = throw new Exception ("Problème lors de l'ajout veuillez recommencer");

    }
    
}
#function addPicture($dbConnect);