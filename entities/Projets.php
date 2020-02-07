<?php
class Projets
{
    protected $idProjet;
    protected $nameProjet;
    protected $descProjet;
    protected $imageId;

    public function __construct(array $array)
    {
    	$this->hydrate($array);
    }

    public function hydrate(array $donnees)
    {
    	foreach ($donnees as $key => $value) {
    		$method = 'set' . ucfirst($key);
    		if (method_exists($this, $method)) {
    			$this->$method($value);
    		}
    	}
    }

    /**
     * Get the value of idProjet
     */ 
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set the value of idProjet
     *
     * @return  self
     */ 
    public function setIdProjet($idProjet)
    {
        $idProjet = (int) $idProjet;
        $this->idProjet = $idProjet;

        return $this;
    }

    /**
     * Get the value of nameProjet
     */ 
    public function getNameProjet()
    {
        return $this->nameProjet;
    }

    /**
     * Set the value of nameProjet
     *
     * @return  self
     */ 
    public function setNameProjet($nameProjet)
    {
        $this->nameProjet = $nameProjet;

        return $this;
    }

    /**
     * Get the value of descProjet
     */ 
    public function getDescProjet()
    {
        return $this->descProjet;
    }

    /**
     * Set the value of descProjet
     *
     * @return  self
     */ 
    public function setDescProjet($descProjet)
    {
        $this->descProjet = $descProjet;

        return $this;
    }

    /**
     * Get the value of imageId
     */ 
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Set the value of imageId
     *
     * @return  self
     */ 
    public function setImageId($imageId)
    {
        $imageId = (int) $imageId;
        $this->imageId = $imageId;

        return $this;
    }
}