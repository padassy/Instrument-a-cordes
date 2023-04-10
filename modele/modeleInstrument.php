<?php
class Instrument {
    public int $idInstrument;
    public string $title ;
    public string $description ;
    public string|null $technics ;
    public int $visible;
    public string $history ;
    public int $idCategory ;
    public string $nomCategory ;
    public string|null $musicianFirstname ;
    public string|null $musicianLastname ;
    public string|null $sound ;
    public string|null $picture;

    public int|null $idSound;
    public int|null $idPicture;
    
    public int|null $idMusician;

    /*public function __construct($idInstrument, $title,$description,$technics,$visible,$history,$idCategory,$nomCategory,$musicianFirstname,$musicianLastname,$sound,$picture,$idSound,$idPicture,$idMusician) {
        $this->idInstrument = $idInstrument;
        $this->title=$title;
        $this->description = $description;
        $this->technics = $technics;
        $this->visible = $visible;
        $this->history = $history;
        $this->idCategory = $idCategory;
        $this->nomCategory = $nomCategory;
        $this->musicianFirstname = $musicianFirstname;
        $this->musicianLastname = $musicianLastname;
        $this->sound = $sound;
        $this->picture = $picture;
        $this->idSound = $idSound;
        $this->idMusician = $idMusician;
        $this->idPicture=$idPicture;
        
        
      }
      public function get($k) {
        return $this->$k;
      }*/
}

function fetchInstrument(pdo $dbConnect){
    $sql = $dbConnect->query('SELECT i.id , i.title,i.description,i.history,i.technics,i.category_id, ihc.instrument_id, ihc.category_id, c.id, c.nomcategory
    FROM instrument i
    INNER JOIN instrument_has_category ihc
    ON i.id = ihc.instrument_id
    INNER JOIN category c
    ON ihc.category_id = c.id');
}

function fetchInstrumentHome(pdo $dbConnect) {
        $sql= $dbConnect->query('SELECT id, title , LEFT(description,150)as shortdescription FROM instrument LIMIT 10');
        $dataInstrumentHome= $sql->fetchAll(PDO::FETCH_ASSOC);
        return $dataInstrumentHome;
}
function truncate (string $text): string{
    // fonction qui trouve un numérique qui est la dernière sous chaine dans une chaine pour remplacer $cut : " "
    $cut = strrpos($text, ' ');
    return substr ($text, 0,$cut);
}

function fetchDetailInstrument (pdo $dbConnect, int $idInstrument){
    

    $dbConnect->beginTransaction();

    $sql = $dbConnect->query("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible,i.category_id,ihc.instrument_id, ihc.category_id,c.id as idCategory,c.nomcategory as nomCategory
    FROM instrument i 
    INNER JOIN instrument_has_category ihc 
    ON i.id= ihc.instrument_id 
    INNER JOIN category c 
    ON ihc.category_id=c.id 
    WHERE i.id='$idInstrument';");

    $sql2 = $dbConnect->query("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible, s.id AS idSound ,s.titre as sound,s.instrument_id, p.id AS idPicture, p.name as picture ,p.id_instrument,m.id as idMusician, m.firstname as musicianFirstname, m.lastname as musicianLastname,m.id_instrument 
    FROM instrument i 
    LEFT JOIN sound s 
    ON  i.id = s.instrument_id 
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    LEFT JOIN musician m 
    ON i.id=m.id_instrument 
    WHERE i.id = '$idInstrument';");

    $dbConnect->commit();

     $sql->setFetchMode(PDO::FETCH_CLASS, 'Instrument') ;
    
    $datasDetailInstrument = $sql->fetch();

    $sql2->setFetchMode(PDO::FETCH_INTO, $datasDetailInstrument) ;

    $sql2->fetch();

    return $datasDetailInstrument;
}










function fetchAllInstrument (pdo $dbConnect){
    

    $dbConnect->beginTransaction();
    $datasAllInstrument = new Instrument();
    $sql = $dbConnect->prepare("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible,i.category_id,ihc.instrument_id, ihc.category_id,c.id as idCategory,c.nomcategory as nomCategory
    FROM instrument i 
    INNER JOIN instrument_has_category ihc 
    ON i.id= ihc.instrument_id 
    INNER JOIN category c 
    ON ihc.category_id=c.id ;");
    $datassql = $sql->setFetchMode(PDO::FETCH_INTO, $datasAllInstrument) ;
    $datassql = $sql->execute();
    $sql->fetch();

    $sql2 = $dbConnect->prepare("SELECT i.id as idInstrument, s.id AS idSound ,s.titre as sound,s.instrument_id, p.id AS idPicture, p.name as picture ,p.id_instrument,m.id as idMusician, m.firstname as musicianFirstname, m.lastname as musicianLastname,m.id_instrument 
    FROM instrument i 
    LEFT JOIN sound s 
    ON  i.id = s.instrument_id 
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    LEFT JOIN musician m 
    ON i.id=m.id_instrument ;");
     $datassql= $sql2->setFetchMode(PDO::FETCH_INTO, $datasAllInstrument) ;
     $sql2->execute();
    $sql2->fetch();
    $dbConnect->commit();

    
    
   
   
   
    return $datasAllInstrument;
}



/*function foreachInstrument(object $object) {
    $data=[];
    foreach($object as $item){
        $datas= new Instrument();
        $datas->idInstrument = $item->idInstrument;
        $datas->title = $item->title;
        $datas->technics = $item->technics;
        $datas->description = $item->description;
        $datas->visible = $item->visible;
        $datas->idCategory = $item->idCategory;
        $datas->nomCategory = $item->nomCategory;
        $datas->musicianFirstname = $item->musicianFirstname;
        $datas->musicianLastname = $item->musicianLastname;
        $datas->audio = $item->audio;
        $datas->picture = $item->picture;
        $datas->idAudio = $item->idAudio;
        $datas->idPicture = $item->idPicture;
        $datas->idMusician = $item->idMusician;
        $data[]=$datas;
    }
    return $data;

}
/*SELECT c.id,c.nomcategory, ih.instrument_id,ih.category_id,i.id,i.title,i.description,i.history,i.technics,i.visible FROM category c INNER JOIN instrument_has_category ih ON c.id=ih.category_id INNER JOIN instrument i ON c.id = i.id where c.id=?;

SELECT i.id, i.title, i.description, i.history, i.technics,i.visible,i.category_id,s.id AS idSound ,s.titre,s.instrument_id, p.id AS idPicture, p.name,p.id_instrument,m.id as idMusician, m.firstname,m.lastname,m.id_instrument
FROM instrument i
INNER JOIN sound s
ON i.id = s.instrument_id
INNER JOIN picture p 
ON i.id = p.id_instrument
INNER JOIN musician m 
ON i.id=m.id_instrument



function fetchAllInstrument (pdo $dbConnect, int $countInstrument){
   
for ($i=0; $i <=$countInstrument; $i++){
    $dbConnect->beginTransaction();
    $dataAllInstrument = new Instrument();
    $sql = $dbConnect->prepare("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible,i.category_id,ihc.instrument_id, ihc.category_id,c.id as idCategory,c.nomcategory as nomCategory
    FROM instrument i 
    INNER JOIN instrument_has_category ihc 
    ON i.id= ihc.instrument_id 
    INNER JOIN category c 
    ON ihc.category_id=c.id ;");
    $datassql = $sql->setFetchMode(PDO::FETCH_CLASS, 'Instrument') ;
    $datassql = $sql->execute();
    $sql->fetch();

    $sql2 = $dbConnect->prepare("SELECT i.id as idInstrument, s.id AS idSound ,s.titre as sound,s.instrument_id, p.id AS idPicture, p.name as picture ,p.id_instrument,m.id as idMusician, m.firstname as musicianFirstname, m.lastname as musicianLastname,m.id_instrument 
    FROM instrument i 
    LEFT JOIN sound s 
    ON  i.id = s.instrument_id 
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    LEFT JOIN musician m 
    ON i.id=m.id_instrument ;");
     $datassql= $sql2->setFetchMode(PDO::FETCH_INTO, $dataAllInstrument) ;
     $sql2->execute();
    $sql2->fetch();
    $dbConnect->commit();
$datasAllInstrument[]=$dataAllInstrument;
}
    
   
   
   
    return $datasAllInstrument;
}
*/