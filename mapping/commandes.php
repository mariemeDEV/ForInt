<?php

class Commandes{
    private $id_commande;
    private $date_commande;
    private $matricule_intermediaire;
    private $nombre_attestation_verte;
    private $nombre_attestation_jaune;
    private $nombre_attestation_cedeao;
    private $etat_commande;

    function __construct($date_commande='',$matricule_intermediaire='',$nombre_attestation_verte='',$nombre_attestation_jaune='',$nombre_attestation_cedeao='', $etat_commande='')
    {
        $this->date_commande=$date_commande;
        $this->matricule_intermediaire=$matricule_intermediaire;
        $this->nombre_attestation_verte=$nombre_attestation_verte;
        $this->nombre_attestation_jaune=$nombre_attestation_jaune;
        $this->nombre_attestation_cedeao=$nombre_attestation_cedeao;
        $this->etat_commande= $etat_commande;
    }
  

    /**
     * Get the value of id_commande
     */ 
    public function getId_commande()
    {
        return $this->id_commande;
    }

    /**
     * Set the value of id_commande
     *
     * @return  self
     */ 
    public function setId_commande($id_commande)
    {
        $this->id_commande = $id_commande;

        return $this;
    }

    /**
     * Get the value of date_commande
     */ 
    public function getDate_commande()
    {
        return $this->date_commande;
    }

    /**
     * Set the value of date_commande
     *
     * @return  self
     */ 
    public function setDate_commande($date_commande)
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    /**
     * Get the value of matricule_intermediaire
     */ 
    public function getMatricule_intermediaire()
    {
        return $this->matricule_intermediaire;
    }

    /**
     * Set the value of matricule_intermediaire
     *
     * @return  self
     */ 
    public function setMatricule_intermediaire($matricule_intermediaire)
    {
        $this->matricule_intermediaire = $matricule_intermediaire;

        return $this;
    }

    /**
     * Get the value of nombre_attestation_verte
     */ 
    public function getNombre_attestation_verte()
    {
        return $this->nombre_attestation_verte;
    }

    /**
     * Set the value of nombre_attestation_verte
     *
     * @return  self
     */ 
    public function setNombre_attestation_verte($nombre_attestation_verte)
    {
        $this->nombre_attestation_verte = $nombre_attestation_verte;

        return $this;
    }

    /**
     * Get the value of nombre_attestation_jaune
     */ 
    public function getNombre_attestation_jaune()
    {
        return $this->nombre_attestation_jaune;
    }

    /**
     * Set the value of nombre_attestation_jaune
     *
     * @return  self
     */ 
    public function setNombre_attestation_jaune($nombre_attestation_jaune)
    {
        $this->nombre_attestation_jaune = $nombre_attestation_jaune;

        return $this;
    }

    /**
     * Get the value of nombre_attestation_cedeao
     */ 
    public function getNombre_attestation_cedeao()
    {
        return $this->nombre_attestation_cedeao;
    }

    /**
     * Set the value of nombre_attestation_cedeao
     *
     * @return  self
     */ 
    public function setNombre_attestation_cedeao($nombre_attestation_cedeao)
    {
        $this->nombre_attestation_cedeao = $nombre_attestation_cedeao;

        return $this;
    }

    /**
     * Get the value of etat_commande
     */ 
    public function getEtat_commande()
    {
        return $this->etat_commande;
    }
    /**
     * Set the value of etat_commande
     *
     * @return  self
     */ 
    public function setEtat_commande($etat_commande)
    {
        $this->etat_commande = $etat_commande;

        return $this;
    }
}