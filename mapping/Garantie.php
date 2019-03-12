<?php

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 06/08/2017
 * Time: 14:18
 */
class Garantie
{
    private $id_garantie;
    private $libelle_garantie;

    function __construct($id_garantie='',$libelle_garantie='')
    {
        $this->id_garantie=$id_garantie;
        $this->libelle_garantie=$libelle_garantie;
    }

    /**
     * @return string
     */
    public function getIdGarantie()
    {
        return $this->id_garantie;
    }

    /**
     * @param string $id_garantie
     */
    public function setIdGarantie($id_garantie)
    {
        $this->id_garantie = $id_garantie;
    }

    /**
     * @return string
     */
    public function getLibelleGarantie()
    {
        return $this->libelle_garantie;
    }

    /**
     * @param string $libelle_garantie
     */
    public function setLibelleGarantie($libelle_garantie)
    {
        $this->libelle_garantie = $libelle_garantie;
    }



}