<?php

class modelInstrument {
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

    public function __construct(array $datas){
        $this->hydrate($datas);
    }

    private function hydrate(array $datas){
        foreach($datas as $key => $value){
            $name = "set".ucfirst($key);
            if(method_exists($this, $name)){
                $this->$name($value);
            }
        }
    }


    /**
     * Get the value of idInstrument
     */
    public function getIdInstrument(): int
    {
        return $this->idInstrument;
    }

    /**
     * Set the value of idInstrument
     */
    public function setIdInstrument(int $idInstrument): self
    {
        $this->idInstrument = $idInstrument;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of technics
     */
    public function getTechnics(): ?string
    {
        return $this->technics;
    }

    /**
     * Set the value of technics
     */
    public function setTechnics(?string $technics): self
    {
        $this->technics = $technics;

        return $this;
    }

    /**
     * Get the value of visible
     */
    public function getVisible(): int
    {
        return $this->visible;
    }

    /**
     * Set the value of visible
     */
    public function setVisible(int $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get the value of history
     */
    public function getHistory(): string
    {
        return $this->history;
    }

    /**
     * Set the value of history
     */
    public function setHistory(string $history): self
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get the value of idCategory
     */
    public function getIdCategory(): int
    {
        return $this->idCategory;
    }

    /**
     * Set the value of idCategory
     */
    public function setIdCategory(int $idCategory): self
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get the value of nomCategory
     */
    public function getNomCategory(): string
    {
        return $this->nomCategory;
    }

    /**
     * Set the value of nomCategory
     */
    public function setNomCategory(string $nomCategory): self
    {
        $this->nomCategory = $nomCategory;

        return $this;
    }

    /**
     * Get the value of musicianFirstname
     */
    public function getMusicianFirstname(): ?string
    {
        return $this->musicianFirstname;
    }

    /**
     * Set the value of musicianFirstname
     */
    public function setMusicianFirstname(?string $musicianFirstname): self
    {
        $this->musicianFirstname = $musicianFirstname;

        return $this;
    }

    /**
     * Get the value of musicianLastname
     */
    public function getMusicianLastname(): ?string
    {
        return $this->musicianLastname;
    }

    /**
     * Set the value of musicianLastname
     */
    public function setMusicianLastname(?string $musicianLastname): self
    {
        $this->musicianLastname = $musicianLastname;

        return $this;
    }

    /**
     * Get the value of sound
     */
    public function getSound(): ?string
    {
        return $this->sound;
    }

    /**
     * Set the value of sound
     */
    public function setSound(?string $sound): self
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture(): ?string
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     */
    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of idSound
     */
    public function getIdSound(): ?int
    {
        return $this->idSound;
    }

    /**
     * Set the value of idSound
     */
    public function setIdSound(?int $idSound): self
    {
        $this->idSound = $idSound;

        return $this;
    }

    /**
     * Get the value of idPicture
     */
    public function getIdPicture(): ?int
    {
        return $this->idPicture;
    }

    /**
     * Set the value of idPicture
     */
    public function setIdPicture(?int $idPicture): self
    {
        $this->idPicture = $idPicture;

        return $this;
    }

    /**
     * Get the value of idMusician
     */
    public function getIdMusician(): ?int
    {
        return $this->idMusician;
    }

    /**
     * Set the value of idMusician
     */
    public function setIdMusician(?int $idMusician): self
    {
        $this->idMusician = $idMusician;

        return $this;
    }

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
    LEFT JOIN instrument_has_category ihc 
    ON i.id= ihc.instrument_id 
    LEFT JOIN category c 
    ON ihc.category_id=c.id 
    WHERE i.id=$idInstrument;");

    $sql2 = $dbConnect->query("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible, s.id AS idSound ,s.titre as sound,s.instrument_id, p.id AS idPicture, p.name as picture ,p.id_instrument,m.id as idMusician, m.firstname as musicianFirstname, m.lastname as musicianLastname,m.id_instrument 
    FROM instrument i 
    LEFT JOIN sound s 
    ON  i.id = s.instrument_id 
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    LEFT JOIN musician m 
    ON i.id=m.id_instrument 
    WHERE i.id =$idInstrument;");

    $dbConnect->commit();

     $sql->setFetchMode(PDO::FETCH_CLASS, 'Instrument') ;
    
    $datasDetailInstrument = $sql->fetch();

    $sql2->setFetchMode(PDO::FETCH_INTO, $datasDetailInstrument) ;

    $sql2->fetch();

    return $datasDetailInstrument;
}









function fetchAllInstrument (pdo $dbConnect){
    

    $dbConnect->beginTransaction();
   
    $sql = $dbConnect->prepare("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible, c.id as idCategory,c.nomcategory as nomCategory, s.id AS idSound ,s.titre as sound, p.id AS idPicture, p.name as picture ,m.id as idMusician, m.firstname as musicianFirstname, m.lastname as musicianLastname

    FROM instrument i 
    LEFT JOIN instrument_has_category ihc 
    ON i.id= ihc.instrument_id 
    LEFT JOIN category c 
    ON ihc.category_id=c.id 
    LEFT JOIN sound s 
    ON  i.id = s.instrument_id 
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    LEFT JOIN musician m 
    ON i.id=m.id_instrument ;");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
    $datasAllInstrument = $sql->fetchAll();

    


    $dbConnect->commit();

    
    
   
   
   
    return $datasAllInstrument;
}








/*function fetchAllInstrument (pdo $dbConnect){
    

    $dbConnect->beginTransaction();
   
    $sql = $dbConnect->prepare("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible, c.id as idCategory,c.nomcategory as nomCategory, s.id AS idSound ,s.titre as sound, p.id AS idPicture, p.name as picture ,m.id as idMusician, m.firstname as musicianFirstname, m.lastname as musicianLastname

    FROM instrument i 
    LEFT JOIN instrument_has_category ihc 
    ON i.id= ihc.instrument_id 
    LEFT JOIN category c 
    ON ihc.category_id=c.id 
    LEFT JOIN sound s 
    ON  i.id = s.instrument_id 
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    LEFT JOIN musician m 
    ON i.id=m.id_instrument ;");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
    $datasAllInstrument = $sql->fetchAll();

    


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