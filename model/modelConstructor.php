<?php

class modelInstrument {
    public int|string $idInstrument;
    public string $title ;
    public string $description ;
    public null|string $shortdescription ;
    public null|string $technics ;
    public int $visible;
    public null|string $history ;
    public null|string $intro ;
    public int|null|string  $idCategory ;
    public string|null $nameCategory ;
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
    public null|string $pictureMini;
    public null|string $pictureMiddle;
    public null|string $pictureFull;

    
    
    
    

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
    public function getshortDescription(): string
    {
        return $this->shortdescription;
    }

    /**
     * Set the value of shortdescription
     */
    public function setshortDescription(string $shortdescription): self
    {
        $this->shortdescription = $shortdescription;

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
    public function getIdCategory(): int|string|null
    {
        return $this->idCategory;
    }

    /**
     * Set the value of idCategory
     */
    public function setIdCategory(int|string|null  $idCategory): self
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get the value of nameCategory
     */
    public function getNameCategory(): string|null
    {
        return $this->nameCategory;
    }

    /**
     * Set the value of nameCategory
     */
    public function setNameCategory(string|null $nameCategory): self
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
    public function getPictureMini(): ?string
    {
        return $this->pictureMini;
    }

    /**
     * Set the value of pictureMini
     */
    public function setPictureMini(?string $pictureMini): self
    {
        $this->pictureMini = $pictureMini;

        return $this;
    }
     
    public function getPictureMiddle(): ?string
    {
        return $this->pictureMiddle;
    }

    /**
     * Set the value of pictureMiddle
     */
    public function setPictureMiddle(?string $pictureMiddle): self
    {
        $this->pictureMiddle = $pictureMiddle;
        return $this;
        
    }
    public function getPictureFull(): ?string
    {
        return $this->pictureFull;
    }

    /**
     * Set the value of pictureFull
     */
    public function setPictureFull(?string $pictureFull): self
    {
        $this->pictureFull = $pictureFull;
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