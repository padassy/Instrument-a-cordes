<?php
function allPicture(pdo $dbConnect){
  $sql= $dbConnect->query('SELECT p.id as idPicture , p.name as pictureName, p.description as pictureDescription, p.imageMini as pictureMini,p.imageMiddle as pictureMiddle,p.imageFull as pictureFull,p.date as pictureDate,p.dateFetch as pictureDateFetch  FROM  picture p ORDER BY p.dateFetch DESC');
        $dataPicture= $sql->fetchAll(PDO::FETCH_ASSOC);
        $sql->closeCursor();
        return $dataPicture;
}
function pictureById(pdo $dbConnect,int $idPicture){
  $sql= $dbConnect->query("SELECT i.title,p.id as idPicture , p.name as pictureName, p.description as pictureDescription, p.imageMini as pictureMini,p.imageMiddle as pictureMiddle,p.imageFull as pictureFull,p.id_instrument as idInstrument,p.date as pictureDate,p.dateFetch as pictureDateFetch  FROM  picture p INNER JOIN instrument i ON p.id_instrument = i.id WHERE p.id ='$idPicture '");
        $dataPicture= $sql->fetch(PDO::FETCH_ASSOC);
        $sql->closeCursor();
        return $dataPicture;
}



function updatePicture(pdo $dbConnect, string $name, string $description,null|string $date,string $dateFetch, string $idInstrument,int $idPicture ){
    
    
    $name = htmlspecialchars(strip_tags(trim($name)), ENT_QUOTES);
    $description = htmlspecialchars(strip_tags(trim($description)), ENT_QUOTES);
    $date = htmlspecialchars(strip_tags(trim($date)), ENT_QUOTES);
    $dateFetch = htmlspecialchars(strip_tags(trim($dateFetch)), ENT_QUOTES);
    $idPicture = (int) htmlspecialchars(strip_tags(trim($idPicture)), ENT_QUOTES);
    $idInstrument = (int) htmlspecialchars(strip_tags(trim($idInstrument)), ENT_QUOTES);
    #var_dump($idPicture);
    /*$files = new modelMyUpload($_FILES['addPicture']);
 
    #var_dump($files);
   
    if ($files->uploaded) {
      $files->file_new_name_body   = $name;
     # $files->file_safe_name = true;
      $files->image_convert = 'jpg';
      $files->image_resize         = true;
      $files->image_x              = 500;
      $files->image_ratio_y        = true;
      $files->process('assets/imgInstrument/mini');
      $pathMini = $files->file_dst_pathname ;
      $files->file_new_name_body   = $name;
      #$$files->file_safe_name = true;
      $files->image_convert = 'jpg';
      $files->image_resize         = true;
      $files->image_x              = 1000;
      $files->image_ratio_y        = true;
      $files->process('assets/imgInstrument/middle');
      $pathMiddle = $files->file_dst_pathname ;
      $files->file_new_name_body   = $name;
     # $files->file_safe_name = true;
      $files->image_convert = 'jpg';
      $files->image_resize         = true;
      $files->image_x              = 2500;
      $files->image_ratio_y        = true;
      $files->process('assets/imgInstrument/full');
      $pathFull = $files->file_dst_pathname ;

      if ($files->processed) {
        echo 'image resized ';
        $files->clean();
        
      } else {
        echo 'error : ' . $files->error;
      }
    
  }
    
  
    var_dump($pathMini); 
    var_dump($pathMiddle); 
    var_dump($pathFull); 
    $pathMini = str_replace("\\", "/", $pathMini); 
    $pathMiddle = str_replace("\\", "/", $pathMiddle); 
    $pathFull = str_replace("\\", "/", $pathFull);
    $idInstrument = (int) (htmlspecialchars(strip_tags(trim($idInstrument)), ENT_QUOTES));
    $pathMini = htmlspecialchars(strip_tags(trim($pathMini)), ENT_QUOTES);
    $pathMiddle = htmlspecialchars(strip_tags(trim($pathMiddle)), ENT_QUOTES);
    $pathFull = htmlspecialchars(strip_tags(trim($pathFull)), ENT_QUOTES);*/
    

    $sql = $dbConnect->prepare("UPDATE picture SET name=?, description=?,date=?,dateFetch=?, id_instrument=? WHERE id = $idPicture");

    $sql->bindParam(1, $name ,PDO::PARAM_STR);
    $sql->bindParam(2, $description ,PDO::PARAM_STR);
    $sql->bindParam(3, $date ,PDO::PARAM_STR);
    $sql->bindParam(4, $dateFetch ,PDO::PARAM_STR);
    $sql->bindParam(5,  $idInstrument ,PDO::PARAM_INT);
    
   #echo "traitement donnees";
    try{
        $sql->execute();
        #header("Refresh:3");
       # echo "execute";
    }catch(Exception $e){
        return $e = throw new Exception ("Problème lors de l'ajout veuillez recommencer");

    }
    
}
function addPicture(pdo $dbConnect, string $name, string $description, array $files, string $date, string $orientation, string $idInstrument ){
    
    
    $name = htmlspecialchars(strip_tags(trim($name)), ENT_QUOTES);
    $description = htmlspecialchars(strip_tags(trim($description)), ENT_QUOTES);
    $date = htmlspecialchars(strip_tags(trim($date)), ENT_QUOTES);
    $orientation = htmlspecialchars(strip_tags(trim($orientation)), ENT_QUOTES);
    $files = new modelMyUpload($_FILES['addPicture']);
 
    #var_dump($files);
   
    if ($files->uploaded) {
      $files->file_new_name_body   = $name;
     # $files->file_safe_name = true;
      $files->image_convert = 'jpg';
      $files->image_resize         = true;
      $files->image_x              = 500;
      $files->image_ratio_y        = true;
      $files->process('assets/imgInstrument/mini');
      $pathMini = $files->file_dst_pathname ;
      $files->file_new_name_body   = $name;
      #$$files->file_safe_name = true;
      $files->image_convert = 'jpg';
      $files->image_resize         = true;
      $files->image_x              = 1500;
      $files->image_ratio_y        = true;
      $files->process('assets/imgInstrument/middle');
      $pathMiddle = $files->file_dst_pathname ;
      $files->file_new_name_body   = $name;
     # $files->file_safe_name = true;
      $files->image_convert = 'jpg';
      $files->image_resize         = true;
      $files->image_x              = 4500;
      $files->image_ratio_y        = true;
      $files->process('assets/imgInstrument/full');
      $pathFull = $files->file_dst_pathname ;

      if ($files->processed) {
        #echo 'image resized ';
        $files->clean();
        
      } else {
        echo 'error : ' . $files->error;
      }
    
  }
    
  
    #var_dump($pathMini); 
    #var_dump($pathMiddle); 
    #var_dump($pathFull); 
    $pathMini = str_replace("\\", "/", $pathMini); 
    $pathMiddle = str_replace("\\", "/", $pathMiddle); 
    $pathFull = str_replace("\\", "/", $pathFull);
    $idInstrument = (int) (htmlspecialchars(strip_tags(trim($idInstrument)), ENT_QUOTES));
    $pathMini = htmlspecialchars(strip_tags(trim($pathMini)), ENT_QUOTES);
    $pathMiddle = htmlspecialchars(strip_tags(trim($pathMiddle)), ENT_QUOTES);
    $pathFull = htmlspecialchars(strip_tags(trim($pathFull)), ENT_QUOTES);
    

    $sql = $dbConnect->prepare("INSERT INTO picture (name, description, imageMini, imageMiddle, imageFull,date,orientation, id_instrument) VALUES (?,?,?,?,?,?,?,?)");

    $sql->bindParam(1, $name ,PDO::PARAM_STR);
    $sql->bindParam(2, $description ,PDO::PARAM_STR);
    $sql->bindParam(3, $pathMini ,PDO::PARAM_STR);
    $sql->bindParam(4,  $pathMiddle ,PDO::PARAM_STR);
    $sql->bindParam(5,  $pathFull ,PDO::PARAM_STR);
    $sql->bindParam(6,  $date ,PDO::PARAM_STR);
    $sql->bindParam(7,  $orientation ,PDO::PARAM_STR);
    $sql->bindParam(8,  $idInstrument ,PDO::PARAM_INT);
    
   #echo "traitement donnees";
    try{
        $sql->execute();
        #echo "execute";
    }catch(Exception $e){
        return $e = throw new Exception ("Problème lors de l'ajout veuillez recommencer");

    }
    
}


function deletePicture(pdo $dbConnect, int $idInstrumentDelete){
  $sql2 = $dbConnect->prepare('SELECT * FROM picture WHERE id=?');
  $sql= $dbConnect->prepare('DELETE FROM picture WHERE id='.$idInstrumentDelete.'');
  $sql2->execute([$idInstrumentDelete]);
  $picture= $sql2->fetch(PDO::FETCH_ASSOC);
  unlink($picture['imageMini']);
  unlink($picture['imageMiddle']);
  unlink($picture['imageFull']);
  $sql->execute();
  header("Location:./");
  return "Projet bien effacé";
}#function addPicture($dbConnect);