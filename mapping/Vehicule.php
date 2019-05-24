<?php

class Vehicule{
    private $id_vehicule;
    private $marque;
    private $type;
    private $immatriculation;
    private $puissance;
    private $energie;
    private $charge_utile;
    private $places;
    private $genre;
    private $chassis;
    private $cylindre;
    private $date_mec;
    private $valeur_neuve;
    private $valeur_venale;
    private $nom_chauffeur;
    private $categorie;



    function __construct($id_vehicule='',$marque='',$type='',$immatriculation='',$puissance='',$energie='',$charge_utile='',$places='',$genre='',$chassis='',$cylindre='',$date_mec='',$valeur_neuve='',$valeur_venale='',$nom_chauffeur='',$categorie='')
    {
        $this->id_vehicule=$id_vehicule;
        $this->marque=$marque;
        $this->type=$type;
        $this->immatriculation=$immatriculation;
        $this->puissance=$puissance;
        $this->energie=$energie;
        $this->charge_utile=$charge_utile;
        $this->places=$places;
        $this->genre=$genre;
        $this->chassis=$chassis;
        $this->cylindre=$cylindre;
        $this->date_mec=$date_mec;
        $this->valeur_neuve=$valeur_neuve;
        $this->valeur_venale=$valeur_venale;
        $this->nom_chauffeur=$nom_chauffeur;
        $this->categorie=$categorie;

    }

    /**
     * @return string
     */
    public function getIdVehicule()
    {
        return $this->id_vehicule;
    }

    /**
     * @param string $id_vehicule
     */
    public function setIdVehicule($id_vehicule)
    {
        $this->id_vehicule = $id_vehicule;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @param string $immatriculation
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
    }

    /**
     * @return string
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param string $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    /**
     * @return string
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * @param string $energie
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;
    }

    /**
     * @return string
     */
    public function getChargeUtile()
    {
        return $this->charge_utile;
    }

    /**
     * @param string $charge_utile
     */
    public function setChargeUtile($charge_utile)
    {
        $this->charge_utile = $charge_utile;
    }

    /**
     * @return int
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * @param int $places
     */
    public function setPlaces($places)
    {
        $this->places = $places;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return int
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param int $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getChassis()
    {
        return $this->chassis;
    }

    /**
     * @param string $chassis
     */
    public function setChassis($chassis)
    {
        $this->chassis = $chassis;
    }

    /**
     * @return mixed
     */
    public function getCylindre()
    {
        return $this->cylindre;
    }

    /**
     * @param mixed $cylindre
     */
    public function setCylindre($cylindre)
    {
        $this->cylindre = $cylindre;
    }

    /**
     * @return date
     */
    public function getDateMec()
    {
        return $this->date_mec;
    }

    /**
     * @param date $date_mec
     */
    public function setDateMec($date_mec)
    {
        $this->date_mec = $date_mec;
    }

    /**
     * @param string 
     */
    public function getValeurNeuve()
    {
        return $this->valeur_neuve;
    }

    /**
     * @param string 
     */
    public function setValeurNeuve($valeur_neuve)
    {
        $this->valeur_neuve = $valeur_neuve;
    }

    /**
     * @param string 
     */
    public function getValeurVenale()
    {
        return $this->valeur_venale;
    }

    /**
     * @param string 
     */
    public function setValeurVenale($valeur_venale)
    {
        $this->valeur_venale = $valeur_venale;
    }

    /**
     * @return string
     */
    public function getNomChauffeur()
    {
        return $this->nom_chauffeur;
    }

    /**
     * @param string $nom_chauffeur
     */
    public function setNomChauffeur($nom_chauffeur)
    {
        $this->nom_chauffeur = $nom_chauffeur;
    }


}

