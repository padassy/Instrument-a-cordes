<?php
class Category{

    public int  $idCategory ; 
    public  string $nameCategory ;
    public string $title ;
    public string $description ;
    public null|string $technics ;
    public int $visible;
    public string $history ;
    public null|string $intro ;

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
    public function setNameCategory(string $nameCategory): self
    {
        $this->nameCategory= $nameCategory;

        return $this;
    }
  

}


# menu - to PDO with query
function fetchCategory(PDO $db): array  {
    $sql ="SELECT id as idCategory, nameCategory as nameCategory FROM category ORDER BY id ASC";
    try{
        $query=$db->query($sql);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $category= $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $category;
    
}



// récupère une catégorie complète
function recupCategoryById(PDO $db,int $idcategory):array|bool{

    $recup = "SELECT c.id as idCategory,c.nameCategory, i.title,i.description,i.history,i.technics,i.visible, i.intro FROM category c 
    INNER JOIN category_has_instrument ih 
    ON c.id=ih.category_id
    INNER JOIN instrument i 
    ON ih.instrument_id = i.id where c.id=?;" ;
    $prepare = $db -> prepare($recup);
    try{
        $prepare->execute([$idcategory]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $bp = $prepare->fetchAll(PDO::FETCH_ASSOC);
    $prepare->closeCursor();
    return $bp;
    
}

