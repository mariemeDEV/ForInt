<?php

/**
 * Created by PhpStorm.
 * User: mouha
 * Date: 06/08/2017
 * Time: 00:09
 */
class Conducteur_vehicule
{
    private $id_cond;
    private $nom_conducteur;
    private $prenom_conducteur;
    private $annee_permis;
    private $duree_conduite;

    function __construct($id_cond='',$nom_conducteur='',$prenom_conducteur='',$annee_permis='',$duree_conduite='')
    {
        $this->id_cond=$id_cond;
        $this->nom_conducteur=$nom_conducteur;
        $this->prenom_conducteur=$prenom_conducteur;
        $this->annee_permis=$annee_permis;
        $this->duree_conduite=$duree_conduite;


    }

    /**
     * @return string
     */
    public function getIdCond()
    {
        return $this->id_cond;
    }

    /**
     * @param string $id_cond
     */
    public function setIdCond($id_cond)
    {
        $this->id_cond = $id_cond;
    }

    /**
     * @return string
     */
    public function getNomConducteur()
    {
        return $this->nom_conducteur;
    }

    /**
     * @param string $nom_conducteur
     */
    public function setNomConducteur($nom_conducteur)
    {
        $this->nom_conducteur = $nom_conducteur;
    }

    /**
     * @return string
     */
    public function getPrenomConducteur()
    {
        return $this->prenom_conducteur;
    }

    /**
     * @param string $prenom_conducteur
     */
    public function setPrenomConducteur($prenom_conducteur)
    {
        $this->prenom_conducteur = $prenom_conducteur;
    }

    /**
     * @return string
     */
    public function getAnneePermis()
    {
        return $this->annee_permis;
    }

    /**
     * @param string $annee_permis
     */
    public function setAnneePermis($annee_permis)
    {
        $this->annee_permis = $annee_permis;
    }

    /**
     * @return string
     */
    public function getDureeConduite()
    {
        return $this->duree_conduite;
    }

    /**
     * @param string $duree_conduite
     */
    public function setDureeConduite($duree_conduite)
    {
        $this->duree_conduite = $duree_conduite;
    }


}