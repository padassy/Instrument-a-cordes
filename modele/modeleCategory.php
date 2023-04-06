<?php
class Category{

    public int  $id ; 
    public  string  $nomcategory ; 
  

}

function dataCategory($categorys,$dataCategory,$idcategory,$nomcategory):array {
$categorys =[]; 
foreach($dataCategory as $item): 
    $category = new Category(); 
    $idcategory->$item['id']; 
    $nomcategory->$item['nomcategory']; 
    $categorys[]=$category; 
endforeach; 
     return $categorys; 
}
# menu - to PDO with query
function fetchCategory(PDO $db): array {
    $sql ="SELECT id, nomcategory FROM category ORDER BY id ASC";
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
    $recup = "SELECT * FROM category where id=?";
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

