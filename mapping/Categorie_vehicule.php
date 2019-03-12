<?php

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 06/08/2017
 * Time: 00:09
 */
class Categorie_vehicule
{
    private $id_cat;
    private $libelle_categorie;

    function __construct($id_cat='',$libelle_categorie='')
    {
        $this->id_cat=$id_cat;
        $this->libelle_categorie=$libelle_categorie;
    }

    /**
     * @return string
     */
    public function getIdCat()
    {
        return $this->id_cat;
    }

    /**
     * @param string $id_cat
     */
    public function setIdCat($id_cat)
    {
        $this->id_cat = $id_cat;
    }

    /**
     * @return mixed
     */
    public function getLibelleCategorie()
    {
        return $this->libelle_categorie;
    }

    /**
     * @param mixed $libelle_categorie
     */
    public function setLibelleCategorie($libelle_categorie)
    {
        $this->libelle_categorie = $libelle_categorie;
    }


}