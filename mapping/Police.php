<?php

/**
 * Created by PhpStorm.
 * User: mouhaf
 * Date: 06/08/2017
 * Time: 00:10
 */
class Police
{
    private $id_police;
    private $num_police;
    private $date_police;
    private $numFacture;
    private $attestation;
    private $validation;
    private $etat;
    private $intermediaire;
    private $conducteur_vehicule;
    private $periode_garantie;
    private $vehicule;
    private $decompte_prime;
    private $red_maj;
    private $assure;


    function __construct($id_police='',$num_police='',$date_police='',$numFacture='',$attestation='',$validation='',$etat='', $intermediaire='',$conducteur_vehicule='',$periode_garantie='',$vehicule='',$decompte_prime='',$red_maj='',$assure='')
    {
        $this->id_police   = $id_police;
        $this->num_police  = $num_police;
        $this->date_police = $date_police;
        $this->numFacture=$numFacture;
        $this->attestation = $attestation;
        $this->validation=$validation;
        $this->etat=$etat;
        $this->intermediaire=$intermediaire;
        $this->conducteur_vehicule=$conducteur_vehicule;
        $this->periode_garantie=$periode_garantie;
        $this->vehicule=$vehicule;
        $this->decompte_prime=$decompte_prime;
        $this->red_maj=$red_maj;
        $this->assure=$assure;

    }

    /**
     * @return string
     */
    public function getIdPolice()
    {
        return $this->id_police;
    }

    /**
     * @param string $id_police
     */
    public function setIdPolice($id_police)
    {
        $this->id_police = $id_police;
    }

    /**
     * @return string
     */
    public function getNumPolice()
    {
        return $this->num_police;
    }

    /**
     * @param string $num_police
     */
    public function setNumPolice($num_police)
    {
        $this->num_police = $num_police;
    }

    /**
     * @return int
     */
    public function getIntermediaire()
    {
        return $this->intermediaire;
    }

    /**
     * @param int $intermediaire
     */
    public function setIntermediaire($intermediaire)
    {
        $this->intermediaire = $intermediaire;
    }

    /**
     * @return string
     */
    public function getConducteurVehicule()
    {
        return $this->conducteur_vehicule;
    }

    /**
     * @param string $conducteur_vehicule
     */
    public function setConducteurVehicule($conducteur_vehicule)
    {
        $this->conducteur_vehicule = $conducteur_vehicule;
    }

    /**
     * @return string
     */
    public function getPeriodeGarantie()
    {
        return $this->periode_garantie;
    }

    /**
     * @param string $periode_garantie
     */
    public function setPeriodeGarantie($periode_garantie)
    {
        $this->periode_garantie = $periode_garantie;
    }

    /**
     * @return string
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param string $vehicule
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
    }

    /**
     * @return string
     */
    public function getDecomptePrime()
    {
        return $this->decompte_prime;
    }

    /**
     * @param string $decompte_prime
     */
    public function setDecomptePrime($decompte_prime)
    {
        $this->decompte_prime = $decompte_prime;
    }

    /**
     * @return string
     */
    public function getRedMaj()
    {
        return $this->red_maj;
    }

    /**
     * @param string $red_maj
     */
    public function setRedMaj($red_maj)
    {
        $this->red_maj = $red_maj;
    }

    /**
     * @return string
     */
    public function getAssure()
    {
        return $this->assure;
    }

    /**
     * @param string $assure
     */
    public function setAssure($assure)
    {
        $this->assure = $assure;
    }

    /**
     * @return string
     */
    public function getDatePolice()
    {
        return $this->date_police;
    }

    /**
     * @param string $date_police
     */
    public function setDatePolice($date_police)
    {
        $this->date_police = $date_police;
    }

    /**
     * @return string
     */
    public function getAttestation()
    {
        return $this->attestation;
    }

    /**
     * @param string $attestation
     */
    public function setAttestation(string $attestation)
    {
        $this->attestation = $attestation;
    }

    /**
     * @return string
     */
    public function getNumFacture()
    {
        return $this->numFacture;
    }

    /**
     * @param string $numFacture
     */
    public function setNumFacture(string $numFacture)
    {
        $this->numFacture = $numFacture;
    }


    /**
     * @return string
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * @param string $validation
     */
    public function setValidation(string $validation)
    {
        $this->validation = $validation;
    }

     /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat(string $etat)
    {
        $this->etat = $etat;
    }

    
  /*  public function getIdAnnulation()
    {
        return $this->id_annulation;
    }

    public function setIdAnnulation($id_annulation)
    {
        $this->id_annulation = $id_annulation;
    }*/

}