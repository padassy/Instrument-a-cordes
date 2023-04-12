<?php
class Category{

    public int  $id ; 
    public  string  $nameCategory ; 
  

}

function dataCategory($categorys,$dataCategory,$idcategory,$nameCategory):array {
$categorys =[]; 
foreach($dataCategory as $item): 
    $category = new Category(); 
    $idcategory->$item['id']; 
    $nameCategory->$item['nameCategory']; 
    $categorys[]=$category; 
endforeach; 
     return $categorys; 
}
# menu - to PDO with query
function fetchCategory(PDO $db): array {
    $sql ="SELECT id, nameCategory FROM category ORDER BY id ASC";
    try{
        $query=$db->query($sql);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $dataCategory= $query->fetchAll(PDO::FETCH_ASSOC); 
    return $dataCategory;
}



// récupère une catégorie complète
function recupCategoryById(PDO $db,int $idcategory):array|bool{

    $recup = "SELECT c.id,c.nameCategory, ih.instrument_id,ih.category_id,i.id,i.title,i.description,i.history,i.technics,i.visible FROM category c INNER JOIN category_has_instrument ih ON c.id=ih.category_id INNER JOIN instrument i ON c.id = i.id where c.id=?;" ;
    $prepare = $db -> prepare($recup);
    try{
        $prepare->execute([$idcategory]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $bp = $prepare->fetch(PDO::FETCH_ASSOC);
    $prepare->closeCursor();
    return $bp;
}

