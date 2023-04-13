<?php
class modelMusician {

}
/**
 * Summary of modelInstrument
 */
class modelInstrument {
    public int|string $idInstrument;
    public string $title ;
    public string $description ;
    public null|string $technics ;
    public int $visible;
    public string $history ;
    public null|string $intro ;
    public int|string  $idCategory ;
    public string $nameCategory ;
    public int|null|string $idMusician;
    public null|string $musicianFirstname ;
    public null|string $musicianLastname ;
    public null|string $musicianBio;
    public int|null|string $idSound;
    public null|string $soundName ;
    public null|string $soundDescription ;
    public null|string $sound ;
    public int|null|string $idPicture;
    public null|string $pictureName;
    public null|string $pictureDescription;
    public null|string $picture;

    
    
    
    

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


    public function getIdInstrument(): int | string
    {
        return $this->idInstrument;
    }

    /**
     * Set the value of idInstrument
     */
    public function setIdInstrument(int | string $idInstrument): self
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
     * Get the value of intro
     */
    public function getIntro(): ?string
    {
        return $this->intro;
    }

    /**
     * Set the value of intro
     */
    public function setIntro(?string $intro): self
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get the value of idCategory
     */
    public function getIdCategory(): int|string 
    {
        return $this->idCategory;
    }

    /**
     * Set the value of idCategory
     */
    public function setIdCategory(int|string  $idCategory): self
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get the value of nameCategory
     */
    public function getNameCategory(): string
    {
        return $this->nameCategory;
    }

    /**
     * Set the value of nameCategory
     */
    public function setNameCategory(string $nameCategory): self
    {
        $this->nameCategory = $nameCategory;

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
     * Get the value of musicianBio
     */
    public function getMusicianBio(): ?string
    {
        return $this->musicianBio;
    }

    /**
     * Set the value of musicianBio
     */
    public function setMusicianBio(?string $musicianBio): self
    {
        $this->musicianBio = $musicianBio;

        return $this;
    }

    /**
     * Get the value of soundName
     */
    public function getSoundName(): ?string
    {
        return $this->soundName;
    }

    /**
     * Set the value of soundName
     */
    public function setSoundName(?string $soundName): self
    {
        $this->soundName = $soundName;

        return $this;
    }

    /**
     * Get the value of soundDescription
     */
    public function getSoundDescription(): ?string
    {
        return $this->soundDescription;
    }

    /**
     * Set the value of soundDescription
     */
    public function setSoundDescription(?string $soundDescription): self
    {
        $this->soundDescription = $soundDescription;

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
     * Get the value of pictureName
     */
    public function getPictureName(): ?string
    {
        return $this->pictureName;
    }

    /**
     * Set the value of pictureName
     */
    public function setPictureName(?string $pictureName): self
    {
        $this->pictureName = $pictureName;

        return $this;
    }

    /**
     * Get the value of pictureDescription
     */
    public function getPictureDescription(): ?string
    {
        return $this->pictureDescription;
    }

    /**
     * Set the value of pictureDescription
     */
    public function setPictureDescription(?string $pictureDescription): self
    {
        $this->pictureDescription = $pictureDescription;

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
    public function getIdSound():  int | string | null 
    {
        return $this->idSound;
    }

    /**
     * Set the value of idSound
     */
    public function setIdSound(int | string | null  $idSound): self
    {
        $this->idSound = $idSound;

        return $this;
    }

    /**
     * Get the value of idPicture
     */
    public function getIdPicture(): int | string | null 
    {
        return $this->idPicture;
    }

    /**
     * Set the value of idPicture
     */
    public function setIdPicture(int | string | null  $idPicture): self
    {
        $this->idPicture = $idPicture;

        return $this;
    }

    /**
     * Get the value of idMusician
     */
    public function getIdMusician(): int | string | null 
    {
        return $this->idMusician;
    }

    /**
     * Set the value of idMusician
     */
    public function setIdMusician(int | string | null  $idMusician): self
    {
        $this->idMusician = $idMusician;

        return $this;
    }
}


function fetchInstrumentHome(pdo $dbConnect):array { 
        $sql= $dbConnect->query('SELECT id, title , LEFT(description,150)as shortdescription FROM instrument LIMIT 10');
        $dataInstrumentHome= $sql->fetchAll(PDO::FETCH_ASSOC);
        $sql->closeCursor();
        return $dataInstrumentHome;
}
function truncate (string $text): string{
    // fonction qui trouve un numérique qui est la dernière sous chaine dans une chaine pour remplacer $cut : " "
    $cut = strrpos($text, ' ');
    return substr ($text, 0,$cut);
}

function fetchDetailInstrument (pdo $dbConnect, int $idInstrument):array{
    
    $dbConnect->beginTransaction();
    $sql = $dbConnect->query("SELECT i.id as idInstrument, i.title, i.description, i.history, i.intro, i.technics,i.visible, c.id as idCategory,c.namecategory as nameCategory
    FROM instrument i 
    LEFT JOIN category_has_instrument ihc 
    ON i.id= ihc.instrument_id 
    LEFT JOIN category c 
    ON ihc.category_id=c.id 
    WHERE i.id=$idInstrument;");
    $sql2 = $dbConnect->query("SELECT GROUP_CONCAT(m.id) as idMusician, GROUP_CONCAT(m.firstname SEPARATOR '||') as musicianFirstname, GROUP_CONCAT(m.biography SEPARATOR '||')as musicianBio,  GROUP_CONCAT(m.lastname SEPARATOR '||')as musicianLastname
    FROM instrument i
    LEFT JOIN musician m 
    ON i.id=m.id_instrument 
    WHERE i.id=$idInstrument;");
    $sql3 = $dbConnect->query("SELECT GROUP_CONCAT(s.id) AS idSound , GROUP_CONCAT(s.name SEPARATOR '||') as soundName, GROUP_CONCAT(s.audio SEPARATOR '||')as sound, GROUP_CONCAT(s.description SEPARATOR '||') as soundDescription
    FROM instrument i
    LEFT JOIN sound s 
    ON  i.id = s.id_instrument
    WHERE i.id=$idInstrument;");
    $sql4 = $dbConnect->query("SELECT GROUP_CONCAT(p.id) AS idPicture,  GROUP_CONCAT(p.name SEPARATOR '||')as pictureName, GROUP_CONCAT(p.description SEPARATOR '||') as pictureDescription,GROUP_CONCAT(p.image SEPARATOR '||') as picture 
    FROM instrument i
    LEFT JOIN picture p 
    ON i.id = p.id_instrument  
    WHERE i.id=$idInstrument;");

    $assetInstru = $sql->fetch(PDO::FETCH_ASSOC);
    $assetInstru2 = $sql2->fetch(PDO::FETCH_ASSOC);
    $assetInstru3 = $sql3->fetch(PDO::FETCH_ASSOC);
    $assetInstru4 = $sql4->fetch(PDO::FETCH_ASSOC);

   
        array_push($assetInstru, $assetInstru2);
    
   
        array_push($assetInstru, $assetInstru3);
    
    
        array_push($assetInstru, $assetInstru4);
    
    
        $instrument = $assetInstru + $assetInstru[0];
       $instrument = $instrument + $assetInstru[1];
       $instrument = $instrument + $assetInstru[2];
    
    unset($instrument[0]);
    unset($instrument[1]);
    unset($instrument[2]);
    

    
    $dbConnect->commit();
    
 
    var_dump($instrument);

    $sql->closeCursor();
    $sql2->closeCursor();
    $sql3->closeCursor();
    $sql4->closeCursor();

    return $instrument;
}








function fetchAllInstrument (pdo $dbConnect) :array{
    

    $dbConnect->beginTransaction();

    $sql = $dbConnect->query("SELECT i.id as idInstrument, i.title, i.description, i.history, i.intro, i.technics,i.visible, 
    GROUP_CONCAT(c.id SEPARATOR '||') as idCategory,GROUP_CONCAT(c.namecategory) as nameCategory
    FROM instrument i  
    LEFT JOIN category_has_instrument ihc 
    ON i.id= ihc.instrument_id 
    LEFT JOIN category c 
    ON ihc.category_id=c.id
    GROUP BY i.id");
    $nbRow = $sql->rowCount();
    $sql2 = $dbConnect->query("SELECT GROUP_CONCAT(m.id) as idMusician, GROUP_CONCAT(m.firstname SEPARATOR '||') as musicianFirstname, GROUP_CONCAT(m.biography SEPARATOR '||')as musicianBio,  GROUP_CONCAT(m.lastname SEPARATOR '||')as musicianLastname
    FROM instrument i
    LEFT JOIN musician m 
    ON i.id=m.id_instrument
    GROUP BY m.id_instrument
        ;");
   
    $sql3 = $dbConnect->query("SELECT GROUP_CONCAT(s.id) AS idSound , GROUP_CONCAT(s.name SEPARATOR '||') as soundName, GROUP_CONCAT(s.audio SEPARATOR '||')as sound, GROUP_CONCAT(s.description SEPARATOR '||') as soundDescription
    FROM instrument i
    LEFT JOIN sound s 
    ON  i.id = s.id_instrument
    GROUP BY i.id
    ;");
    $sql4 = $dbConnect->query("SELECT GROUP_CONCAT(p.id) AS idPicture,  GROUP_CONCAT(p.name SEPARATOR '||')as pictureName, GROUP_CONCAT(p.description SEPARATOR '||') as pictureDescription,GROUP_CONCAT(p.image SEPARATOR '||') as picture 
    FROM instrument i
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    GROUP BY i.id
    ;");
    

    
    $assetInstru = $sql->fetchAll(PDO::FETCH_ASSOC);
    $assetInstru2 = $sql2->fetchAll(PDO::FETCH_ASSOC);
    $assetInstru3 = $sql3->fetchAll(PDO::FETCH_ASSOC);
    $assetInstru4 = $sql4->fetchAll(PDO::FETCH_ASSOC);
    
     for ($i=0;$i<$nbRow;$i++){
        array_push($assetInstru[$i], $assetInstru2[$i]);
    }
    for ($i=0;$i<10;$i++){
        array_push($assetInstru[$i], $assetInstru3[$i]);
    }
    for ($i=0;$i<$nbRow;$i++){
        array_push($assetInstru[$i], $assetInstru4[$i]);
    }
    for ($i=0;$i<$nbRow;$i++){
       $assetInstru[$i] = $assetInstru[$i]+ $assetInstru[$i][0];
       $assetInstru[$i] = $assetInstru[$i]+ $assetInstru[$i][1];
       $assetInstru[$i] = $assetInstru[$i]+ $assetInstru[$i][2];
    }
    for ($i=0;$i<$nbRow;$i++){
       unset($assetInstru[$i][0]);
       unset($assetInstru[$i][1]);
       unset($assetInstru[$i][2]);
    }


   /* echo "datasInstru";
    var_dump($assetInstru);
    echo "datasInstru2";
    var_dump($assetInstru[0][0]);
    echo "datasInstru2";
    var_dump($assetInstru[0][1]);
    echo "datasInstru2";
    var_dump($assetInstru[0][2]);*/

    $dbConnect->commit();
    $sql->closeCursor();
    $sql2->closeCursor();
    $sql3->closeCursor();
    $sql4->closeCursor();

    return $assetInstru;
}

/*function fetchAllInstrument (pdo $dbConnect){
    

    $dbConnect->beginTransaction();
   
    $sql = $dbConnect->query("   SELECT s.id AS idSound , s.name  as soundName, s.audio as sound, s.description  as soundDescription, 
    p.id AS idPicture,  p.name as pictureName, p.description  as pictureDescription,p.image  as picture ,
    m.id as idMusician, m.firstname  as musicianFirstname, m.biography as musicianBio,  m.lastname as musicianLastname,
    (SELECT i.id as idInstrument, i.title, i.description, i.history, i.intro, i.technics,i.visible, 
    GROUP_CONCAT(c.id SEPARATOR '||') as idCategory,GROUP_CONCAT(c.namecategory) as nameCategory
    FROM instrument i  
    LEFT JOIN category_has_instrument ihc 
    ON i.id= ihc.instrument_id 
    LEFT JOIN category c 
    ON ihc.category_id=c.id) as assetInstrument
    FROM instrument i
    LEFT JOIN sound s 
    ON  i.id = s.id_instrument
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    LEFT JOIN musician m 
    ON i.id=m.id_instrument
    ;");
    $datasAllInstrument = $sql->fetchAll(PDO::FETCH_ASSOC);

    
    


    $dbConnect->commit();

    
    
   
   
   
    return $datasAllInstrument;
}








/*function fetchAllInstrument (pdo $dbConnect){
    

    $dbConnect->beginTransaction();
   
    $sql = $dbConnect->prepare("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible, c.id as idCategory,c.namecategory as nameCategory, s.id AS idSound ,s.name as sound, p.id AS idPicture, p.name as picture ,m.id as idMusician, m.firstname as musicianFirstname, m.lastname as musicianLastname

    FROM instrument i 
    LEFT JOIN category_has_instrument ihc 
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
        $datas->nameCategory = $item->nameCategory;
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
/*SELECT c.id,c.namecategory, ih.instrument_id,ih.category_id,i.id,i.title,i.description,i.history,i.technics,i.visible FROM category c INNER JOIN category_has_instrument ih ON c.id=ih.category_id INNER JOIN instrument i ON c.id = i.id where c.id=?;

SELECT i.id, i.title, i.description, i.history, i.technics,i.visible,i.category_id,s.id AS idSound ,s.name,s.instrument_id, p.id AS idPicture, p.name,p.id_instrument,m.id as idMusician, m.firstname,m.lastname,m.id_instrument
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
    $sql = $dbConnect->prepare("SELECT i.id as idInstrument, i.title, i.description, i.history, i.technics,i.visible,i.category_id,ihc.instrument_id, ihc.category_id,c.id as idCategory,c.namecategory as nameCategory
    FROM instrument i 
    INNER JOIN category_has_instrument ihc 
    ON i.id= ihc.instrument_id 
    INNER JOIN category c 
    ON ihc.category_id=c.id ;");
    $datassql = $sql->setFetchMode(PDO::FETCH_CLASS, 'Instrument') ;
    $datassql = $sql->execute();
    $sql->fetch();

    $sql2 = $dbConnect->prepare("SELECT i.id as idInstrument, s.id AS idSound ,s.name as sound,s.instrument_id, p.id AS idPicture, p.name as picture ,p.id_instrument,m.id as idMusician, m.firstname as musicianFirstname, m.lastname as musicianLastname,m.id_instrument 
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



        $sql = $dbConnect->prepare("SELECT i.id as idInstrument, i.title, i.description, i.history, i.intro, i.technics,i.visible, 
    GROUP_CONCAT(c.id SEPARATOR '||') as idCategory,GROUP_CONCAT(c.namecategory) as nameCategory,    
    (SELECT GROUP_CONCAT(s.id) AS idSound , GROUP_CONCAT(s.name SEPARATOR '||') as soundName, GROUP_CONCAT(s.audio SEPARATOR '||')as sound, GROUP_CONCAT(s.description SEPARATOR '||') as soundDescription, 
    GROUP_CONCAT(p.id) AS idPicture,  GROUP_CONCAT(p.name SEPARATOR '||')as pictureName, GROUP_CONCAT(p.description SEPARATOR '||') as pictureDescription,GROUP_CONCAT(p.image SEPARATOR '||') as picture ,
    GROUP_CONCAT(m.id) as idMusician, GROUP_CONCAT(m.firstname SEPARATOR '||') as musicianFirstname, GROUP_CONCAT(m.biography SEPARATOR '||')as musicianBio,  GROUP_CONCAT(m.lastname SEPARATOR '||')as musicianLastname
    FROM instrument i
    LEFT JOIN sound s 
    ON  i.id = s.id_instrument
    LEFT JOIN picture p 
    ON i.id = p.id_instrument 
    LEFT JOIN musician m 
    ON i.id=m.id_instrument) as assetInstrument
    FROM instrument i 
    LEFT JOIN category_has_instrument ihc 
    ON i.id= ihc.instrument_id 
    LEFT JOIN category c 
    ON ihc.category_id=c.id;");

/*$musician = [];
array_push($musician,explode("||",$instruments[1]->musicianLastname));
array_push($musician,explode("||",$instruments[1]->musicianFirstname));
array_push($musician,explode("||",$instruments[1]->musicianBio));
var_dump($musician);

/*$audio = [];
array_push($audio,explode("||",$instruments[0]->soundName));
array_push($audio,explode("||",$instruments[0]->soundDescription));
array_push($audio,explode("||",$instruments[0]->$sound));
var_dump($audio);

$picture = [];
array_push($picture,explode("||",$instruments[0]->pictureName));
array_push($picture,explode("||",$instruments[0]->pictureDescription));
array_push($picture,explode("||",$instruments[0]->picture));
var_dump($picture);*/




    