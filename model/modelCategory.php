<?php



# menu - to PDO with query
function fetchCategory(PDO $db): array  {
    $sql ="SELECT id as idCategory, nameCategory as nameCategory FROM category ORDER BY id ASC";
    try{
        $query=$db->query($sql);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $category= $query->fetchAll(PDO::FETCH_OBJ);
    $query->closeCursor();
    return $category;
    
}



// récupère une catégorie complète
function recupCategoryById(PDO $db,int $idcategory):array|bool{
    $db->beginTransaction();
    $recup = "SELECT c.id as idCategory,c.nameCategory,i.id as idInstrument, i.title,LEFT(i.description,500)as shortdescription,i.history,i.technics,i.visible, i.intro,p.id AS idPicture,  p.name as pictureName, p.description  as pictureDescription,p.imageMini  as pictureMini,p.imageMiddle  as pictureMiddle,p.imageFull  as pictureFull ,p.date as pictureDateTake,p.date as pictureDate
    FROM  instrument i
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    INNER JOIN category_has_instrument ih 
    ON i.id=ih.instrument_id
    INNER JOIN  category c
    ON ih.category_id = c.id 
    WHERE c.id=? AND i.visible = '1' AND p.orientation = 'l' 
    GROUP BY i.id;" ;
 
    
    $prepare = $db -> prepare($recup);
    
    
    try{
        $prepare->execute([$idcategory]);
       
        $db->commit();
    }catch(Exception $e){
        $db->rollBack();
        die($e->getMessage());
        
    }
    $bp = $prepare->fetchAll(PDO::FETCH_ASSOC);
    $bp = array_reverse($bp);


    

    
    $prepare->closeCursor();
    return $bp;
    
}

