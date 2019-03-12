<?php

class Assure{
    private $id_assure;
    private $nom_assure;
    private $prenom_assure;
    private $adresse_assure;
    private $tel_assure;
    private $email_assure;

    function __construct($id_assure='',$nom_assure='',$prenom_assure='',$adresse_assure='',$tel_assure='',$email_assure='')
    {
        $this->id_assure=$id_assure;
        $this->nom_assure=$nom_assure;
        $this->prenom_assure=$prenom_assure;
        $this->adresse_assure=$adresse_assure;
        $this->tel_assure=$tel_assure;
        $this->email_assure=$email_assure;
    }
    public function getId_assure()
    {
        return $this->id_assure;
    }
    public function setId_assure($id_assure)
    {
        $this->id_assure=$id_assure;
    }


    public function getNom_assure()
    {
        return $this->nom_assure;
    }

    public function setNom_assure($nom_assure)
    {
        $this->nom_assure;
    }


    public function getPrenom_assure()
    {
        return $this->prenom_assure;
    }

    public function setPrenom_assure($prenom_assure)
    {
        $this->prenom_assure;
    }


    public function getAdresse_assure()
    {
        return $this->adresse_assure;
    }
    public function setAdresse_assure($adresse_assure)
    {
        $this->adresse_assure;
    }

    public function getTel_assure()
    {
        return $this->tel_assure;
    }
    public function setTel_assure($tel_assure)
    {
        $this->tel_assure;;
    }

    /**
     * @return string
     */
    public function getEmailAssure()
    {
        return $this->email_assure;
    }

    /**
     * @param string $email_assure
     */
    public function setEmailAssure(string $email_assure)
    {
        $this->email_assure = $email_assure;
    }

}